<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-4.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">
                <i class="fas fa-calendar-check text-success"></i> <?= $title ?>
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar todos os TFD que foram realizados.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <table id="tfd_realizados_datatable" class="table table-striped table-hover" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">DATA DO ATENDIMENTO</th>
                <th class="text-dark small text-center align-middle">ANEXO</th>
                <th class="text-dark small text-center align-middle">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($tfd as $t) : ?>
                    <tr>
                        <td class="small">
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
                            <?= date_format(date_create($t['tfd_data_atendimento']), 'd/m/Y') ?>
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
                                        <a href="<?= base_url('v2/regulacao/tfd/print/') . $t['tfd_id'] ?>" class="dropdown-item"><i class="fa fa-print"></i> Imprimir</a>
                                        <button class="dropdown-item reagendar_tfd_button text-warning" data-tfd_id="<?= $t['tfd_id'] ?>"><i class="fas fa-retweet"></i> Reagendar TFD</button>
                                        <div class="dropdown-divider"></div>
                                        <a target="_new" href="<?= base_url('v2/regulacao/tfd/print/') . $t['tfd_id'] ?>" class="dropdown-item" data-tfd_id="<?= $t['tfd_id'] ?>"><i class="fa fa-file"></i> Visualizar TFD</a>
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
<?php $this->load->view('v2/components/tfd/reagendar_tfd_modal') ?>


<script>
    window.onload = function() {

        // SET LOADING BUTTONS
        $('#reagendar_tfd_form').on('submit', function() {
            $('#reagendar_tfd_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
        });


        //Cria modal para reagendar tfd
        var reagendar_tfd_modal = new bootstrap.Modal(document.getElementById('reagendar_tfd_modal'))

        // ABRE MODAL DE reagendar
        $('.reagendar_tfd_button').on('click', function() {
            var tfd_id = this.dataset.tfd_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/tfd/json/') ?>",
                    data: {
                        tfd_id: tfd_id,
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(tfd) {
                    console.log(tfd)
                    $('#reagendar_tfd_tfd_id').val(tfd.tfd_id);
                    $('#reagendar_tfd_paciente_id').val(tfd.paciente_id);
                    $('#reagendar_tfd_paciente_nome').val(tfd.nome_paciente);
                    $('#reagendar_tfd_paciente_nascimento').val(tfd.nascimento);
                    $('#reagendar_tfd_paciente_cpf').val(tfd.cpf);
                    $('#reagendar_tfd_data_atendimento').val(tfd.tfd_data_atendimento);
                    $('#reagendar_tfd_data_solicitacao').val(tfd.tfd_data_solicitacao);
                    $('#reagendar_tfd_cidade_destino').append(`
                            <option selected value="${tfd.municipio_id}">${tfd.nome_municipio}</option>
                    `)
                    $('#reagendar_tfd_cota').val(tfd.tfd_cota);
                    $('#reagendar_tfd_estabelecimento_solicitante').val(tfd.tfd_estabelecimento_solicitante);
                    $('#reagendar_tfd_estabelecimento_prestador').val(tfd.tfd_estabelecimento_prestador);
                    $('#reagendar_tfd_alimentacao').val(tfd.tfd_alimentacao);
                    $('#reagendar_tfd_passagem').val(tfd.tfd_passagem);
                    $('#reagendar_tfd_hospedagem').val(tfd.tfd_hospedagem);
                    $('#reagendar_tfd_veiculo').val(tfd.tfd_veiculo);
                    $('#reagendar_tfd_acompanhante').val(tfd.tfd_acompanhante);
                    $(".reagendar_tfd_risco[value='" + tfd.tfd_risco + "']").prop("checked", true);
                    $('#reagendar_tfd_descricao').val(tfd.tfd_descricao);
                    $('#reagendar_tfd_anexo').val(tfd.tfd_anexo);
                });
            reagendar_tfd_modal.toggle()
        });

        //CARREGA SELECT2 COM ESTABELECIMENTOS [MODAL EDITAR]
        let reagendar_tfd_cidade_destino = $('#reagendar_tfd_cidade_destino').select2({
            ajax: {
                url: '<?= base_url('v2/api/municipios/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        cidade_nome: params.term,
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

        //ADICIONANDO FILTRO AS COLUNAS
        $('#tfd_realizados_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES' || title == "ANEXO") {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });


        $('#tfd_realizados_datatable').DataTable({
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
                    text: '<i class="far fa-calendar-plus"></i> Novo TFD',
                    action: function() {
                        $('#add_tfd_modal').modal('show')
                    }

                }

            ]
        });

    }
</script>