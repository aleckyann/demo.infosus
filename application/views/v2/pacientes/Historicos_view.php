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
            <b>Paciente:</b> <span class="text-primary"><?= $paciente['nome_paciente'] ?></span>
        </p>

        <hr>

        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="pill-procedimentos-tab" data-toggle="tab" href="#pill-tab-procedimentos" role="tab" aria-controls="pill-tab-procedimentos" aria-selected="true"><i class="fas fa-diagnoses"></i> Procedimentos</a></li>
            <li class="nav-item"><a class="nav-link" id="pill-tfd-tab" data-toggle="tab" href="#pill-tab-tfd" role="tab" aria-controls="pill-tab-tfd" aria-selected="false"><i class="fas fa-laptop-medical"></i> TFD</a></li>
            <li class="nav-item"><a class="nav-link" id="pill-passageiros-tab" data-toggle="tab" href="#pill-tab-passageiros" role="tab" aria-controls="pill-tab-passageiros" aria-selected="false"><i class="fas fa-route"></i> Viagens</a></li>
            <li class="nav-item"><a class="nav-link" id="pill-casa-tab" data-toggle="tab" href="#pill-tab-casa" role="tab" aria-controls="pill-tab-casa" aria-selected="false"><i class="fas fa-house-user"></i> Casa de apoio</a></li>
        </ul>
        <div class="tab-content border p-3 mt-3">
            <!-- Procedimentos -->
            <div class="tab-pane fade show active" id="pill-tab-procedimentos" role="tabpanel" aria-labelledby="procedimentos-tab">
                <table class="table table-bordered" id="historico_procedimentos_datatable">
                    <thead class="bg-light text-dark">
                        <th>Data da solicitação</th>
                        <th>Data do atendimento</th>
                        <th>Cidade</th>
                        <th>Cota</th>
                        <th>Prestador</th>
                    </thead>
                    <tbody>
                        <?php foreach ($procedimentos as $p) : ?>
                            <tr>
                                <td><?= date_format(date_create($p['data_solicitacao']), 'd/m/Y') ?></td>
                                <td><?= date_format(date_create($p['data']), 'd/m/Y') ?></td>
                                <td><?= $p['estabelecimento_prestador'] ?></td>
                                <td><?= $p['estabelecimento_solicitante'] ?></td>
                                <td><?= $p['cota'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Tfd -->
            <div class="tab-pane fade" id="pill-tab-tfd" role="tabpanel" aria-labelledby="tfd-tab">
                <table class="table table-bordered" id="historico_tfd_datatable">
                    <thead class="bg-light text-dark">
                        <th>Data da solicitação</th>
                        <th>Data do atendimento</th>
                        <th>Cidade</th>
                        <th>Cota</th>
                        <th>Prestador</th>
                    </thead>
                    <tbody>

                        <?php foreach ($tfd as $t) : ?>
                            <tr>
                                <td><?= $t['tfd_data_solicitacao'] ?></td>
                                <td><?= $t['tfd_data_atendimento'] ?></td>
                                <td><?= $t['tfd_cidade_destino'] ?></td>
                                <td><?= $t['tfd_cota'] ?></td>
                                <td><?= $t['tfd_estabelecimento_prestador'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Passageiros -->
            <div class="tab-pane fade" id="pill-tab-passageiros" role="tabpanel" aria-labelledby="passageiros-tab">
                <table class="table table-bordered" id="historico_passageiros_datatable">
                    <thead class="bg-light text-dark">
                        <th>Data marcada</th>
                        <th>Data da viagem</th>
                        <th>Origem</th>
                        <th>Destino</th>
                    </thead>
                    <tbody>

                        <?php foreach ($passageiros as $p) : ?>
                            <tr>
                                <td><?= date_format(date_create($p['viagem_data']), 'd/m/Y') ?></td>
                                <td><?= date_format(date_create($p['viagem_realizada']), 'd/m/Y') ?></td>
                                <td><?= $p['origem'] ?></td>
                                <td><?= $p['destino'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Casa -->
            <div class="tab-pane fade" id="pill-tab-casa" role="tabpanel" aria-labelledby="casa-tab">
                <table class="table table-bordered" id="historico_casa_datatable">
                    <thead class="bg-light text-dark">
                        <th>Entrada</th>
                        <th>Saída</th>
                        <th>Observação</th>
                    </thead>
                    <tbody>
                        <?php foreach ($casa as $c) : ?>
                            <tr>
                                <td><?= date_format(date_create($c['data_entrada']), 'd/m/Y') ?></td>
                                <td><?= date_format(date_create($c['data_saida']), 'd/m/Y') ?></td>
                                <td><?= $c['observacao'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>