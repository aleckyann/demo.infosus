<?php
// Dados complementares temporários
$estabelecimento_prestador = $this->db->get_where('estabelecimentos', ['estabelecimento_id' => $tfd['tfd_estabelecimento_prestador']])->row_array();
?>
<div class="d-flex mb-2 d-print-none">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-4.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">

                <i class="fas fa-list"></i> TFD
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Confira todas as informações do TFD e realize a impressão.
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
        <div class="col-8">
            <label for="">Nome</label>
            <input type="text" class="form-control pr-0" value="<?= $tfd['nome_paciente'] ?>" readonly>
        </div>
        <div class="col-4">
            <label for="">Nascimento</label>
            <input type="date" class="form-control pr-0" value="<?= $tfd['nascimento']?>" readonly>
        </div>
        <div class="col-8">
            <label for="">Endereço</label>
            <input type="text" class="form-control pr-0" value="<?= $tfd['endereco_paciente'] ?>" readonly>
        </div>
        <div class="col-4">
            <label for="">Bairro</label>
            <input type="text" class="form-control pr-0" value="<?= $tfd['bairro_paciente'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">Telefone</label>
            <input type="text" class="form-control pr-0" value="<?= $tfd['telefone_paciente'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">CPF</label>
            <input type="text" class="form-control pr-0" value="<?= $tfd['cpf'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">RG</label>
            <input type="text" class="form-control pr-0" value="<?= $tfd['identidade'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">CNS</label>
            <input type="text" class="form-control pr-0" value="<?= $tfd['cns_paciente'] ?>" readonly>
        </div>

        <div class="my-2"></div>

        <h5 class="font-weight-bold">DADOS DA SOLICITAÇÃO</h5>
        <div class="col-6">
            <label>Profissional solicitante</label>
            <input class="form-control" value="<?= '---' ?>" readonly>
        </div>
        <div class="col-6">
            <label>Estabelecimento solicitante</label>
            <input class="form-control" value="<?= $tfd['estabelecimento_nome'] ?>" readonly>
        </div>
        <div class="col-3">
            <label>Data da solicitação</label>
            <input type="date" class="form-control" value="<?= $tfd['tfd_data_solicitacao'] ?>" readonly>
        </div>
        <div class="col-3">
            <label>Urgência (1-4)</label>
            <input class="form-control" value="<?= $tfd['tfd_risco'] ?>" readonly>
        </div>
        <div class="col-12">
            <label>Descrição/Observações</label>
            <textarea class="form-control" rows="3" readonly><?= $tfd['tfd_descricao'] ?></textarea>
        </div>

        <div class="my-2"></div>

        <h5 class="font-weight-bold">DADOS DO AGENDAMENTO</h5>
        <div class="col-4">
            <label>Cidade do atendimento</label>
            <input class="form-control" value="<?= $tfd['nome_municipio'] ?>" readonly>
        </div>
        <div class="col-4">
            <label>Estabelecimento prestador</label>
            <input class="form-control" value="<?= @$estabelecimento_prestador['estabelecimento_nome'] ?>" readonly>
        </div>
        <div class="col-4">
            <label>Data do atendimento</label>
            <input type="date" class="form-control" value="<?= $tfd['tfd_data_atendimento'] ?>" readonly>
        </div>
        <div class="col-4">
            <label>Veículo</label>
            <input class="form-control" value="<?= $tfd['tfd_veiculo'] ?>" readonly>
        </div>
        <div class="col-2">
            <label>Alimentação</label>
            <input class="form-control" value="<?= $tfd['tfd_alimentacao'] ?>" readonly>
        </div>
        <div class="col-2">
            <label>Passagem</label>
            <input class="form-control" value="<?= $tfd['tfd_passagem'] ?>" readonly>
        </div>
        <div class="col-2">
            <label>Hospedagem</label>
            <input class="form-control" value="<?= $tfd['tfd_hospedagem'] ?>" readonly>
        </div>
        <div class="col-2">
            <label>Companhia</label>
            <input class="form-control" value="<?= $tfd['tfd_acompanhante'] ?>" readonly>
        </div>

        <div class="d-none d-print-block mt-5">
            <div class="row">
                <div class="col-6 text-center small"><u>_________________________</u> <br><?= $tfd['nome_paciente'] ?></div>
                <div class="col-6 text-center small"><u>_________________________</u> <br>Secretária Municipal de Saúde</div>
            </div>
            <p class="text-center small mt-3"><strong>Documento gerado na data de </strong> <u><?= date('d/m/Y H:i:s') ?></u> <strong>em</strong> <u><?= base_url() ?></u></p>
        </div>

        <div class="card-footer pb-0 mt-2 d-print-none">
            <button class="btn btn-secondary float-right font-weight-light" onclick="window.print()"><i class="fas fa-print"></i> Imprimir página</button>
        </div>
    </div>
</div>