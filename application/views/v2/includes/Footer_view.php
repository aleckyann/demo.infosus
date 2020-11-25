<?= $this->ui->alert_flashdata() ?>

<footer>
    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
        <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">Tecnologia desenvolvida pela <span class="d-none d-sm-inline-block"><a href="https://infosus.net.br">Infosus</a>.</p>
        </div>
        <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">v2.0.0 alpha</p>
        </div>
    </div>
</footer>
</div>

</div>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->



<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="<?= base_url() ?>/public/v2/vendors/popper/popper.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/anchorjs/anchor.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/is/is.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/fontawesome/all.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/lodash/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="<?= base_url() ?>/public/v2/vendors/list.js/list.min.js"></script>
<script src="<?= base_url() ?>/public/v2/assets/js/theme.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

<script src="<?= base_url() ?>public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>public/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>public/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= base_url() ?>public/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url() ?>public/vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url() ?>public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>public/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/init-scripts/data-table/datatables-init.js"></script>

<!-- ====== -->
<!-- MODALS -->
<!-- ====== -->


<!-- Modal novoPaciente-->
<div class="modal fade" id="novoPaciente" tabindex="-1" role="dialog" aria-labelledby="novoPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light" id="novoPacienteLabel"><i class="fas fa-user-injured"></i> Cadastrar novo paciente</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/pacientes/new') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-8">
                            <label class="form-label">Nome</label>
                            <input class="form-control" name="nome_paciente" type="text" placeholder="Nome completo do paciente" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">Data de nascimento</label>
                            <input class="form-control" name="nascimento" type="date" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">CPF</label>
                            <input class="form-control" name="cpf" type="text" placeholder="000.000.000-00" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">RG</label>
                            <input class="form-control" name="identidade" type="text" placeholder="00.000.000" />
                        </div>

                        <div class="mb-2 col-4">
                            <label class="form-label">Telefone</label>
                            <input class="form-control" name="telefone_paciente" type="phone" placeholder="(00) 99999-9999" />
                        </div>
                        <div class="mb-2 col-6">
                            <label class="form-label">Endereço</label>
                            <input class="form-control" name="endereco" type="text" placeholder="Endereço completo" />
                        </div>
                        <div class="mb-2 col-3">
                            <label class="form-label">CEP</label>
                            <input class="form-control" name="cep" type="search" placeholder="39999-999" />
                        </div>
                        <div class="mb-2 col-3">
                            <label class="form-label">Bairro</label>
                            <input class="form-control" name="bairro_paciente" type="text" placeholder="Nome do bairro" />
                        </div>

                        <div class="mb-2 col-3">
                            <label class="form-label">CNS</label>
                            <input class="form-control" name="cns_paciente" type="text" placeholder="Cartão do sus" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">ACS ou referência</label>
                            <input class="form-control" name="acs" type="text" placeholder="Agente de saúde" />
                        </div>
                        <div class="mb-2 col-5">
                            <label class="form-label">Responsável</label>
                            <input class="form-control" name="responsavel" type="text" placeholder="Responsável se houver" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">Profissão</label>
                            <input class="form-control" name="profissao" type="text" placeholder="Profissão" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    //Cria modal para adição de pacientes
    var novoPaciente = new bootstrap.Modal(document.getElementById('novoPaciente'), {
        keyboard: false
    })
</script>


<!-- Modal novoCasaDeApoio-->
<div class="modal fade" id="novoCasaDeApoio" role="dialog" aria-labelledby="novoCasaDeApoioLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light" id="novoCasaDeApoioLabel"><i class="fas fa-house-user"></i> Adicionar a casa de apoio</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/casa-de-apoio/new') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-12 mb-5">
                            <label for="">Paciente</label>
                            <select class="js-data-example-ajax" style="width:100%" name="paciente_id">
                            </select>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    //Cria modal para adição de pacientes
    var novoCasaDeApoio = new bootstrap.Modal(document.getElementById('novoCasaDeApoio'), {
        keyboard: false
    })
    $(document).ready(function() {
        var casaDeApoioSelec2 = $('.js-data-example-ajax').select2({
            ajax: {
                url: '<?= base_url('v2/pacientes/jsonDatatable') ?>',
                method: 'POST',
                data: function(params) {
                    var query = {
                        nome_paciente: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }

                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                dataType: 'json',
                placeholder: "Selecione um paciente",
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });
        casaDeApoioSelec2.on('select2:select', function(e) {
            console.log(e)
        });
    });
</script>

</body>


</html>