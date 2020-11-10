<?php function data_tratada($data){
        $data_separada = explode("-", $data);
        return $data_separada[2] . "/" . $data_separada[1]. "/" . $data_separada[0];
    }
?>
        <div class="breadcrumbs">
            <div class="col-sm-8">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>NÚCLEO DE REGULAÇÃO - HISTÓRICO DO PACIENTE</h1>
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
                    <h3 align="center" class="text-center">HISTÓRICO DO PACIENTE</h3>
                        <h5 class="text-info"><?= $paciente[0]['nome_paciente'] ?></h5>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nº</th>
                                            <th class="text-center">PROCEDIMENTO</th>
                                            <th class="text-center">DATA DA SOLICITAÇÃO</th>
                                            <th class="text-center">DATA REALIZADA</th>
                                            <th class="text-center">ESTABELECIMENTO</th>
                                            <th class="text-center">PRESTADOR</th>
                                            <th class="text-center">COTA</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($procedimentos_i as $procedimento_i) { ?>
                                        <?php 
                                         @$seq = $seq + 1;
                                         ?>
                                        <tr>
                                           <td><?= $seq ?></td>
                                           <td><?= $procedimento_i['nome_procedimento'] ?></td>
                                           <td><?= data_tratada($procedimento_i['data_solicitacao']) ?></td>
                                           <td><?= data_tratada($procedimento_i['data']) ?></td>
                                     
                                           <td><?= $procedimento_i['estabelecimento_solicitante'] ?></td>
                                           <td><?= $procedimento_i['estabelecimento_prestador'] ?> - <?= $procedimento_i['cidade_prestador'] ?></td>
                                           <td><?= $procedimento_i['cota'] ?></td>
                                           <td><?= ($procedimento_i['realizado'] == 'sim') ? '<i class="text-success fa fa-check"></i>' : '<i class="text-danger fa fa-close"></i>' ;
                                            ?>
                                            </td>


                                        </tr>
                                        <?php } ?>
                                       
                                       
                                    </tbody>
                                </table><br><br>
                                <h4 align="center">TRATAMENTO FORA DE DOMICÍLIO</h4><br>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nº</th>
                                            <th class="text-center">PROCEDIMENTO</th>
                                            <th class="text-center">DATA DA SOLICITAÇÃO</th>
                                            <th class="text-center">DATA REALIZADA</th>
                                            <th class="text-center">CIDADE</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        <?php foreach ($tfd_i as $tfd) { ?>
                                        <?php 
                                         @$seq = $seq + 1;
                                         ?>
                                        <tr>
                                           <td><?= $seq ?></td>
                                           <td>TRATAMENTO FORA DE DOMICÍLIO</td>
                                           <td><?= $tfd['data_solicitacao'] ?></td>
                                           <td><?= data_tratada($tfd['data']) ?></td>
                                     
                                           <td><?= $tfd['local'] ?></td>
                                           <td><?= ($tfd['realizado'] == 'sim') ? '<i class="text-success fa fa-check"></i>' : '<i class="text-danger fa fa-close"></i>' ;
                                            ?>
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

