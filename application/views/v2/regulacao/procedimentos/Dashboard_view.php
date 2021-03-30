<div class="d-flex my-3">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">
                <i class="fas fa-diagnoses"></i> Dashboard de procedimentos
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
                            <?= $procedimentos[1]['fila'] ?>,
                            <?= $procedimentos[2]['fila'] ?>,
                            <?= $procedimentos[3]['fila'] ?>,
                            <?= $procedimentos[4]['fila'] ?>,
                            <?= $procedimentos[5]['fila'] ?>,
                            <?= $procedimentos[6]['fila'] ?>,
                            <?= $procedimentos[7]['fila'] ?>,
                            <?= $procedimentos[8]['fila'] ?>,
                            <?= $procedimentos[9]['fila'] ?>,
                            <?= $procedimentos[10]['fila'] ?>,
                            <?= $procedimentos[11]['fila'] ?>,
                            <?= $procedimentos[12]['fila'] ?>
                        ],
                        fill: false,
                    }, {
                        label: 'Agendados',
                        fill: false,
                        backgroundColor: 'rgba(249,171,62,0.8)',
                        borderColor: 'rgba(249,171,62,0.8)',
                        data: [
                            <?= $procedimentos[1]['agendados'] ?>,
                            <?= $procedimentos[2]['agendados'] ?>,
                            <?= $procedimentos[3]['agendados'] ?>,
                            <?= $procedimentos[4]['agendados'] ?>,
                            <?= $procedimentos[5]['agendados'] ?>,
                            <?= $procedimentos[6]['agendados'] ?>,
                            <?= $procedimentos[7]['agendados'] ?>,
                            <?= $procedimentos[8]['agendados'] ?>,
                            <?= $procedimentos[9]['agendados'] ?>,
                            <?= $procedimentos[10]['agendados'] ?>,
                            <?= $procedimentos[11]['agendados'] ?>,
                            <?= $procedimentos[12]['agendados'] ?>
                        ],
                    }, {
                        label: 'Realizados',
                        fill: false,
                        backgroundColor: 'rgba(80, 210, 123, 0.8)',
                        borderColor: 'rgba(80, 210, 123, 0.8)',
                        data: [
                            <?= $procedimentos[1]['realizados'] ?>,
                            <?= $procedimentos[2]['realizados'] ?>,
                            <?= $procedimentos[3]['realizados'] ?>,
                            <?= $procedimentos[4]['realizados'] ?>,
                            <?= $procedimentos[5]['realizados'] ?>,
                            <?= $procedimentos[6]['realizados'] ?>,
                            <?= $procedimentos[7]['realizados'] ?>,
                            <?= $procedimentos[8]['realizados'] ?>,
                            <?= $procedimentos[9]['realizados'] ?>,
                            <?= $procedimentos[10]['realizados'] ?>,
                            <?= $procedimentos[11]['realizados'] ?>,
                            <?= $procedimentos[12]['realizados'] ?>
                        ],
                    }, {
                        label: 'Negados',
                        fill: false,
                        backgroundColor: 'rgba(227,60,57,0.8)',
                        borderColor: 'rgba(227,60,57,0.8)',
                        data: [
                            <?= $procedimentos[1]['negados'] ?>,
                            <?= $procedimentos[2]['negados'] ?>,
                            <?= $procedimentos[3]['negados'] ?>,
                            <?= $procedimentos[4]['negados'] ?>,
                            <?= $procedimentos[5]['negados'] ?>,
                            <?= $procedimentos[6]['negados'] ?>,
                            <?= $procedimentos[7]['negados'] ?>,
                            <?= $procedimentos[8]['negados'] ?>,
                            <?= $procedimentos[9]['negados'] ?>,
                            <?= $procedimentos[10]['negados'] ?>,
                            <?= $procedimentos[11]['negados'] ?>,
                            <?= $procedimentos[12]['negados'] ?>
                        ],
                    },
                    {
                        label: 'Total do mês',
                        fill: false,
                        backgroundColor: 'rgba(1,1,1,1)',
                        borderColor: 'rgba(1,1,1,1)',
                        data: [
                            <?= $procedimentos[1]['fila'] + $procedimentos[1]['agendados'] + $procedimentos[1]['realizados'] + $procedimentos[1]['negados'] ?>,
                            <?= $procedimentos[2]['fila'] + $procedimentos[2]['agendados'] + $procedimentos[2]['realizados'] + $procedimentos[2]['negados'] ?>,
                            <?= $procedimentos[3]['fila'] + $procedimentos[3]['agendados'] + $procedimentos[3]['realizados'] + $procedimentos[3]['negados'] ?>,
                            <?= $procedimentos[4]['fila'] + $procedimentos[4]['agendados'] + $procedimentos[4]['realizados'] + $procedimentos[4]['negados'] ?>,
                            <?= $procedimentos[5]['fila'] + $procedimentos[5]['agendados'] + $procedimentos[5]['realizados'] + $procedimentos[5]['negados'] ?>,
                            <?= $procedimentos[6]['fila'] + $procedimentos[6]['agendados'] + $procedimentos[6]['realizados'] + $procedimentos[6]['negados'] ?>,
                            <?= $procedimentos[7]['fila'] + $procedimentos[7]['agendados'] + $procedimentos[7]['realizados'] + $procedimentos[7]['negados'] ?>,
                            <?= $procedimentos[8]['fila'] + $procedimentos[8]['agendados'] + $procedimentos[8]['realizados'] + $procedimentos[8]['negados'] ?>,
                            <?= $procedimentos[9]['fila'] + $procedimentos[9]['agendados'] + $procedimentos[9]['realizados'] + $procedimentos[9]['negados'] ?>,
                            <?= $procedimentos[10]['fila'] + $procedimentos[10]['agendados'] + $procedimentos[10]['realizados'] + $procedimentos[10]['negados'] ?>,
                            <?= $procedimentos[11]['fila'] + $procedimentos[11]['agendados'] + $procedimentos[11]['realizados'] + $procedimentos[11]['negados'] ?>,
                            <?= $procedimentos[12]['fila'] + $procedimentos[12]['agendados'] + $procedimentos[12]['realizados'] + $procedimentos[12]['negados'] ?>
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