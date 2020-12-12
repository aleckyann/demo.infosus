<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-calendar-alt text-warning"></i> TFD agendados
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar a fila de TFD's ordenados por urgência:<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">

        <table id="tfd_agendados_datatable" class="table table-striped" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">SOLICITAÇÃO</th>
                <th class="text-dark small text-left">DATA AGENDADA</th>
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

                        <td class="small">
                            <?= date_format(date_create($t['tfd_data_atendimento']), 'd/m/Y') ?>
                        </td>

                        <td class="small text-center">
                            <a target="_new" href="<?= base_url('public/v2/anexos/tfd/' . $t['tfd_anexo']) ?>" data-toggle="tooltip" title="Clique para fazer download"><i class="fas fa-download"></i></a>
                        </td>

                        <td class="text-center p-1">
                            <div class="btn-group">
                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item text-success finalizar_tfd_button" data-tfd_id="<?= $t['tfd_id'] ?>"><i class="fa fa-check"></i> Concluir tfd</button>
                                        <button class="dropdown-item text-warning editar_tfd_button" data-tfd_id="<?= $t['tfd_id'] ?>"><i class="fa fa-edit"></i> Editar tfd</button>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-danger reprimir_tfd_button" data-tfd_id="<?= $t['tfd_id'] ?>"><i class="fa fa-times"></i> Reprimir tfd</button>
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


<!-- Modal editar_tfd_modal-->
<div class="modal fade" id="editar_tfd_modal" tabindex="-1" role="dialog" aria-labelledby="editar_tfd_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form action="<?= base_url('v2/regulacao/tfd/editar') ?>" method="post">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title font-weight-light text-white" id="editar_tfd_label"><i class="fas fa-edit"></i> Editar TFD</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <input type="hidden" name="tfd_id" id="editar_tfd_id">
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="">Nome do paciente:</label>
                            <input type="text" class="form-control" id="editar_tfd_paciente_nome" disabled>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Nascimento</label>
                            <input type="date" id="editar_tfd_nascimento" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">CPF</label>
                            <input type="text" id="editar_tfd_cpf" class="form-control" disabled>
                        </div>

                        <hr>

                        <div class="mb-2 col-4">
                            <label for="">Data da solicitação <i class="fa fa-question-circle text-primary" data-toggle="tooltip" title="Data da solicitação do TFD."></i></label>
                            <input type="date" name="tfd_data_solicitacao" id="editar_tfd_data_solicitacao" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Cidade do atendimento <i class="fa fa-question-circle text-primary" data-toggle="tooltip" title="Cidade em que paciente vai realizar o atendimento."></i></label>
                            <input type="text" name="tfd_cidade_destino" id="editar_tfd_cidade_destino" class="form-control" required>
                        </div>

                        <div class="mb-2 col-3">
                            <label for="">Tipo de deslocamento</label>
                            <select name="tfd_veiculo" id="editar_tfd_veiculo" class="form-control" id="" required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="Ambulância">Ambulância</option>
                                <option value="Carro de passeio">Carro de passeio</option>
                                <option value="Transporte sanitário">Transporte sanitário</option>
                                <option value="Ônibus">Ônibus</option>
                                <option value="Carro próprio">Carro próprio</option>
                            </select>
                        </div>

                        <div class="mb-2 col-4">
                            <label for="">cota</label>
                            <input type="text" name="tfd_cota" id="editar_tfd_cota" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Estabelecimento solicitante</label>
                            <input type="text" name="tfd_estabelecimento_solicitante" id="editar_tfd_estabelecimento_solicitante" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Estabelecimento prestador</label>
                            <input type="text" name="tfd_estabelecimento_prestador" id="editar_tfd_estabelecimento_prestador" class="form-control" required>
                        </div>

                        <hr>

                        <div class="col-3">
                            <label for="tfd_alimentacao" name="tfd_alimentacao"> Necessidade de alimentação? <i class="fa fa-question-circle text-primary" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo para alimentação?"></i></label>
                            <select name="tfd_alimentacao" class="form-control" id="editar_tfd_alimentacao" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="tfd_passagem" name="tfd_passagem"> Necessidade de Passagem? <i class="fa fa-question-circle text-primary" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo com passagem?"></i></label>
                            <select name="tfd_passagem" class="form-control" id="editar_tfd_passagem" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="tfd_hospedagem" name="tfd_hospedagem"> Necessidade de Hospedagem? <i class="fa fa-question-circle text-primary" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo com hospedagem?"></i></label>
                            <select name="tfd_hospedagem" class="form-control" id="editar_tfd_hospedagem" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="tfd_acompanhante" name="tfd_acompanhante"> Necessidade de acompanhante? <i class="fa fa-question-circle text-primary" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de um acompanhante?"></i></label>
                            <select name="tfd_acompanhante" class="form-control" id="editar_tfd_acompanhante" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>

                        <hr class="mt-3">


                        <div class="mb-2 col-12">
                            <label for="">Descrição</label>
                            <textarea name="tfd_descricao" id="editar_tfd_descricao" rows="1" class="form-control"></textarea>
                        </div>

                        <div class="mb-2 col-12">
                            <label for="">Anexo <small class="text-muted">(.jpeg .jpg .png pdf .doc .docx)</small> </label>
                            <div class="form-file">
                                <input class="form-file-input" id="customFile" name="tfd_anexo" type="file" />
                                <label class="form-file-label" name="tfd_anexo" for="customFile">
                                    <span class="form-file-text">Escolha um arquivo...</span>
                                    <span class="form-file-button"><i class="fas fa-file-medical"></i> Procurar arquivo</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-12 mt-1">
                            <label>Classificação de risco / vunerabilidade:</label>
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editar_tfd_risco" name="editar_tfd_risco" value="1" id="editar_tfd1" autocomplete="off" required>
                            <label class="btn btn-outline-info" for="editar_tfd1"><span class="m-2">1</span></label><br>
                            Não agudo
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editar_tfd_risco" name="editar_tfd_risco" value="2" id="editar_tfd2" autocomplete="off" required>
                            <label class="btn btn-outline-success" for="editar_tfd2"><span class="m-2">2</span></label><br>
                            Baixa
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editar_tfd_risco" name="editar_tfd_risco" value="3" id="editar_tfd3" autocomplete="off" required>
                            <label class="btn btn-outline-warning" for="editar_tfd3"><span class="m-2">3</span></label><br>
                            Intermediária
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editar_tfd_risco" name="editar_tfd_risco" value="4" id="editar_tfd4" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="editar_tfd4"><span class="m-2">4</span></label><br>Alta
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



