<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-4.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-sort-amount-down"></i> Fila de procedimentos
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar a fila de procedimentos ordenados por urgência:<br>
                    </p>
                    <span class="fas fa-user-injured text-info" style="font-size:20px"></span> Não agudo
                    <span class="ml-3 fas fa-user-injured text-success" style="font-size:20px"></span> Baixa
                    <span class="ml-3 fas fa-user-injured text-warning" style="font-size:20px"></span>Intermediária
                    <span class="ml-3 fas fa-user-injured text-danger" style="font-size:20px"></span> Alta

                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">

        <table id="fila_procedimentos_datatable" class="table table-striped" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">PROCEDIMENTO</th>
                <th class="text-dark small text-left">DATA</th>
                <th class="text-dark small text-center align-top">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($procedimentos as $p) : ?>
                    <tr>
                        <td>
                            <?php switch ($p['procedimento_risco']) {
                                case '1':
                                    echo ('<span class="mr-2 fas fa-user-injured text-info" style="font-size:20px"></span>');
                                    break;
                                case '2':
                                    echo ('<span class="mr-2 fas fa-user-injured text-success" style="font-size:20px"></span>');
                                    break;
                                case '3':
                                    echo ('<span class="mr-2 fas fa-user-injured text-warning" style="font-size:20px"></span>');
                                    break;
                                case '4':
                                    echo ('<span class="mr-2 fas fa-user-injured text-danger" style="font-size:20px"></span>');
                                    break;
                                case '':
                                    echo ('<span class="mr-2 fas fa-user-injured text-muted" style="font-size:20px"></span>');
                                    break;
                            } ?>
                            <span class="small align-middle">
                                <a class="load_paciente_button" href="#" data-paciente_id="<?= $p['paciente_id'] ?>"><?= $p['nome_paciente'] ?></a>
                            </span>
                        </td>
                        <td class="small">
                            <?= $p['nome'] ?>
                        </td>
                        <td class="small">
                            <?= date_format(date_create($p['data_solicitacao']), 'd/m/Y') ?>
                        </td>

                        <td class="text-center p-1">
                            <div class="btn-group">
                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item agendar_procedimento_modal" data-procedimentos_id="<?= $p['procedimentos_id'] ?>"><i class="fa fa-calendar-alt"></i> Agendar procedimento</button>
                                        <button class="dropdown-item text-warning editar_procedimento_button" data-procedimentos_id="<?= $p['procedimentos_id'] ?>"><i class="fa fa-edit"></i> Editar procedimento</button>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-danger negar_procedimento_button" data-procedimentos_id="<?= $p['procedimentos_id'] ?>"><i class="fa fa-times"></i> Negar procedimento</button>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>



<!-- CARREGAR COMPONENTES -->
<?php $this->load->view('v2/components/editar_procedimento_modal') ?>
<?php $this->load->view('v2/components/agendar_procedimento_modal') ?>
<?php $this->load->view('v2/components/negar_procedimento_modal') ?>

