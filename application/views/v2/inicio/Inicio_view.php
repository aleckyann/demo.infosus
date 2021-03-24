<?= $this->ui->alert_flashdata() ?>
<div class="row">
    <hr>
    <h4>Módulos do sistema</h4>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-2.png);"></div>
            <div class="card-body">
                <h5><i class="fas fa-chart-line"></i> Dashboards</h5>
                <p class="font-weight-light my-0">
                    Acesso rápido e de forma visual aos números de cada módulo do seu infosus.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-light btn-sm dropdown-toggle" style="opacity:0.6" id="btnGroupVerticalDrop4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboards</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="<?= base_url('v2/dashboard') ?>">Gestão</a>
                        <a class="dropdown-item" href="<?= base_url('v2/dashboard') ?>">Regulação</a>
                        <a class="dropdown-item" href="<?= base_url('v2/dashboard') ?>">Transportes</a>
                        <a class="dropdown-item" href="<?= base_url('v2/dashboard') ?>">Almoxarifado</a>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-3.png);"></div>
            <div class="card-body">
                <h5><i class="fas fa-user-injured"></i> Pacientes</h5>
                <p class="font-weight-light my-0">
                    Controle total e facilidade para adicionar, editar e visualizar históricos dos pacientes.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-light btn-sm dropdown-toggle" style="opacity:0.6" id="btnGroupVerticalDrop4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacientes</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="P">Listagem de pacientes</a>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-4.png);"></div>
            <div class="card-body">
                <h5><i class="fas fa-balance-scale"></i> Regulação</h5>
                <p class="font-weight-light my-0">
                    Controle todos os processos envolvidos nos Procedimentos, TFD e Casa de apoio.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-light btn-sm dropdown-toggle" style="opacity:0.6" id="btnGroupVerticalDrop4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Regulação</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="#">TFD</a>
                        <a class="dropdown-item" href="#">Procedimentos</a>
                        <a class="dropdown-item" href="#">Casa de apoio</a>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-3.png);"></div>
            <div class="card-body">
                <h5><i class="fas fa-bus"></i> Transportes</h5>
                <p class="font-weight-light my-0">
                    Faça o controle dos veículos e gestão das viagens e passageiros.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-light btn-sm dropdown-toggle" style="opacity:0.6" id="btnGroupVerticalDrop4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transportes</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="#">Veículos</a>
                        <a class="dropdown-item" href="#">Viagens</a>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-2.png);"></div>
            <div class="card-body">
                <h5><i class="fas fa-people-carry"></i> Almoxarifado</h5>
                <p class="font-weight-light my-0">
                    Realização de controle de estoques, produtos e almoxarifados.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-light btn-sm dropdown-toggle" style="opacity:0.6" id="btnGroupVerticalDrop4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Almoxarifado</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="#">Estoques</a>
                        <a class="dropdown-item" href="#">Histórico</a>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-1.png);"></div>
            <div class="card-body">
                <h5><i class="fas fa-globe-americas"></i> Brasil previne</h5>
                <p class="font-weight-light mb-0">
                    Em breve todos os indicadores estarão disponíveis para acesso como um módulo do seu infosus.
                </p>
            </div>
        </div>
    </div>

</div>
<hr>
<div class="row">
    <h4>Integridade dos serviços</h4>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-4.pngXXX);"></div>
            <div class="card-body">
                <h5>API Whatsapp</h5>
                <div><strong class="mr-2">Status: </strong>
                    <div class="badge rounded-pill badge-soft-success fs--2">Operando<span class="fas fa-check ml-1" data-fa-transform="shrink-2"></span></div>
                </div>
                <hr>
                <small class="text-muted"><i class="fas fa-info-circle"></i> A API do Whatsapp é responsável pelo envio de mensagens aos pacientes e usuários do sistema.</small>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-4.pngXXX);"></div>
            <div class="card-body">
                <h5>API de dados</h5>
                <div><strong class="mr-2">Status: </strong>
                    <div class="badge rounded-pill badge-soft-success fs--2">Operando<span class="fas fa-check ml-1" data-fa-transform="shrink-2"></span></div>
                </div>
                <hr>
                <small class="text-muted"><i class="fas fa-info-circle"></i> API de dados é responsável pela integridade dos dados fornecidos pelo sistema.</small>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-4.pngXXX);"></div>
            <div class="card-body">
                <h5>Backup automático</h5>
                <div><strong class="mr-2">Realizado: </strong>
                    <div class="badge rounded-pill badge-soft-success fs--2"><?= date('d/m/Y') ?><span class="fas fa-check ml-1" data-fa-transform="shrink-2"></span></div>
                </div>
                <hr>
                <small class="text-muted"><i class="fas fa-info-circle"></i> Backups do banco de dados são realizados constantemente para segurança do município.</small>
            </div>
        </div>
    </div>

</div>