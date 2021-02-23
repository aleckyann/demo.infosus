<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-4.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-sort-amount-down"></i> Fila de TFD
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar a fila de TFD's ordenados pela sua urgência:<br>
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

        <table id="tfd_fila_datatable" class="table table-striped" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">DATA DA SOLICITAÇÃO</th>
                <th class="text-dark small text-center align-top">ANEXO</th>
                <th class="text-dark small text-center align-top">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($tfd as $t) : ?>
                    <tr>
                        <td>
                            <?php switch ($t['tfd_risco']) {
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
                                <a class="load_paciente_button" href="#" data-paciente_id="<?= $t['paciente_id'] ?>"><?= $t['nome_paciente'] ?></a>
                            </span>
                        </td>

                        <td class="small">
                            <?= date_format(date_create($t['tfd_data_solicitacao']), 'd/m/Y') ?>
                        </td>
                        <td class="small text-center">
                            <?php if ($t['tfd_anexo']) { ?>
                                <a target="_new" href="<?= base_url('public/v2/anexos/tfd/' . $t['tfd_anexo']) ?>" data-toggle="tooltip" title="Clique para fazer download"><i class="fas fa-download"></i></a>
                            <?php } else { ?>
                                <i class="fas fa-download text-muted" data-toggle="tooltip" title="Nenhum anexo."></i>
                            <?php } ?>
                        </td>

                        <td class="text-center p-1">
                            <div class="btn-group">
                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <a target="_new" href="<?= base_url('v2/regulacao/tfd/print/') . $t['tfd_id'] ?>" class="dropdown-item"><i class="fa fa-print"></i> Imprimir</a>
                                        <button class="dropdown-item agendar_tfd_button" data-tfd_id="<?= $t['tfd_id'] ?>"><i class="fa fa-calendar-alt"></i> Agendar TFD</button>
                                        <button class="dropdown-item text-warning aditar_tfd_button" data-tfd_id="<?= $t['tfd_id'] ?>"><i class="fa fa-edit"></i> Editar TFD</button>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-danger negar_tfd_button" data-tfd_id="<?= $t['tfd_id'] ?>"><i class="fa fa-times"></i> Negar TFD</button>
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
<?php $this->load->view('v2/components/tfd/editar_tfd_modal') ?>
<?php $this->load->view('v2/components/tfd/agendar_tfd_modal') ?>
<?php $this->load->view('v2/components/tfd/negar_tfd_modal') ?>

<script>
    window.onload = function() {

        //[MODAL EDITAR]
        var editar_tfd_modal = new bootstrap.Modal(document.getElementById('editar_tfd_modal'))

        //ABRE MODAL E CARREGA INFORMAÇÕES [MODAL EDITAR]
        $('body').on('click', '.aditar_tfd_button', function() {
            var tfd_id = this.dataset.tfd_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/regulacao/tfd/json/') ?>" + tfd_id,
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(tfd) {
                    console.log(tfd)
                    $('#editar_tfd_paciente_nome').val(tfd.nome_paciente);
                    $('#editar_tfd_paciente_nascimento').val(tfd.nascimento);
                    $('#editar_tfd_paciente_cpf').val(tfd.cpf);
                    $('#editar_tfd_data_solicitacao').val(tfd.tfd_data_solicitacao);
                    $('#editar_tfd_data_atendimento').val(tfd.tfd_data_atendimento);
                    $('#editar_tfd_cidade_destino').val(tfd.tfd_cidade_destino);
                    $('#editar_tfd_cota').val(tfd.tfd_cota);
                    $('#editar_tfd_estabelecimento_solicitante').append(`
                            <option selected value="${tfd.tfd_estabelecimento_solicitante}">${tfd.estabelecimento_nome}</option>
                    `)
                    $('#editar_tfd_estabelecimento_prestador').val(tfd.tfd_estabelecimento_prestador);
                    $('#editar_tfd_alimentacao').val(tfd.tfd_alimentacao);
                    $('#editar_tfd_passagem').val(tfd.tfd_passagem);
                    $('#editar_tfd_hospedagem').val(tfd.tfd_hospedagem);
                    $('#editar_tfd_veiculo').val(tfd.tfd_veiculo);
                    $('#editar_tfd_acompanhante').val(tfd.tfd_acompanhante);
                    $(".editar_tfd_risco[value='" + tfd.tfd_risco + "']").prop("checked", true);
                    $('#editar_tfd_descricao').val(tfd.tfd_descricao);
                    $('#editar_tfd_anexo').val(tfd.tfd_anexo);
                    $('#editar_tfd_id').val(tfd.tfd_id);
                });
            editar_tfd_modal.toggle()
        });

        //CARREGA SELECT2 COM ESTABELECIMENTOS [MODAL EDITAR]
        let editar_tfd_estabelecimento_solicitante = $('#editar_tfd_estabelecimento_solicitante').select2({
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

        // ==================================

        //[MODAL AGENDAR]
        let agendar_tfd_modal = new bootstrap.Modal(document.getElementById('agendar_tfd_modal'))

        //ABRE MODAL DE AGENDAMENTO E CARREGA DADOS
        $('body').on('click', '.agendar_tfd_button', function() {
            var tfd_id = this.dataset.tfd_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/regulacao/tfd/json/') ?>" + tfd_id,
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(tfd) {
                    console.log(tfd)
                    $('#agendar_tfd_paciente_nome').val(tfd.nome_paciente);
                    $('#agendar_tfd_paciente_nascimento').val(tfd.nascimento);
                    $('#agendar_tfd_paciente_cpf').val(tfd.cpf);
                    $('#agendar_tfd_id').val(tfd.tfd_id);
                    $('#agendar_tfd_data_solicitacao').val(tfd.tfd_data_solicitacao);
                    $('#agendar_tfd_data_atendimento').val(tfd.tfd_data_atendimento);
                    $('#agendar_tfd_cota').val(tfd.tfd_cota);
                    $('#agendar_tfd_estabelecimento_solicitante').val(tfd.tfd_estabelecimento_solicitante);
                    $('#agendar_tfd_estabelecimento_prestador').val(tfd.tfd_estabelecimento_prestador);
                    $('#agendar_tfd_alimentacao').val(tfd.tfd_alimentacao);
                    $('#agendar_tfd_passagem').val(tfd.tfd_passagem);
                    $('#agendar_tfd_hospedagem').val(tfd.tfd_hospedagem);
                    $('#agendar_tfd_veiculo').val(tfd.tfd_veiculo);
                    $('#agendar_tfd_acompanhante').val(tfd.tfd_acompanhante);
                    $(".agendar_tfd_risco[value='" + tfd.tfd_risco + "']").prop("checked", true);
                    $('#agendar_tfd_descricao').val(tfd.tfd_descricao);
                });
            agendar_tfd_modal.toggle()
        });
        //CARREGAR SELECT2 COM CIDADE DE DESTINO [MODAL AGENDAR]
        let agendar_tfd_cidade_destino = $('#agendar_tfd_cidade_destino').select2({
            ajax: {
                url: '<?= base_url('v2/api/municipios/json') ?>',
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
                placeholder: "Selecione um município",
            },
            delay: 250,
            minimumInputLength: 1,
        });


        // ================================

        //ADICIONANDO FILTRO AS COLUNAS
        $('#tfd_fila_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES' || title == 'ANEXO') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });

        // ============================

        //Cria modal para NEGAR TFD
        var negar_tfd_modal = new bootstrap.Modal(document.getElementById('negar_tfd_modal'))

        // ABRE MODAL DE NEGAR TFD
        $('body').on('click', '.negar_tfd_button', function() {
            $('#negar_tfd_id').val(this.dataset.tfd_id);
            negar_tfd_modal.toggle()
        });


        $('#tfd_fila_datatable').DataTable({
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
                        columns: [0, 1]
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
                    text: '<i class="far fa-calendar-plus"></i> Novo TFD',
                    action: function() {
                        $('#add_tfd_modal').modal('show')
                    }

                }

            ]
        });
    }
</script>