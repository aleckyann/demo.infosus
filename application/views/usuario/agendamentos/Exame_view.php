<div id="pay-invoice">
    <div class="card-body"><br>
        <div class="card-title">
            <h3 class="text-center">AGENDAMENTO DE EXAME</h3>
        </div>
        <hr><br>
        <form action="" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label class="control-label mb-1">Nome</label>
                        <select data-placeholder="Nome do paciente..." class="standardSelect form-control mb-1" tabindex="1">
                            <option value=""></option>
                            <option value=""></option>
                            <?php foreach ($agenda_consulta as $paciente) { ?>
                            <option value="<?= $paciente['paciente_id'] ?>"><?= $paciente['nome_paciente'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div><br>
                <div class="col-6">
                    <label class="control-label mb-1">Responsável</label>
                    <div class="input-group">
                        <input class="form-control cc-cvc" name="">
                    </div>
                </div><br>
                <div class="col-6">
                    <div class="form-group">
                        <label class="control-label mb-1">Especiaidade</label>
                        <input class="form-control cc-exp" name="">
                    </div>
                </div><br>
                <div class="col-6">
                    <label class="control-label mb-1">Médico</label>
                    <div class="input-group">
                        <input class="form-control cc-cvc" name="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="control-label mb-1">Local do exame</label>
                        <input class="form-control cc-exp" name="">
                    </div>
                </div><br>
                <div class="col-6">
                    <label class="control-label mb-1">Data e hora do exame</label>
                    <div class="input-group">
                        <input class="form-control cc-cvc" name="">
                    </div>
                </div>
                
                
                
            </div><br><br>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <span id="payment-button-amount">AGENDAR</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </div>
        </form>
    </div>
</div>
<script src="<?= base_url() ?>public/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
