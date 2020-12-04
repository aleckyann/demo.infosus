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

        <table id="procedimentosFila_datatable" class="table table-striped" style="min-height: 200px;">
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
                                <a class="loadPaciente_button" href="#" data-paciente_id="<?= $p['paciente_id'] ?>"><?= $p['nome_paciente'] ?></a>
                            </span>
                        </td>
                        <td class="small">
                            <?= $p['nome_procedimento'] ?>
                        </td>
                        <td class="small">

                            <?= date_format(date_create($p['data_solicitacao']), 'd/m/Y') ?>
                        </td>

                        <td class="text-center p-1">
                            <div class="btn-group">
                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item agendarProcedimento_button" data-procedimento_id="<?= $p['procedimentos_id'] ?>"><i class="fa fa-calendar-alt"></i> Agendar procedimento</button>
                                        <button class="dropdown-item text-warning editarProcedimento_button" data-procedimento_id="<?= $p['procedimentos_id'] ?>"><i class="fa fa-edit"></i> Editar procedimento</button>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-danger reprimirProcedimento_button" data-procedimento_id="<?= $p['procedimentos_id'] ?>"><i class="fa fa-times"></i> Reprimir procedimento</button>
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

<!-- Modal editarProcedimento_model-->
<div class="modal fade" id="editarProcedimento_model" tabindex="-1" role="dialog" aria-labelledby="editarProcedimento_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title font-weight-light text-white" id="editarProcedimento_label"><i class="fas fa-edit"></i> Editar procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/procedimentos/editar') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <input type="hidden" name="procedimentos_id" id="procedimentos_id">
                    <div class="row">
                        <div class="mb-4 col-12">
                            <label for="">Nome do paciente</label>
                            <input type="text" class="form-control" id="nome_paciente" readonly>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Nome do procedimento</label>
                            <input type="text" name="nome_procedimento" id="nome_procedimento" class="form-control" required>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Especialidade</label>
                            <select name="especialidade" id="especialidade" class="form-select" required>
                                <option selected disabled>Selecione uma especialidade</option>
                                <?php foreach ($this->Especialidades->getAll() as $e) : ?>
                                    <option value="<?= $e['especialidade_nome'] ?>"><?= $e['especialidade_nome'] ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Estabelecimento solicitante</label>
                            <input type="text" name="estabelecimento_solicitante" id="estabelecimento_solicitante" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Profissional solicitante</label>
                            <input type="text" name="profissional_solicitante" id="profissional_solicitante" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Data de entrada</label>
                            <input type="date" name="data_solicitacao" id="data_solicitacao" class="form-control" required>
                        </div>

                        <div class="mb-2 col-12">
                            <label for="">Principais sintomas clínicos</label>
                            <textarea type="date" name="sintomas" id="sintomas" class="form-control"></textarea>
                        </div>

                        <div class="col-12 mt-1">
                            <label>Classificação de risco / vunerabilidade:</label>
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editarProcedimentoButton" name="editar_procedimento_risco" value="1" id="editarProcedimentoButton1" autocomplete="off" required>
                            <label class="btn btn-outline-info" for="editarProcedimentoButton1"><span class="m-2">1</span></label><br>
                            Não agudo
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editarProcedimentoButton" name="editar_procedimento_risco" value="2" id="editarProcedimentoButton2" autocomplete="off" required>
                            <label class="btn btn-outline-success" for="editarProcedimentoButton2"><span class="m-2">2</span></label><br>
                            Baixa
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editarProcedimentoButton" name="editar_procedimento_risco" value="3" id="editarProcedimentoButton3" autocomplete="off" required>
                            <label class="btn btn-outline-warning" for="editarProcedimentoButton3"><span class="m-2">3</span></label><br>
                            Intermediária
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editarProcedimentoButton" name="editar_procedimento_risco" value="4" id="editarProcedimentoButton4" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="editarProcedimentoButton4"><span class="m-2">4</span></label><br>Alta
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal agendarProcedimento_modal-->
<div class="modal fade" id="agendarProcedimento_modal" tabindex="-1" role="dialog" aria-labelledby="agendarProcedimento_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light text-dark" id="agendarProcedimento_label"><i class="fas fa-calendar-alt"></i> Agendar procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/procedimentos/agendar') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <input type="hidden" name="procedimentos_id" id="agendar_procedimentos_id">
                    <div class="row">
                        <div class="mb-2 col-6">
                            <label for="">Nome do paciente</label>
                            <input class="form-control" type="text" id="agendar_nome_paciente" disabled>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Telefone</label>
                            <input class="form-control" type="text" id="agendar_telefone_paciente" disabled>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">CNS</label>
                            <input class="form-control" type="text" id="agendar_cns_paciente" disabled>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Nome do procedimento</label>
                            <input type="text" id="agendar_nome_procedimento" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Especialidade</label>
                            <select id="agendar_especialidade" class="form-select" disabled>
                                <option selected disabled>Selecione uma especialidade</option>
                                <?php foreach ($this->Especialidades->getAll() as $e) : ?>
                                    <option value="<?= $e['especialidade_nome'] ?>"><?= $e['especialidade_nome'] ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Estabelecimento solicitante</label>
                            <input type="text" id="agendar_estabelecimento_solicitante" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Profissional solicitante</label>
                            <input type="text" id="agendar_profissional_solicitante" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Data de entrada</label>
                            <input type="date" id="agendar_data_solicitacao" class="form-control" disabled>
                        </div>

                        <div class="mb-2 col-12">
                            <label for="">Principais sintomas clínicos</label>
                            <textarea type="date" name="sintomas" id="agendar_sintomas" class="form-control" disabled></textarea>
                        </div>
                        <hr>
                        <div class="mb-2 col-3">
                            <label for="">Estabelecimento</label>
                            <input type="text" class="form-control" name="estabelecimento_prestador" required>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Cidade</label>
                            <input type="text" class="form-control" name="cidade_prestador" required>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Cota</label>
                            <input type="text" class="form-control" name="cota" required>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Data agendada</label>
                            <input type="date" class="form-control" name="data" required>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal reprimirProcedimento_modal-->
