<div class="d-flex my-3">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">
                <i class="fas fa-diagnoses"></i> Dashboard de TFD
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Esta dashboard mostrará de forma visual informações que podem ser importantes para o auxilio na tomada de decisões.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card my-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <div class="row justify-content-end">
            <h3>Acompanhamento</h3>
            <hr>
            <div class="col-lg-3">
                <select name="ano" id="paciente_filtro_chart" class="form-select form-sm">
                    <option value="<?= date('Y') ?>">Dados de <?= date('Y') ?></optcion>
                        <?php for ($i = 2020; $i < date('Y'); $i++) { ?>
                    <option value="<?= $i ?>" <?= ($i == $ano) ? 'selected' : '' ?>>Dados de <?= $i ?></option>
                <?php } ?>
                </select>
            </div>
            <canvas id="clientes_chart" class="my-1" style="position: relative; height:40vh; width:80vw"></canvas>
            <hr>
            <span class="small text-primary"><i class="fas fa-info-circle"></i> Os valores são referentes exatamente ao mês em que o procedimento foi adicionado à fila, agendado, realizado ou negado.</span>
        </div>

    </div>
</div>
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <h3>Geral</h3>
            <hr>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $geral['fila'] ?>,"duration":3, "separator":"."}'>0</h3>
                <p>Na fila <a data-toggle="tooltip" title="Ver procedimentos na fila" href="<?= base_url('v2/regulacao/procedimentos/fila') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $geral['agendados'] ?>,"duration":3, "separator":"."}'>0</h3>
                <p class="text-warning">Agendados <a data-toggle="tooltip" title="Ver procedimentos na agendados" href="<?= base_url('v2/regulacao/procedimentos/agendados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $geral['realizados'] ?>,"duration":3, "separator":"."}'>0</h3>
                <p class="text-success">Realizados <a data-toggle="tooltip" title="Ver procedimentos realizados" href="<?= base_url('v2/regulacao/procedimentos/realizados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <div class="col-lg-3">
                <h3 data-countup='{"endValue":<?= $geral['negados'] ?>,"duration":3, "separator":"."}'>0</h3>
                <p class="text-danger">Negados <a data-toggle="tooltip" title="Ver procedimentos negados" href="<?= base_url('v2/regulacao/procedimentos/negados') ?>"><i class="fas fa-external-link-alt"></i></a></p>
            </div>
            <hr>
            <span class="small text-primary"><i class="fas fa-info-circle"></i> Mostra todos os dados do sistema, independente da data em que foram inseridos ou alterados.</span>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    window.onload = function() {

        $('#paciente_filtro_chart').on('change', function() {
            window.location.href = "<?= current_url() ?>/?ano=" + this.value;
        })

        var clientes_chart = document.getElementById('clientes_chart').getContext('2d');
        var chart = new Chart(clientes_chart, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                datasets: [{
                        label: 'Na fila',
                        backgroundColor: 'rgba(200,200,200,0.8)',
                        borderColor: 'rgba(200,200,200,0.8)',
                        data: [
                            <?= $tfd[1]['fila'] ?>,
                            <?= $tfd[2]['fila'] ?>,
                            <?= $tfd[3]['fila'] ?>,
                            <?= $tfd[4]['fila'] ?>,
                            <?= $tfd[5]['fila'] ?>,
                            <?= $tfd[6]['fila'] ?>,
                            <?= $tfd[7]['fila'] ?>,
                            <?= $tfd[8]['fila'] ?>,
                            <?= $tfd[9]['fila'] ?>,
                            <?= $tfd[10]['fila'] ?>,
                            <?= $tfd[11]['fila'] ?>,
                            <?= $tfd[12]['fila'] ?>
                        ],
                        fill: false,
                    }, {
                        label: 'Agendados',
                        fill: false,
                        backgroundColor: 'rgba(249,171,62,0.8)',
                        borderColor: 'rgba(249,171,62,0.8)',
                        data: [
                            <?= $tfd[1]['agendados'] ?>,
                            <?= $tfd[2]['agendados'] ?>,
                            <?= $tfd[3]['agendados'] ?>,
                            <?= $tfd[4]['agendados'] ?>,
                            <?= $tfd[5]['agendados'] ?>,
                            <?= $tfd[6]['agendados'] ?>,
                            <?= $tfd[7]['agendados'] ?>,
                            <?= $tfd[8]['agendados'] ?>,
                            <?= $tfd[9]['agendados'] ?>,
                            <?= $tfd[10]['agendados'] ?>,
                            <?= $tfd[11]['agendados'] ?>,
                            <?= $tfd[12]['agendados'] ?>
                        ],
                    }, {
                        label: 'Realizados',
                        fill: false,
                        backgroundColor: 'rgba(80, 210, 123, 0.8)',
                        borderColor: 'rgba(80, 210, 123, 0.8)',
                        data: [
                            <?= $tfd[1]['realizados'] ?>,
                            <?= $tfd[2]['realizados'] ?>,
                            <?= $tfd[3]['realizados'] ?>,
                            <?= $tfd[4]['realizados'] ?>,
                            <?= $tfd[5]['realizados'] ?>,
                            <?= $tfd[6]['realizados'] ?>,
                            <?= $tfd[7]['realizados'] ?>,
                            <?= $tfd[8]['realizados'] ?>,
                            <?= $tfd[9]['realizados'] ?>,
                            <?= $tfd[10]['realizados'] ?>,
                            <?= $tfd[11]['realizados'] ?>,
                            <?= $tfd[12]['realizados'] ?>
                        ],
                    }, {
                        label: 'Negados',
                        fill: false,
                        backgroundColor: 'rgba(227,60,57,0.8)',
                        borderColor: 'rgba(227,60,57,0.8)',
                        data: [
                            <?= $tfd[1]['negados'] ?>,
                            <?= $tfd[2]['negados'] ?>,
                            <?= $tfd[3]['negados'] ?>,
                            <?= $tfd[4]['negados'] ?>,
                            <?= $tfd[5]['negados'] ?>,
                            <?= $tfd[6]['negados'] ?>,
                            <?= $tfd[7]['negados'] ?>,
                            <?= $tfd[8]['negados'] ?>,
                            <?= $tfd[9]['negados'] ?>,
                            <?= $tfd[10]['negados'] ?>,
                            <?= $tfd[11]['negados'] ?>,
                            <?= $tfd[12]['negados'] ?>
                        ],
                    },
                    {
                        label: 'Total do mês',
                        fill: false,
                        backgroundColor: 'rgba(1,1,1,1)',
                        borderColor: 'rgba(1,1,1,1)',
                        data: [
                            <?= $tfd[1]['fila'] + $tfd[1]['agendados'] + $tfd[1]['realizados'] + $tfd[1]['negados'] ?>,
                            <?= $tfd[2]['fila'] + $tfd[2]['agendados'] + $tfd[2]['realizados'] + $tfd[2]['negados'] ?>,
                            <?= $tfd[3]['fila'] + $tfd[3]['agendados'] + $tfd[3]['realizados'] + $tfd[3]['negados'] ?>,
                            <?= $tfd[4]['fila'] + $tfd[4]['agendados'] + $tfd[4]['realizados'] + $tfd[4]['negados'] ?>,
                            <?= $tfd[5]['fila'] + $tfd[5]['agendados'] + $tfd[5]['realizados'] + $tfd[5]['negados'] ?>,
                            <?= $tfd[6]['fila'] + $tfd[6]['agendados'] + $tfd[6]['realizados'] + $tfd[6]['negados'] ?>,
                            <?= $tfd[7]['fila'] + $tfd[7]['agendados'] + $tfd[7]['realizados'] + $tfd[7]['negados'] ?>,
                            <?= $tfd[8]['fila'] + $tfd[8]['agendados'] + $tfd[8]['realizados'] + $tfd[8]['negados'] ?>,
                            <?= $tfd[9]['fila'] + $tfd[9]['agendados'] + $tfd[9]['realizados'] + $tfd[9]['negados'] ?>,
                            <?= $tfd[10]['fila'] + $tfd[10]['agendados'] + $tfd[10]['realizados'] + $tfd[10]['negados'] ?>,
                            <?= $tfd[11]['fila'] + $tfd[11]['agendados'] + $tfd[11]['realizados'] + $tfd[11]['negados'] ?>,
                            <?= $tfd[12]['fila'] + $tfd[12]['agendados'] + $tfd[12]['realizados'] + $tfd[12]['negados'] ?>
                        ],
                    }
                ]
            },

            options: {
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                animation: {
                    durations: 1000,
                    easing: 'easeInOutBounce'
                }
            }
        });
    }
</script>