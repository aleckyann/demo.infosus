<?= $this->ui->alert_flashdata() ?>
<div class="row my-3">
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-3.png);"></div>
            <div class="card-body">
                <h5><i class="fas fa-user-injured"></i> Pacientes</h5>
                <p class="font-weight-light my-0">
                    Controle total e facilidade para adicionar, editar e visualizar históricos dos pacientes.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-outline-dark rounded-pill btn-sm" id="btnGroupVerticalDrop4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="<?= base_url('v2/pacientes/dashboard') ?>">Dashboard</a>
                        <a class="dropdown-item" href="<?= base_url('v2/pacientes/listagem') ?>">Listagem de pacientes</a>
                        <a class="dropdown-item" data-toggle="modal" href="#add_paciente_modal">Cadastro de paciente</a>
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
                <h5><i class="fas fa-laptop-medical"></i> TFD</h5>
                <p class="font-weight-light my-0">
                    Controle todos os processos envolvidos nos Tratamentos fora de domícilio.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-sm rounded-pill btn-outline-dark" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/tfd/dashboard') ?>">Dashboard</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/tfd/fila') ?>">Fila</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/tfd/agendados') ?>">Agendados</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/tfd/realizados') ?>">Realizados</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/tfd/negados') ?>">Negados</a>
                        <a class="dropdown-item" data-toggle="modal" href="#add_tfd_modal">Novo Tfd</a>
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
                <h5><i class="fas fa-diagnoses"></i> Procedimentos</h5>
                <p class="font-weight-light my-0">
                    Controle todos os processos envolvidos nos Procedimentos dos pacientes.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-sm rounded-pill btn-outline-dark" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/procedimentos/dashboard') ?>">Dashboard</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/procedimentos/fila') ?>">Fila</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/procedimentos/agendados') ?>">Agendados</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/procedimentos/realizados') ?>">Realizados</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/procedimentos/negados') ?>">Negados</a>
                        <a class="dropdown-item" data-toggle="modal" href="#add_procedimento_modal">Novo Procedimento</a>
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
                <h5><i class="fas fa-house-user"></i> Casa de apoio</h5>
                <p class="font-weight-light my-0">
                    Faça o agendamento e controle da utilização da casa de apoio do municipio.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-sm rounded-pill btn-outline-dark" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/casa-de-apoio/dashboard') ?>">Dashboard</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/casa-de-apoio/agendados') ?>">Agendados</a>
                        <a class="dropdown-item" href="<?= base_url('v2/regulacao/casa-de-apoio/historico') ?>">Histórico</a>
                        <a class="dropdown-item" data-toggle="modal" href="#add_casa_de_apoio_modal">Adicionar paciente</a>
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
                    Controle a sua agenda de viagens, veículos e listas de pacientes.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-sm rounded-pill btn-outline-dark" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="<?= base_url('v2/transportes/dashboard') ?>">Dashboard</a>
                        <a class="dropdown-item" href="<?= base_url('v2/transportes/viagens-agendadas') ?>">Viagens agendadas</a>
                        <a class="dropdown-item" href="<?= base_url('v2/transportes/viagens-realizadas') ?>">Viagens realizadas</a>
                        <a class="dropdown-item" href="<?= base_url('v2/transportes/viagens-canceladas') ?>">Viagens canceladas</a>
                        <a class="dropdown-item" data-toggle="modal" href="#add_viagem_modal">Nova viagem</a>
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
                <h5><i class="fas fa-people-carry"></i> Almoxarifado</h5>
                <p class="font-weight-light my-0">
                    Controle estoques, produtos com o módulo de almoxarifados do seu infosus.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-sm rounded-pill btn-outline-dark" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="<?= base_url('v2/almoxarifado/dashboard') ?>">Dashboard</a>
                        <a class="dropdown-item" href="<?= base_url('v2/almoxarifado/historico') ?>">Histórico</a>
                        <a class="dropdown-item" data-toggle="modal" href="#add_estoque_modal">Novo estoque</a>
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
                <h5><i class="fas fa-sliders-h"></i> Configurações</h5>
                <p class="font-weight-light my-0">
                    Faça o cadastro e configurações necessárias para a utilização do seu infosus.
                <div class="btn-group float-right" role="group">
                    <button class="btn btn-sm rounded-pill btn-outline-dark" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item" href="<?= base_url('v2/configuracoes/estabelecimentos') ?>">Estabelecimentos</a>
                        <a class="dropdown-item" href="<?= base_url('v2/configuracoes/procedimentos') ?>">Procedimentos</a>
                        <a class="dropdown-item" href="<?= base_url('v2/configuracoes/especialidades') ?>">Especialidades</a>
                        <a class="dropdown-item" href="<?= base_url('v2/configuracoes/profissionais') ?>">Profissionais</a>
                        <a class="dropdown-item" href="<?= base_url('v2/configuracoes/municipios') ?>">Municípios</a>
                        <a class="dropdown-item" href="<?= base_url('v2/configuracoes/usuarios') ?>">Usuários</a>
                        <a class="dropdown-item" href="<?= base_url('v2/configuracoes/cotas') ?>">Cotas/Convênios</a>
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
                <h5><i class="fas fa-globe-americas"></i> Previne Brasil</h5>
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
                <div>
                    <strong class="mr-2">Status: </strong>
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
                <div>
                    <strong class="mr-2">Status: </strong>
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
                <div>
                    <strong class="mr-2">Status: </strong>
                    <div class="badge rounded-pill badge-soft-success fs--2">Semanalmente<span class="fas fa-check ml-1" data-fa-transform="shrink-2"></span></div>
                </div>
                <hr>
                <small class="text-muted"><i class="fas fa-info-circle"></i> Backups do banco de dados são realizados constantemente para segurança do município.</small>
            </div>
        </div>
    </div>

</div>