<!-- Modal reprimir_tfd_modal-->
<div class="modal fade" id="reprimir_tfd_modal" tabindex="-1" role="dialog" aria-labelledby="reprimirtfd_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title font-weight-light text-white" id="reprimirtfd_label"><i class="fas fa-calendar-times"></i> Reprimir TFD</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/tfd/reprimir') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <input type="hidden" name="tfd_id" id="reprimir_tfd_id">
                    <div class="row">
                        <div class="mb-2 col-12">
                            <label for="">Motivo ou justificativa</label>
                            <textarea class="form-control" name="tfd_reprimido_por" required></textarea>
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

        //Cria modal para editar tfd
        var editar_tfd_modal = new bootstrap.Modal(document.getElementById('editar_tfd_modal'), {
            keyboard: false
        })

        // ABRE MODAL DE EDITAR
        $('.editar_tfd_button').on('click', function() {
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
                    $('#editar_tfd_id').val(tfd.tfd_id);
                    $('#editar_tfd_data_solicitacao').val(tfd.tfd_data_solicitacao);
                    $('#editar_tfd_data_atendimento').val(tfd.tfd_data_atendimento);
                    $('#editar_tfd_cidade_destino').val(tfd.tfd_cidade_destino);
                    $('#editar_tfd_cota').val(tfd.tfd_cota);
                    $('#editar_tfd_estabelecimento_solicitante').val(tfd.tfd_estabelecimento_solicitante);
                    $('#editar_tfd_estabelecimento_prestador').val(tfd.tfd_estabelecimento_prestador);
                    $('#editar_tfd_alimentacao').val(tfd.tfd_alimentacao);
                    $('#editar_tfd_passagem').val(tfd.tfd_passagem);
                    $('#editar_tfd_hospedagem').val(tfd.tfd_hospedagem);
                    $('#editar_tfd_veiculo').val(tfd.tfd_veiculo);
                    $('#editar_tfd_acompanhante').val(tfd.tfd_acompanhante);
                    $(".editar_tfd_risco[value='" + tfd.tfd_risco + "']").prop("checked", true);
                    $('#editar_tfd_descricao').val(tfd.tfd_descricao);
                });
            editar_tfd_modal.toggle()
        });

        // ==================================

        //ADICIONANDO FILTRO AS COLUNAS
        $('#tfd_agendados_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES' || title == 'ANEXO') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });


        $('#tfd_agendados_datatable').DataTable({
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
                    text: '<i class="far fa-calendar-plus"></i> Novo TFD',
                    action: function() {
                        $('#add_tfd_modal').modal('show')
                    }

                }

            ]
        });

        // ============================

        //Cria modal para reprimir tfd
        var reprimir_tfd_modal = new bootstrap.Modal(document.getElementById('reprimir_tfd_modal'), {
            keyboard: false
        })

        // ABRE MODAL DE REPRIMIR TFD
        $('.reprimir_tfd_button').on('click', function() {
            $('#reprimir_tfd_id').val(this.dataset.tfd_id);
            reprimir_tfd_modal.toggle()
        });


        //CONFIRMAR FINALIZAÇÃO DO PACIENTE 
        $('.finalizar_tfd_button').on('click', function() {
            Swal.fire({
                title: 'Confirma conclusão desse tfd?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Sim`,
                icon: 'question',
                showCancelButton: false,
                denyButtonText: `Não, cancelar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("<?= base_url('v2/regulacao/tfd/concluir/') ?>" + this.dataset.tfd_id);
                } else if (result.isDenied) {
                    Swal.fire('Alteração não foi realizada.', '', 'info')
                }
            })
        })

    }
</script>