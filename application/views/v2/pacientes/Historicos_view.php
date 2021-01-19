<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-user-injured"></i> Histórico do paciente
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar todo histórico do paciente
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <p class="font-weight-light text-dark">
            <b>Paciente:</b> Fulano de tal
        </p>
        <hr>
        <ul class="nav nav-pills" id="pill-myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="pill-home-tab" data-toggle="tab" href="#pill-tab-procedimentos" role="tab" aria-controls="pill-tab-home" aria-selected="true"><i class="fas fa-diagnoses"></i> Procedimentos</a></li>
            <li class="nav-item"><a class="nav-link" id="pill-profile-tab" data-toggle="tab" href="#pill-tab-tfd" role="tab" aria-controls="pill-tab-profile" aria-selected="false"><i class="fas fa-laptop-medical"></i> TFD</a></li>
            <li class="nav-item"><a class="nav-link" id="pill-contact-tab" data-toggle="tab" href="#pill-tab-viagens" role="tab" aria-controls="pill-tab-contact" aria-selected="false"><i class="fas fa-route"></i> Viagens</a></li>
            <li class="nav-item"><a class="nav-link" id="pill-contact-tab" data-toggle="tab" href="#pill-tab-casa" role="tab" aria-controls="pill-tab-contact" aria-selected="false"><i class="fas fa-house-user"></i> Casa de apoio</a></li>
        </ul>
        <div class="tab-content border p-3 mt-3" id="pill-myTabContent">
            <div class="tab-pane fade show active" id="pill-tab-procedimentos" role="tabpanel" aria-labelledby="home-tab">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <th>Data</th>
                        <th>Estabelecimento</th>
                        <th>Prestador</th>
                        <th>Cota</th>
                    </thead>
                    <tbody>
                        <?php foreach ($procedimentos as $p) : ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pill-tab-tfd" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <th>Data</th>
                        <th>Estabelecimento</th>
                        <th>Prestador</th>
                        <th>Cota</th>
                    </thead>
                    <tbody>
                        <?php foreach ($tfd as $t) : ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pill-tab-viagens" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <th>Data</th>
                        <th>Origem</th>
                        <th>Destino</th>
                    </thead>
                    <tbody>
                        <?php foreach ($viagens as $v) : ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pill-tab-casa" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <th>Data</th>
                        <th>Estabelecimento</th>
                        <th>Prestador</th>
                        <th>Cota</th>
                    </thead>
                    <tbody>
                        <?php foreach ($casa as $c) : ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>