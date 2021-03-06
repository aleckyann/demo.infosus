            <?= $this->ui->alert_flashdata() ?>

            <footer>
                <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">Tecnologia desenvolvida pela <span class="d-sm-inline-block"><a href="https://infosus.net.br">Infosus</a>.</p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">v2.0.0 alpha</p>
                    </div>
                </div>
            </footer>
        </div>

    </div>
</main>


<!-- ===========-->
<!-- JavaScripts-->
<!-- ===========-->
<script src="<?= base_url() ?>/public/v2/vendors/popper/popper.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/anchorjs/anchor.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/is/is.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/fontawesome/all.min.js"></script>
<script src="<?= base_url() ?>/public/v2/vendors/lodash/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="<?= base_url() ?>/public/v2/vendors/list.js/list.min.js"></script>
<script src="<?= base_url() ?>/public/v2/assets/js/theme.js"></script>

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?= base_url() ?>public/v2/vendors/countup/countUp.umd.js"></script>

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<!-- ================ -->
<!-- GLOBAL COMPONENTS -->
<!-- ================ -->
<?php $this->load->view('v2/components/global/add_paciente_modal') ?>
<?php $this->load->view('v2/components/global/add_casa_de_apoio_modal') ?>
<?php $this->load->view('v2/components/global/add_procedimento_modal') ?>
<?php $this->load->view('v2/components/global/add_tfd_modal') ?>
<?php $this->load->view('v2/components/global/load_paciente_modal') ?>
<?php $this->load->view('v2/components/global/add_viagem_modal') ?>
<?php $this->load->view('v2/components/global/add_estoque_modal') ?>

</body>


</html>