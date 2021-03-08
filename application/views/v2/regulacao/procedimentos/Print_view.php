<?php
// Dados complementares temporários
$estabelecimento_prestador = $this->db->get_where('estabelecimentos', ['estabelecimento_id' => $procedimento['estabelecimento_prestador']])->row_array();
?>
<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-4.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn d-print-none" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">

                <i class="fas fa-list"></i> Procedimento
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Confira todas as informações do procedimento e realize a impressão.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body row">
        <h5 class="font-weight-bold">DADOS DO PACIENTE</h5>
        <div class="col-9">
            <label for="">Nome</label>
            <input type="text" class="form-control" value="<?= $procedimento['nome_paciente'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">Nascimento</label>
            <input type="text" class="form-control" value="<?= date_format(date_create($procedimento['nascimento']), 'd/m/Y') ?>" readonly>
        </div>
        <div class="col-9">
            <label for="">Endereço</label>
            <input type="text" class="form-control" value="<?= $procedimento['endereco_paciente'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">Telefone</label>
            <input type="text" class="form-control" value="<?= $procedimento['telefone_paciente'] ?>" readonly>
        </div>

        <div class="my-3"></div>

        <h5 class="font-weight-bold">DADOS DO PROCEDIMENTO</h5>
        <div class="col-9">
            <label>Procedimento:</label>
            <input class="form-control" value="<?= $procedimento['nome'] ?>" readonly>
        </div>
        <div class="col-3">
            <label>Urgência (1-4):</label>
            <input class="form-control" value="<?= $procedimento['procedimento_risco'] ?>" readonly>
        </div>
        <div class="col-4">
            <label>Cota utilizada:</label>
            <input class="form-control" value="<?= $procedimento['cota'] ?>" readonly>
        </div>
        <div class="col-4">
            <label>Data da solicitação:</label>
            <input class="form-control" value="<?= date_format(date_create($procedimento['data_solicitacao']), 'd/m/Y') ?>" readonly>
        </div>
        <div class="col-4">
            <label>Data do atendimento:</label>
            <input class="form-control" value="<?= date_format(date_create($procedimento['data']), 'd/m/Y') ?>" readonly>
        </div>
        <div class="col-6">
            <label>Profissional solicitante:</label>
            <input class="form-control" value="<?= $procedimento['profissional_nome'] ?>" readonly>
        </div>
        <div class="col-6">
            <label>Estabelecimento solicitante:</label>
            <input class="form-control" value="<?= $procedimento['estabelecimento_nome'] ?>" readonly>
        </div>
        <div class="col-6">
            <label>Estabelecimento prestador:</label>
            <input class="form-control" value="<?= @$estabelecimento_prestador['estabelecimento_nome'] ?>" readonly>
        </div>
        <div class="col-6">
            <label>Cidade do prestador:</label>
            <input class="form-control" value="<?= $procedimento['nome_municipio'] ?>" readonly>
        </div>

        <div class="card-footer bg-light mt-1">
            <p class="text-center small"><strong>Documento gerado na data de </strong> <u><?= date('d/m/Y H:i:s') ?></u> <strong>em</strong> <u><?= base_url() ?></u></p>
        </div>
    </div>
</div>
    <button class="btn btn-primary font-weight-light d-print-none" onclick="window.print()"><i class="fas fa-print"></i> Imprimir página</button>