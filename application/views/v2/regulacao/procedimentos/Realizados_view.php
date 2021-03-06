<div class="d-flex my-3">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-4.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">

                <i class="fas fa-calendar-check text-success"></i> Procedimentos realizados
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar todos os procedimentos que foram realizados.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">

        <table id="procedimentos_realizados_datatable" class="table table-striped table-hover" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">POCEDIMENTO</th>
                <th class="text-dark small text-left">ESPECIALIDADE</th>
                <th class="text-dark small text-left">DATA</th>
                <th class="text-dark small text-center align-middle">OPÇÕES</th>
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
                            <?= $p['especialidade_nome'] ?>
                        </td>
                        <td class="small">
                            <?= date_format(date_create($p['data_solicitacao']), 'd/m/Y') ?>
                        </td>

                        <td class="text-center p-1">
                            <div class="btn-group">
                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/procedimentos/print/') . $p['procedimentos_id'] ?>"><i class="fa fa-print"></i> Imprimir</a>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-warning editar_procedimento_button" data-procedimentos_id="<?= $p['procedimentos_id'] ?>"><i class="fa fa-edit"></i> Editar procedimento</button>
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



<?php $this->load->view('v2/components/procedimentos/editar_procedimento_finalizado_modal') ?>


<script>
    window.onload = function() {
        // SET LOADING BUTTONS
        $('#editar_procedimento_form').on('submit', function() {
            $('#editar_procedimento_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
        });

        //Cria modal para editar procedimento PROVISÓRIO
        var editar_procedimento_agendado_modal = new bootstrap.Modal(document.getElementById('editar_procedimento_finalizado_modal'))

        // ABRE MODAL DE EDITAR
        $('body').on('click', '.editar_procedimento_button', function() {
            $('#editar_procedimento_form').each(function() {
                this.reset();
            });
            console.log('%c editar_procedimento_form: RESETADO', 'color: white; background-color: orange; border-radius:4px; padding:2px; font-size:12px');

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
                    $('#editar_procedimento_nome_procedimento').append(`
                        <option value="${procedimento.id}">
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
                        <option value="${procedimento.estabelecimento_solicitante}">
                            ${procedimento.estabelecimento_nome}
                        </option>
                    `);
                    $('#estabelecimento_solicitante').append(`
                        <option value="${procedimento.estabelecimento_solicitante}">
                            ${procedimento.estabelecimento_nome}
                        </option>
                    `);
                    $('#cotas').append(`
                        <option value="${procedimento.cota}">
                            ${procedimento.cota_nome}
                        </option>
                    `);
                    $('#cidade_prestador').append(`
                        <option value="${procedimento.municipio_id}">
                            ${procedimento.nome_municipio}
                        </option>
                    `);
                    $('#estabelecimento_prestador').val(procedimento.estabelecimento_prestador);
                    $('#data').val(procedimento.data);

                    $('#nome_paciente').val(procedimento.nome_paciente);
                    $(".editarProcedimentoButton[value='" + procedimento.procedimento_risco + "']").prop("checked", true);
                    $('#data_solicitacao').val(procedimento.data_solicitacao);
                    $('#data').val(procedimento.data_solicitacao);
                    $('#sintomas').val(procedimento.sintomas);

                });
            editar_procedimento_agendado_modal.toggle()
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
        //ESTABELECIMENTOS PRESTADOR [MODAL EDITAR]
        let estabelecimento_prestador = $('#estabelecimento_prestador').select2({
            ajax: {
                url: '<?= base_url('v2/api/estabelecimentos-prestadores/json') ?>',
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
        let editar_procedimentos_solicitante = $('#editar_procedimento_nome_procedimento').select2({
            ajax: {
                url: '<?= base_url('v2/api/tabela_proced/select2') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        nome: params.term,
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
                placeholder: "Selecione um procedimento",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //CIDADE [MODAL EDITAR]
        let cidade_prestador = $('#cidade_prestador').select2({
            ajax: {
                url: '<?= base_url('v2/api/municipios/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        nome_municipio: params.term,
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
                placeholder: "Selecione um procedimento",
            },
            delay: 250,
            minimumInputLength: 1,
        });


        //PROFISSIONAIS [MODAL EDITAR]
        let editar_profissionais_solicitante = $('#profissional_solicitante').select2({
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
                placeholder: "Selecione um profissional",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //COTAS [MODAL EDITAR]
        let cotas = $('#cotas').select2({
            ajax: {
                url: '<?= base_url('v2/api/cotas/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        cota_nome: params.term,
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
                placeholder: "Selecione um profissional",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //ADICIONANDO FILTRO AS COLUNAS
        $('#procedimentos_realizados_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });


        $('#procedimentos_realizados_datatable').DataTable({
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
                        columns: [0, 1, 2, 3]
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
                    className: 'btn btn-falcon-primary btn-sm rounded-pill font-weight-light m-1',
                    text: '<i class="far fa-calendar-plus"></i> Novo procedimento',
                    action: function() {
                        $('#add_procedimento_modal').modal('show')
                    }

                }

            ]
        });

    }
</script>