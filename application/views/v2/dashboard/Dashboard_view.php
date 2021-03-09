<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">

                <i class="fa fa-chart-line"></i> Dashboard
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
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


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
    Teste procedimento
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Adicionar procedimento</h5>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills mb-3" id="nav_procedimentos" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link btn" id="add_procedimento_modal_button">+</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Procedimento 1</a>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Dados do procedimento 1</div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        $('#add_procedimento_modal_button').on('click', function() {
            console.log('oi')
            $('#nav_procedimentos').append(`
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab2" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">Exemplo</a>
                </li>
            `)
        })
    }
</script>