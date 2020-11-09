<?php function data_tratada($data){
        $data_separada = explode("-", $data);
        return $data_separada[2] . "/" . $data_separada[1]. "/" . $data_separada[0];
    }
?>
        <div class="breadcrumbs">
            <div class="col-sm-8">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>NÚCLEO DE REGULAÇÃO - LISTA DE PACIENTES</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

        <div class="content mt-1">
            <div class="animated fadeIn"><br>
                <div class="card-title" align="center">
                    <h3 align="center" class="text-center">SOLICITAÇÕES TFD</h3>
                </div>
                <a href="<?= base_url() ?>usuario/regulacao/lista-pacientes"><button class="btn btn-success">CADASTRAR SOLICITAÇÃO</button></a>
                <div class="row" style="padding-top: 10px">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">PACIENTE</th>
                                            <th class="text-center">CPF</th>
                                            <th class="text-center">SITUAÇÃO</th>
                                            <th class="text-center">ACOMPANHANTE</th>
                                            <th class="text-center">DATA</th>
                                            <th class="text-center">VISUALIZAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($procedimentos_tfd as $paciente) { ?>
                                       <tr>
                                           
                                          <td>
                                              <?= $paciente['nome_paciente'] ?>
                                          </td>
                                           <td><?= $paciente['cpf'] ?></td>
                                           <td><?= $paciente['parecer'] ?></td>
                                           <td class="text-center">
                                                 <?= $paciente['acompanhante'] ?>
                                           </td>  
                                         
                                           <td class="text-center">
                                                 <?= @data_tratada($paciente['data']) ?>
                                           </td>
                                           <td class="text-center">
                                             <a href="visualiza-tfd/<?= $paciente['tfd_id'] ?>">
                                                <button title="Ver solicitação" class="btn btn-success"><i class="fa fa-eye"></i></button>
                                              </a>
                                              <a href="concluir-paciente-tfd/<?= $paciente['tfd_id'] ?>?realizado=sim">
                                                <button title="Finalizar" class="btn btn-info"><i class="fa fa-check"></i></button>
                                              </a>
                                          
                                           </td>
                                       </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                                <a href="javascript:history.back()" class="btn btn-warning">VOLTAR</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content --> 

    <!-- Right Panel -->
    <script src="<?= base_url() ?>public/assets/js/main.js"></script>

    <script src="<?= base_url() ?>public/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>

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