<div class="modal fade" id="reprimirProcedimento_modal" tabindex="-1" role="dialog" aria-labelledby="reprimirProcedimento_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title font-weight-light text-white" id="reprimirProcedimento_label"><i class="fas fa-calendar-times"></i> Reprimir procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/procedimentos/reprimir') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <input type="hidden" name="procedimentos_id" id="reprimir_procedimentos_id">
                    <div class="row">
                        <div class="mb-2 col-12">
                            <label for="">Motivo ou justificativa</label>
                            <textarea class="form-control" name="reprimido_por" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    window.onload = function() {

        //Cria modal para editar procedimento
        var editarProcedimento_model = new bootstrap.Modal(document.getElementById('editarProcedimento_model'), {
            keyboard: false
        })

        // ABRE MODAL DE EDITAR
        $('.editarProcedimento_button').on('click', function() {
            var procedimento_id = this.dataset.procedimento_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/regulacao/procedimentos/json/') ?>" + procedimento_id,
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(procedimento) {
                    $('#procedimentos_id').val(procedimento.procedimentos_id);
                    $('#nome_paciente').val(procedimento.nome_paciente);
                    $('#nome_procedimento').val(procedimento.nome_procedimento);
                    $("#especialidade").val(procedimento.especialidade);
                    $('#profissional_solicitante').val(procedimento.profissional_solicitante);
                    $('#estabelecimento_solicitante').val(procedimento.estabelecimento_solicitante);
                    $('#nome_paciente').val(procedimento.nome_paciente);
                    $(".editarProcedimentoButton[value='" + procedimento.procedimento_risco + "']").prop("checked", true);
                    $('#data_solicitacao').val(procedimento.data_solicitacao);
                    $('#data').val(procedimento.data);
                    $('#sintomas').val(procedimento.sintomas);

                });
            editarProcedimento_model.toggle()
        });

        // ==================================

        //Cria modal para agendar procedimento
        var agendarProcedimento_modal = new bootstrap.Modal(document.getElementById('agendarProcedimento_modal'), {
            keyboard: false
        })


        // ABRE MODAL DE AGENDAR
        $('.agendarProcedimento_button').on('click', function() {
            var procedimento_id = this.dataset.procedimento_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/regulacao/procedimentos/json/') ?>" + procedimento_id,
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(procedimento) {
                    $('#agendar_procedimentos_id').val(procedimento.procedimentos_id);
                    $('#agendar_nome_paciente').val(procedimento.nome_paciente);
                    $('#agendar_nome_procedimento').val(procedimento.nome_procedimento);
                    $("#agendar_especialidade").val(procedimento.especialidade);
                    $('#agendar_profissional_solicitante').val(procedimento.profissional_solicitante);
                    $('#agendar_estabelecimento_solicitante').val(procedimento.estabelecimento_solicitante);
                    $('#agendar_nome_paciente').val(procedimento.nome_paciente);
                    $('#agendar_telefone_paciente').val(procedimento.telefone_paciente);
                    $('#agendar_cns_paciente').val(procedimento.cns_paciente);
                    $('#agendar_data_solicitacao').val(procedimento.data_solicitacao);
                    $('#agendar_data').val(procedimento.data);
                    $('#agendar_sintomas').val(procedimento.sintomas);

                });
            agendarProcedimento_modal.toggle()
        });

        // ================================


        //ADICIONANDO FILTRO AS COLUNAS
        $('#procedimentosFila_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });


        $('#procedimentosFila_datatable').DataTable({
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
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Próximo",
                    "sLast": "Último"
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
                        $('#AddProcedimento_modal').modal('show')
                    }

                }

            ]
        });

        // ============================

        //Cria modal para editar procedimento
        var reprimirProcedimento_modal = new bootstrap.Modal(document.getElementById('reprimirProcedimento_modal'), {
            keyboard: false
        })

        // ABRE MODAL DE EDITAR
        $('.reprimirProcedimento_button').on('click', function() {
            $('#reprimir_procedimentos_id').val(this.dataset.procedimento_id);
            reprimirProcedimento_modal.toggle()
        });

    }
</script>