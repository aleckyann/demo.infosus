<!-- <div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">

                <i class="fa fa-chart-line"></i> Dashboard
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode acompanhar dados do sistema.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?= $this->ui->alert_flashdata() ?>
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-lg-10 col-xl-10 col-xxl-6">
            <h3>Conheça todos os módulos do infosus</h3>
            <p class="lead">Você e sua equipe já sabem tudo o que o infosus pode fazer por vocês?</p>
        </div>
    </div>
    <div class="row flex-center mt-8">
        <div class="col-md col-lg-5 col-xl-4 pl-lg-6"><img class="img-fluid px-6 px-md-0" src="<?= base_url() ?>/public/v2/assets/img/illustrations/6.png" alt="" /></div>
        <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
            <h3>Pacientes</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <h6 class="text-danger font-weight-light"><i class="fas fa-database mr-2"></i>Ficha, controle e históricos.</h6>
        </div>
    </div>
    <div class="row flex-center mt-7">
        <div class="col-md col-lg-5 col-xl-4 pr-lg-6 order-md-2"><img class="img-fluid px-6 px-md-0" src="<?= base_url() ?>/public/v2/assets/img/illustrations/5.png" alt="" /></div>
        <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
            <h3>Regulação</h3>
            <p>Build any UI effortlessly with Falcon's robust set of layouts, 38 sets of built-in elements, carefully chosen colors, typography, and css helpers.</p>
            <h6 class="text-danger font-weight-light"><i class="fas fa-database mr-2"></i>Procedimentos, TFD e Casa de apoio.</h6>
        </div>
    </div>
    <div class="row flex-center mt-7">
        <div class="col-md col-lg-5 col-xl-4 pl-lg-6"><img class="img-fluid px-6 px-md-0" src="<?= base_url() ?>/public/v2/assets/img/illustrations/4.png" alt="" /></div>
        <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
            <h3>Transportes</h3>
            <p>From IE to iOS, rigorously tested and optimized Falcon will give the near perfect finishing to your webapp; from the landing page to the logout screen.</p>
            <h6 class="text-danger font-weight-light"><i class="fas fa-database mr-2"></i>Veículos e viagens.</h6>
        </div>
    </div>
    <div class="row flex-center mt-7">
        <div class="col-md col-lg-5 col-xl-4 pr-lg-6 order-md-2"><img class="img-fluid px-6 px-md-0" src="<?= base_url() ?>/public/v2/assets/img/illustrations/5.png" alt="" /></div>
        <div class="col-md col-lg-5 col-xl-4 mt-4 mt-md-0">
            <h3>Almoxarifado</h3>
            <p>Build any UI effortlessly with Falcon's robust set of layouts, 38 sets of built-in elements, carefully chosen colors, typography, and css helpers.</p>
            <h6 class="text-danger font-weight-light"><i class="fas fa-database mr-2"></i>Estoques, entradas e saídas</h6>
        </div>
    </div>
</div>
<hr class="my-5">
<div class="row">
    <h4>Integridade e performance:</h4>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-4.png);opacity: 0.7;"></div>
            <!--/.bg-holder-->
            <div class="card-body">
                <h6>Whatsapp</h6>
                <div><strong class="mr-2">Status: </strong>
                    <div class="badge rounded-pill badge-soft-success fs--2">Operando<span class="fas fa-check ml-1" data-fa-transform="shrink-2"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-4.png);opacity: 0.7;"></div>
            <!--/.bg-holder-->
            <div class="card-body">
                <h6>Backup automático</h6>
                <div><strong class="mr-2">Realizado: </strong>
                    <div class="badge rounded-pill badge-soft-success fs--2"><?= date('d/m/Y') ?><span class="fas fa-check ml-1" data-fa-transform="shrink-2"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 mb-3">
        <div class="card h-100">
            <div class="bg-holder d-none d-xl-block bg-card" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/corner-4.png);opacity: 0.7;"></div>
            <!--/.bg-holder-->
            <div class="card-body">
                <h6>API de dados</h6>
                <div><strong class="mr-2">Status: </strong>
                    <div class="badge rounded-pill badge-soft-success fs--2">Operando<span class="fas fa-check ml-1" data-fa-transform="shrink-2"></span></div>
                </div>
            </div>
        </div>
    </div>
</div>