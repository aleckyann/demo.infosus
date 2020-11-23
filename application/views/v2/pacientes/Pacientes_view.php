<div class="d-flex mb-2">
    <span class="fa-stack mr-2 ml-n1">
        <i class="fas fa-circle fa-stack-2x text-300"></i>
        <i class="fas fa-user-injured fa-inverse fa-stack-1x text-primary"></i>
    </span>
    <div class="flex-1 mt-1">
        <h5 class="mb-0 text-primary position-relative">
            <span class="bg-200 pr-3">Pacientes</span>
            <span class="border position-absolute top-50 translate-middle-y w-100 left-0 z-index--1"></span>
        </h5>
        <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-question-circle"></i>
        </a>
    </div>
</div>


<div class="collapse mb-3" id="collapseExample">
    <div class="border p-card rounded">Nesta página você pode visualizar todos os pacientes, adicionar pacientes, ir para históricos e agendar novos procedimentos.</div>
</div>


<!-- <div class="card mb-3" id="recentPurchaseTable" data-list='{"valueNames":["name","email","product","payment","amount"],"page":10,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Pacientes</h5>
            </div>
            <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                <div class="d-none" id="table-purchases-actions">
                    <div class="d-flex">
                        <select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select>
                        <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button></div>
                </div>
                <div id="table-purchases-replace-element">
                    <button class="btn btn-falcon-default btn-sm" type="button">
                        <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ml-1">Novo paciente</span>
                    </button>
                    <button class="btn btn-falcon-default btn-sm mx-2" type="button">
                        <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ml-1">Filtros</span>
                    </button>
                    <button class="btn btn-falcon-default btn-sm" type="button">
                        <span class="fas fa-print" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ml-1">Imprimir</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body px-0 py-0">
        <div class="table-responsive scrollbar">
            <table class="table table-sm fs--1 mb-0">
                <thead class="bg-200 text-900">
                    <tr>

                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="name">Nome</th>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="email">CPF</th>
                        <th class="sort pr-1 align-middle white-space-nowrap" data-sort="product">Telefone</th>
                        <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-purchase-body">
                    <?php foreach ($pacientes as $p) : ?>
                        <tr class="btn-reveal-trigger">
                            <th class="align-middle white-space-nowrap name"><?= $p['nome_paciente'] ?></th>
                            <td class="align-middle white-space-nowrap email"><?= $p['cpf'] ?></td>
                            <td class="align-middle white-space-nowrap product"><?= $p['telefone_paciente'] ?></td>
                            <td class="align-middle white-space-nowrap">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0">
                                        <a class="dropdown-item" href="#!">Históricos</a>
                                        <a class="dropdown-item" href="#!">Agendar TFD</a>
                                        <a class="dropdown-item" href="#!">Agendar Procedimento</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-primary" href="#!">Históricos</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-warning" href="#!">Editar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="row align-items-center">
            <div class="pagination d-none"></div>
            <div class="col">
                <p class="mb-0 fs--1">
                    <span class="d-none d-sm-inline-block mr-2" data-list-info="data-list-info"> </span>
                    <span class="d-none d-sm-inline-block mr-2">&mdash; </span>
                    <a class="font-weight-semi-bold" href="#!" data-list-view="*">Visualizar todos<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                </p>
            </div>
            <div class="col-auto d-flex"><button class="btn btn-sm" type="button" data-list-pagination="prev"><span>Anterior</span></button><button class="btn btn-sm px-4 ml-2" type="button" data-list-pagination="next"><span>Próximo</span></button></div>
        </div>
    </div>
</div> -->


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <table id="pacientes" class="table table-striped">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">CPF</th>
                <th class="text-dark small text-center align-middle">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $p) { ?>
                    <tr>
                        <td class="small">
                            <?= $p['nome_paciente'] ?>
                        </td>
                        <td class="small"><?= $p['cpf'] ?></td>


                        <td class="text-center p-1">
                            <!-- Example single danger button -->

                            <div class="btn-group ">

                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fa fa-database"></i> Históricos</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-warning" href="#"><i class="fa fa-edit"></i> Editar</a>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal-->
<div class="modal fade" id="novoPaciente" tabindex="-1" role="dialog" aria-labelledby="novoPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light" id="novoPacienteLabel"><i class="fas fa-user-injured"></i> Cadastrar novo paciente</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/pacientes') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-8">
                            <label class="form-label">Nome</label>
                            <input class="form-control" name="nome_paciente" type="text" placeholder="Nome completo do paciente" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">Data de nascimento</label>
                            <input class="form-control" name="nascimento" type="date" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">CPF</label>
                            <input class="form-control" name="cpf" type="text" placeholder="000.000.000-00" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">RG</label>
                            <input class="form-control" name="identidade" type="text" placeholder="00.000.000" />
                        </div>

                        <div class="mb-2 col-4">
                            <label class="form-label">Telefone</label>
                            <input class="form-control" name="telefone_paciente" type="phone" placeholder="(00) 99999-9999" />
                        </div>
                        <div class="mb-2 col-6">
                            <label class="form-label">Endereço</label>
                            <input class="form-control" name="" type="text" placeholder="Endereço completo" />
                        </div>
                        <div class="mb-2 col-3">
                            <label class="form-label">CEP</label>
                            <input class="form-control" name="cep" type="search" placeholder="39999-999" />
                        </div>
                        <div class="mb-2 col-3">
                            <label class="form-label">Bairro</label>
                            <input class="form-control" name="bairro_paciente" type="text" placeholder="Nome do bairro" />
                        </div>

                        <div class="mb-2 col-3">
                            <label class="form-label">CNS</label>
                            <input class="form-control" name="cns_paciente" type="text" placeholder="Cartão do sus" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">ACS ou referência</label>
                            <input class="form-control" name="acs" type="text" placeholder="Agente de saúde" />
                        </div>
                        <div class="mb-2 col-5">
                            <label class="form-label">Responsável</label>
                            <input class="form-control" name="responsavel" type="text" placeholder="Responsável se houver" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">Profissão</label>
                            <input class="form-control" name="profissao" type="text" placeholder="Profissão" />
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
        //Cria modal para adição de pacientes
        var novoPaciente = new bootstrap.Modal(document.getElementById('novoPaciente'), {
            keyboard: false
        })

        //Add input de filtro às colunas
        $('#pacientes thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                <span class="text-dark font-weight-bold">${title}</span>
                <div class="input-group">
                    <div class="input-group-text">
                        <span data-toggle="tooltip" data-placement="top" title="Filtrar por ${title} específico">🔎</span>
                    </div>
                    <input type="text" class="form-control form-control-sm px-0 pl-1" placeholder="FILTAR POR ${title}">
                </div>
                
                `);

            }
        });



        $('#pacientes').DataTable({
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
            "sScrollX": "100%",
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
                    text: '<span class="fas fa-plus"></span> Novo paciente',
                    action: function() {
                        novoPaciente.toggle()
                    }

                }

            ]
        });
    }
</script>