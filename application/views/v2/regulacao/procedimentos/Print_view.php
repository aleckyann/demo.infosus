<?php
// Dados complementares temporários
$estabelecimento_prestador = $this->db->get_where('estabelecimentos', ['estabelecimento_id' => $procedimento['estabelecimento_prestador']])->row_array();
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
        <div class="col-8">
            <label for="">Nome</label>
            <input type="text" class="form-control pr-0" value="<?= $procedimento['nome_paciente'] ?>" readonly>
        </div>
        <div class="col-4">
            <label for="">Nascimento</label>
            <input type="text" class="form-control pr-0" value="<?= date_format(date_create($procedimento['nascimento']), 'd/m/Y') ?>" readonly>
        </div>
        <div class="col-8">
            <label for="">Endereço</label>
            <input type="text" class="form-control pr-0" value="<?= $procedimento['endereco_paciente'] ?>" readonly>
        </div>
        <div class="col-4">
            <label for="">Bairro</label>
            <input type="text" class="form-control pr-0" value="<?= $procedimento['bairro_paciente'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">Telefone</label>
            <input type="text" class="form-control pr-0" value="<?= $procedimento['telefone_paciente'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">CPF</label>
            <input type="text" class="form-control pr-0" value="<?= $procedimento['cpf'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">RG</label>
            <input type="text" class="form-control pr-0" value="<?= $procedimento['identidade'] ?>" readonly>
        </div>
        <div class="col-3">
            <label for="">CNS</label>
            <input type="text" class="form-control pr-0" value="<?= $procedimento['cns_paciente'] ?>" readonly>
        </div>

        <div class="my-2"></div>

        <h5 class="font-weight-bold">DADOS DA SOLICITAÇÃO</h5>
        <div class="col-12">
            <label>Nome do procedimento</label>
            <input class="form-control" value="<?= $procedimento['nome'] ?>" readonly>
        </div>
        <div class="col-6">
            <label>Especialidade</label>
            <input class="form-control" value="<?= $procedimento['especialidade_nome'] ?>" readonly>
        </div>
        <div class="col-6">
            <label>Profissional solicitante</label>
            <input class="form-control" value="<?= $procedimento['profissional_nome'] ?>" readonly>
        </div>
        <div class="col-6">
            <label>Estabelecimento solicitante</label>
            <input class="form-control" value="<?= $procedimento['estabelecimento_nome'] ?>" readonly>
        </div>
        <div class="col-3">
            <label>Data da solicitação</label>
            <input class="form-control" value="<?= date_format(date_create($procedimento['data_solicitacao']), 'd/m/Y') ?>" readonly>
        </div>
        <div class="col-3">
            <label>Urgência (1-4)</label>
            <input class="form-control" value="<?= $procedimento['procedimento_risco'] ?>" readonly>
        </div>
        <div class="col-12">
            <label>Sintomas/Observações</label>
            <textarea class="form-control" rows="3" readonly><?= $procedimento['sintomas'] ?></textarea>
        </div>

        <div class="my-2"></div>

        <h5 class="font-weight-bold">DADOS DO AGENDAMENTO</h5>

        <div class="col-4">
            <label>Cidade do prestador</label>
            <input class="form-control" value="<?= $procedimento['nome_municipio'] ?>" readonly>
        </div>
        <div class="col-4">
            <label>Estabelecimento prestador</label>
            <input class="form-control" value="<?= @$estabelecimento_prestador['estabelecimento_nome'] ?>" readonly>
        </div>
        <div class="col-4">
            <label>Data do atendimento</label>
            <input class="form-control" value="<?= date_format(date_create($procedimento['data']), 'd/m/Y') ?>" readonly>
        </div>
        <div class="col-12">
            <label>Cota utilizada</label>
            <input class="form-control" value="<?= $procedimento['cota'] ?>" readonly>
        </div>

        <div class="d-none d-print-block mt-4">
            <div class="row">
                <div class="col-6 text-center small"><u>_________________________</u> <br><?= $procedimento['nome_paciente']?></div>
                <div class="col-6 text-center small"><u>_________________________</u> <br>Secretária Municipal de Saúde</div>
            </div>
        </div>

        <div class="card-footer bg-light mt-2">
            <p class="text-center small"><strong>Documento gerado na data de </strong> <u><?= date('d/m/Y H:i:s') ?></u> <strong>em</strong> <u><?= base_url() ?></u></p>
        </div>
    </div>
</div>
<button class="btn btn-primary font-weight-light d-print-none" onclick="window.print()"><i class="fas fa-print"></i> Imprimir página</button>