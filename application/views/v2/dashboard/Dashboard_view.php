<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fa fa-chart-line"></i> Dashboard
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode acompanhar dados do sistema.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->ui->alert_flashdata() ?>

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <h1>Procedimentos</h1>
            <hr>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $procedimentos['fila'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p>Na fila <a data-toggle="tooltip" title="Ver procedimentos na fila" href="<?= base_url('v2/regulacao/procedimentos/fila') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $procedimentos['agendados'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-warning">Agendados <a data-toggle="tooltip" title="Ver procedimentos na agendados" href="<?= base_url('v2/regulacao/procedimentos/agendados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $procedimentos['realizados'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-success">Realizados <a data-toggle="tooltip" title="Ver procedimentos realizados" href="<?= base_url('v2/regulacao/procedimentos/realizados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $procedimentos['negados'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-danger">Negados <a data-toggle="tooltip" title="Ver procedimentos negados" href="<?= base_url('v2/regulacao/procedimentos/negados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <h1>TFD</h1>
            <hr>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $tfd['fila'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p>Na fila <a data-toggle="tooltip" title="Ver tfd na fila" href="<?= base_url('v2/regulacao/tfd/fila') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $tfd['agendados'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-warning">Agendados <a data-toggle="tooltip" title="Ver tfd agendados" href="<?= base_url('v2/regulacao/tfd/agendados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $tfd['realizados'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-success">Realizados <a data-toggle="tooltip" title="Ver tfd realizados" href="<?= base_url('v2/regulacao/tfd/realizados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $tfd['negados'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-danger">Negados <a data-toggle="tooltip" title="Ver tfd negados" href="<?= base_url('v2/regulacao/tfd/negados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <h1>Viagens</h1>
            <hr>
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $viagens['agendadas'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-warning">Agendadas <a data-toggle="tooltip" title="Ver viagens agendadas" href="<?= base_url('v2/transportes/viagens-agendadas') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $viagens['realizadas'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-success">Realizadas <a data-toggle="tooltip" title="Ver viagens realizadas" href="<?= base_url('v2/transportes/viagens-realizadas') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $viagens['canceladas'] ?>,"duration":5, "separator":"."}'>0</h3>
                <p class="text-danger">Canceladas <a data-toggle="tooltip" title="Ver viagens canceladas" href="<?= base_url('v2/transportes/viagens-canceladas') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
        </div>
    </div>
</div>