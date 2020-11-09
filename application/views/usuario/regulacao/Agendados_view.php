<?php function data_tratada($data){
        $data_separada = explode("-", $data);
        return $data_separada[2] . "/" . $data_separada[1]. "/" . $data_separada[0];
    }
?>
        <div class="breadcrumbs">
            <div class="col-sm-8">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>NÚCLEO DE REGULAÇÃO - PROCEDIMENTOS REALIZADOS</h1>
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
                    <h3 align="center" class="text-center">PROCEDIMENTOS REALIZADOS</h3>
                </div><br>
                <form action="" method="post">Informe o período para filtrar:
                  <div class="row">
                    <div class="col-md-3"><input class="form-control" type="date" name="data_inicio"></div> até
                    <div class="col-md-3"><input class="form-control" type="date" name="data_fim"></div>
                    <div class="col-md-1"><button class="btn btn-info"><i class="fa fa-search"></i></button></div>
                  </div>
                </form><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">PACIENTE</th>
                                            <th class="text-center">CPF</th>
                                            <th class="text-center">PROCEDIMENTO</th>
                                            <th class="text-center">TELEFONE</th>
                                            <th class="text-center">DATA SOLICITAÇÃO</th>
                                            <th class="text-center">DATA REALIZADA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($procedimentos_realizados as $realizado) { ?>
                                       <tr <?php if ($realizado['estabelecimento_prestador'] != ''): ?>class="text-success"<?php endif ?>>
                                           <td><?= $realizado['nome_paciente'] ?></td>
                                           <td><?= $realizado['cpf'] ?></td>
                                           <td><?= $realizado['nome_procedimento'] ?></td>
                                           <td><?= $realizado['telefone_paciente'] ?></td>
                                           <td class="text-center">
                                                 <?= @data_tratada($realizado['data_solicitacao']) ?>
                                           </td>                                               
                                           <td class="text-center">
                                                 <?= @data_tratada($realizado['data']) ?>
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

