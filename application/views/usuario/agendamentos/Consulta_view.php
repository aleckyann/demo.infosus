
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/chosen/chosen.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>




<div id="pay-invoice">
    <div class="card-body"><br>
        <div class="card-title">
            <h3 class="text-center">SOLICITAÇÃO DE PROCEDIMENTOS</h3>
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
                    <div class="form-group">
                        <label class="control-label mb-1">Responsável</label>
                        <input class="form-control cc-exp" name="">
                    </div>
                </div><br>
                <div class="col-6">
                    <div class="form-group">
                        <label class="control-label mb-1">Especialidade</label>
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
                        <label class="control-label mb-1">Local da consulta</label>
                        <input class="form-control cc-exp" name="">
                    </div>
                </div><br>
                <div class="col-6">
                    <label class="control-label mb-1">Data e hora da consulta</label>
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
<script src="<?= base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>public/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/main.js"></script>
<script src="<?= base_url() ?>public/vendors/chosen/chosen.jquery.min.js"></script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 5,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>