<script>
    window.onload = function() {

        //Cria modal para editar procedimento
        var editar_procedimento_modal = new bootstrap.Modal(document.getElementById('editar_procedimento_modal'))

        // ABRE MODAL DE EDITAR
        $('.editar_procedimento_button').on('click', function() {
            var procedimentos_id = this.dataset.procedimentos_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/procedimentos/json/') ?>",
                    data: {
                        procedimentos_id: procedimentos_id,
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(procedimento) {
                    console.log(procedimento)
                    $('#procedimentos_id').val(procedimento.procedimentos_id);
                    $('#nome_paciente').val(procedimento.nome_paciente);
                    $('#agendar_procedimento_nome_procedimento').append(`
                        <option value="${procedimento.procedimentos_id}">
                            ${procedimento.nome}
                        </option>
                    `)
                    $("#especialidade").val(procedimento.especialidade);
                    $('#profissional_solicitante').append(`
                        <option value="${procedimento.profissional_id}">
                            ${procedimento.profissional_nome}
                        </option>
                    `);

                    $('#estabelecimento_solicitante').append(`
                        <option value="${procedimento.estabelecimento_id}">
                            ${procedimento.estabelecimento_nome}
                        </option>
                    `);
                    $('#nome_paciente').val(procedimento.nome_paciente);
                    $(".editarProcedimentoButton[value='" + procedimento.procedimento_risco + "']").prop("checked", true);
                    $('#data_solicitacao').val(procedimento.data_solicitacao);
                    $('#data').val(procedimento.data_solicitacao);
                    $('#sintomas').val(procedimento.sintomas);

                });
            editar_procedimento_modal.toggle()
        });


        //ESTABELECIMENTOS SOLICITANTES [MODAL EDITAR]
        let estabelecimento_solicitante = $('#estabelecimento_solicitante').select2({
            ajax: {
                url: '<?= base_url('v2/api/estabelecimentos-solicitantes/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        estabelecimento: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: data
                    }
                },
                dataType: 'json',
                placeholder: "Selecione um estabelecimento",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //PROCEDIMENTOS [MODAL EDITAR]
        let editar_procedimentos_solicitante = $('#agendar_procedimento_nome_procedimento').select2({
            ajax: {
                url: '<?= base_url('v2/api/procedimentos/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        procedimento_nome: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: data
                    }
                },
                dataType: 'json',
                placeholder: "Selecione um estabelecimento",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //PROFISSIONAIS [MODAL EDITAR]
        let editar_profissionais_solicitante = $('#profissional_solicitante').select2({
            ajax: {
                url: '<?= base_url('v2/api/procedimentos/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        procedimento_nome: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: data
                    }
                },
                dataType: 'json',
                placeholder: "Selecione um estabelecimento",
            },
            delay: 250,
            minimumInputLength: 1,
        });






        //Cria modal para agendar procedimento
        var agendar_procedimento_modal = new bootstrap.Modal(document.getElementById('agendar_procedimento_modal'))

        // ABRE MODAL DE AGENDAR
        $('.agendar_procedimento_modal').on('click', function() {
            var procedimentos_id = this.dataset.procedimentos_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/procedimentos/json/') ?>",
                    data: {
                        procedimentos_id: procedimentos_id,
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(procedimento) {
                    $('#agendar_procedimentos_id').val(procedimento.procedimentos_id);
                    $('#agendar_nome_paciente').val(procedimento.nome_paciente);
                    $('#agendar_nome_procedimento').val(procedimento.nome);
                    $("#agendar_especialidade").val(procedimento.especialidade_nome);
                    $('#agendar_profissional_solicitante').val(procedimento.profissional_nome);
                    $('#agendar_estabelecimento_solicitante').val(procedimento.estabelecimento_nome);
                    $('#agendar_nome_paciente').val(procedimento.nome_paciente);
                    $('#agendar_telefone_paciente').val(procedimento.telefone_paciente);
                    $('#agendar_cns_paciente').val(procedimento.cns_paciente);
                    $('#agendar_data_solicitacao').val(procedimento.data_solicitacao);
                    $('#agendar_data').val(procedimento.data);
                    $('#agendar_sintomas').val(procedimento.sintomas);

                });
            agendar_procedimento_modal.toggle()
        });

        //CARREGA SELECT2 COM ESTABELECIMENTO SOLICITANTES [MODAL EDITAR]
        let agendar_procedimento_estabelecimento_solicitante = $('#agendar_procedimento_estabelecimento_solicitante').select2({
            ajax: {
                url: '<?= base_url('v2/api/estabelecimentos-solicitantes/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        estabelecimento: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: data
                    }
                },
                dataType: 'json',
                placeholder: "Selecione um estabelecimento",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //CARREGA SELECT2 COM MUNICIPIOS SOLICITANTES [MODAL EDITAR]
        let agendar_procedimento_municipios = $('#agendar_procedimento_municipios').select2({
            ajax: {
                url: '<?= base_url('v2/api/municipios/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        estabelecimento: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: data
                    }
                },
                dataType: 'json',
                placeholder: "Selecione um municipio",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //CARREGA SELECT2 COM MUNICIPIOS SOLICITANTES [MODAL EDITAR]
        let agendar_procedimento_cotas = $('#agendar_procedimento_cotas').select2({
            ajax: {
                url: '<?= base_url('v2/api/cotas/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        estabelecimento: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: data
                    }
                },
                dataType: 'json',
                placeholder: "Selecione uma cota",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //CARREGA SELECT2 COM MUNICIPIOS SOLICITANTES [MODAL EDITAR]
        let agendar_procedimento_profissionais = $('#agendar_procedimento_profissionais').select2({
            ajax: {
                url: '<?= base_url('v2/api/profissionais/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        profissional_nome: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: data
                    }
                },
                dataType: 'json',
                placeholder: "Selecione um municipio",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        // ================================


        //ADICIONANDO FILTRO AS COLUNAS
        $('#fila_procedimentos_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });


        $('#fila_procedimentos_datatable').DataTable({
            initComplete: function() {
                this.api().columns().every(function() {
                    let that = this;
                    $('input', this.header()).on('keyup change clear', function() {
                        if (that.search() !== this.value) {
                            that
                                .search(this.value)
                                .draw();
                        }
                    });
                });
            },
            "sScrollY": "100%",
            "search": {
                "smart": false
            },
            "ordering": false,
            "oLanguage": {
                "sProcessing": "Aguarde enquanto os dados são carregados ...",
                "sLengthMenu": "Mostrar _MENU_ resgistros por pagina",
                "sZeroRecords": "Nenhuma registro encontrado correspondente aos critérios de pesquisa",
                "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                "sInfoFiltered": "",
                "sSearch": "<i class='ti-help-alt text-info' data-toggle='tooltip' title='COMO UTILIZAR: Digite parte de uma palavra ou termo para aplicar um filtro em toda a tabela. ' style='cursor:pointer'></i> FILTRO:",
                "oPaginate": {
                    "sFirst": "<<",
                    "sPrevious": "<",
                    "sNext": ">",
                    "sLast": ">>"
                }
            },

            "aoColumns": [{
                    "bSortable": false
                },
                {
                    "bSortable": false
                },
                {
                    "bSortable": false
                },
                {
                    "bSortable": false
                }
            ],
            dom: 'Brtip',
            buttons: [{
                    className: 'btn btn-falcon-default btn-sm rounded-pill font-weight-light m-1',
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> imprimir',
                    exportOptions: {
                        columns: [0, 1, 2]
                    },
                    customize: function(win) {
                        $(win.document.body)
                            .css('font-size', '10pt')
                            .prepend(
                                '<img src="" style="margin-top: 100px; height:100%;position:absolute; top:0; left:10%; opacity:0.1; width:850px; height:600px" />'
                            );

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                },
                {
                    className: 'btn btn-falcon-default btn-sm rounded-pill font-weight-light m-1',
                    text: '<i class="far fa-calendar-plus"></i> Novo procedimento',
                    action: function() {
                        $('#add_procedimento_modal').modal('show')
                    }

                }

            ]
        });

        // ============================

        //Cria modal para editar procedimento
        var negar_procedimento_modal = new bootstrap.Modal(document.getElementById('negar_procedimento_modal'), {
            keyboard: false
        })

        // ABRE MODAL DE EDITAR
        $('.negar_procedimento_button').on('click', function() {
            $('#negar_procedimentos_id').val(this.dataset.procedimentos_id);
            negar_procedimento_modal.toggle()
        });

    }
</script>