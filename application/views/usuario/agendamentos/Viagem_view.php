<div id="pay-invoice">
    <div class="card-body"><br>
        <div class="card-title">
            <h3 class="text-center">AGENDAMENTO DE VIAGEM</h3>
        </div>
        <hr><br>
        <form action="" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label class="control-label mb-1">Nome</label>
                        <input class="form-control cc-exp" name="">
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
                        <label class="control-label mb-1">Local de partida</label>
                        <input class="form-control cc-exp" name="">
                    </div>
                </div><br>
                <div class="col-6">
                    <label class="control-label mb-1">Ida e volta</label>
                    <div class="input-group">
                        <input class="form-control cc-cvc" name="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="control-label mb-1">Veículo</label>
                        <input class="form-control cc-exp" name="">
                    </div>
                </div><br>
                <div class="col-6">
                    <label class="control-label mb-1">Data e hora</label>
                    <div class="input-group">
                        <input class="form-control cc-cvc" type="date" name="">
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
