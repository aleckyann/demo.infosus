<div class="d-flex my-3">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">
                <i class="fas fa-tachometer-alt"></i> Dashboard de pacientes
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Acompanhe um relatório simplificado dos pacientes adicionados no sistema <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card my-1">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-12">
                <label for="">Filtrar dados pelo ano de:</label>
                <select name="ano" id="paciente_filtro_chart" class="form-select">
                    <option value="<?= date('Y') ?>"><?= date('Y') ?></optcion>
                        <?php for ($i = 2020; $i < date('Y'); $i++) { ?>
                    <option value="<?= $i ?>" <?= ($i == $ano) ? 'selected' : '' ?>><?= $i ?></option>
                <?php } ?>
                </select>
            </div>
            <canvas id="clientes_chart" class="my-1" style="position: relative; height:40vh; width:80vw"></canvas>
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
                    label: 'Pacientes cadastrados',
                    backgroundColor: 'rgba(44, 123, 229, 0.6)',
                    borderColor: 'rgba(44, 123, 229, 0.9)',
                    data: [
                        <?= $pacientes[1] ?>,
                        <?= $pacientes[2] ?>,
                        <?= $pacientes[3] ?>,
                        <?= $pacientes[4] ?>,
                        <?= $pacientes[5] ?>,
                        <?= $pacientes[6] ?>,
                        <?= $pacientes[7] ?>,
                        <?= $pacientes[8] ?>,
                        <?= $pacientes[9] ?>,
                        <?= $pacientes[10] ?>,
                        <?= $pacientes[11] ?>,
                        <?= $pacientes[12] ?>
                    ]
                }]
            },

            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true // minimum value will be 0.
                        }
                    }]
                }
            }
        });
    }
</script>