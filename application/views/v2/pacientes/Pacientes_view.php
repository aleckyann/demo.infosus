<div class="d-flex mb-4">
    <span class="fa-stack mr-2 ml-n1">
        <i class="fas fa-circle fa-stack-2x text-300"></i>
        <i class="fas fa-user-injured fa-inverse fa-stack-1x text-primary"></i>
    </span>
    <div class="flex-1">
        <h5 class="mb-0 text-primary position-relative">
            <span class="bg-200 pr-3">Pacientes</span>
            <span class="border position-absolute top-50 translate-middle-y w-100 left-0 z-index--1"></span>
        </h5>
        <p class="mb-0">Nesta página você tem acesso a listagem de todos os pacientes cadastrados.</p>
    </div>
</div>

<div class="card mb-3" id="recentPurchaseTable" data-list='{"valueNames":["name","email","product","payment","amount"],"page":10,"pagination":true}'>
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
</div>