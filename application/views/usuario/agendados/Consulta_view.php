<link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

<div class="content mt-3">
            <div class="animated fadeIn"><br>
                <div class="card-title" align="center">
                    <h3 align="center" class="text-center">PACIENTES AGENDADOS (consulta)</h3>
                </div>
                <hr><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        
                                        <tr>
                                            <th>Nome</th>
                                            <th>Endereço</th>
                                            <th>Telefone</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($agenda_consulta as $paciente) { ?>
                                       <tr>
                                           <td><?= $paciente['nome_paciente'] ?></td>
                                           <td><?= $paciente['endereco_paciente'] ?></td>
                                           <td><?= $paciente['telefone_paciente'] ?></td>
                                           
                                           <td class="text-center"><button class="btn btn-info"><i class="fa fa-info"></i></button></td>
                                       </tr>
                                        <?php } ?>
                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content --> 


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="<?= base_url() ?>public/assets/js/main.js"></script>

    <script src="<?= base_url() ?>public/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>


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

