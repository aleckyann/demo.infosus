<?php 
$host = "localhost";
$user = "busca903_projeto";
$pass = "jf91500290";
$banco = "busca903_314085_matias_cardoso";


//$host = "localhost";
//$user = "root";
//$pass = "";
//$banco = "busca903_bpa";
//AMBIENTE DE HOMOLOGAÇÃO:
$conexao = mysqli_connect($host, $user, $pass, $banco);


    function conta_proced($conexao, $proced){
    if (!@$_POST['ano']) {
        @$ano = date('Y');
    }else{
        @$ano = $_POST['ano'];
    }
    $query = "SELECT count(proc_rea) from matias where proc_rea = {$proced} and ano_cmpt = $ano";   

    $resultado = mysqli_query($conexao, $query);
    $tipo = mysqli_fetch_assoc($resultado);
    $tipo = implode($tipo);
    return $tipo;
}

function procedimento($conexao, $proced){
    
    $query = "SELECT nome from tabela_proced where codigo = {$proced}";   

    $resultado = mysqli_query($conexao, $query);
    $tipo = mysqli_fetch_assoc($resultado);
    $tipo = implode($tipo);
    return $tipo;
}

function valor_municipio($conexao, $cidade){
    if (!@$_POST['ano']) {
        @$ano = date('Y');
    }else{
        @$ano = $_POST['ano'];
    }
    $query = "SELECT sum(val_tot) from matias where munic_mov = '{$cidade}' and ano_cmpt = $ano";   

    $resultado = mysqli_query($conexao, $query);
    $tipo = mysqli_fetch_assoc($resultado);
    $tipo = implode($tipo);
    return $tipo;
}

function quant_municipio($conexao, $cidade){
    if (!@$_POST['ano']) {
        @$ano = date('Y');
    }else{
        @$ano = $_POST['ano'];
    }
    $query = "SELECT count(munic_mov) from matias where munic_mov = '{$cidade}' and ano_cmpt = $ano";   

    $resultado = mysqli_query($conexao, $query);
    $tipo = mysqli_fetch_assoc($resultado);
    $tipo = implode($tipo);
    return $tipo;
}

 
 function cod_cidade($conexao, $cidade){
    
    $query = "SELECT nome_municipio from municipios_ibge where cod_ibge = '{$cidade}'";   

    $resultado = mysqli_query($conexao, $query);
    $tipo = mysqli_fetch_assoc($resultado);
    $tipo = implode($tipo);
    return $tipo;
}
?>
<div class="breadcrumbs">
            <div class="col-sm-8">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>NÚCLEO DE INFORMAÇÕES - SIHSUS</h1>
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
                    <h3 align="center" class="text-center">PROCEDIMENTOS REALIZADOS - SIH - RESIDENTES EM MATIAS CARDOSO</h3>
                </div><br>
                <form action="" method="POST" >
                <div class="row">
                    <div class="col-md-2">
                        <select class="form-control" type="text" name="ano">
                            <option value="">ANO</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-info"><i class="fa fa-refresh"></i></button>
                    </div>
                </div>
            </form>
                
                <div class="row" style="padding-top: 10px">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 60%">PROCEDIMENTO</th>
                                            <th class="text-center" style="width: 20%">MUNICIPIO</th>
                                            <th class="text-center">DATA INTERNAÇÃO</th>
                                            <th class="text-center">DATA SAÍDA</th>
                                            <th class="text-center" >DIARIAS</th>
                                            <th class="text-center">VALOR TOTAL</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($sih as $proced) { ?>
                                       <tr>
                                           <td><b><?= $proced['proc_rea'] ?></b> - <?= utf8_encode(procedimento($conexao, $proced['proc_rea'])) ?></td>
                                           <td><?= $proced['nome_municipio'] ?></td>
                                           <td><?= $proced['dt_inter'] ?></td>
                                           <td><?= $proced['dt_saida'] ?></td>
                                           <td><?= $proced['qt_diarias'] ?></td>
                                           <td>R$ <?= $proced['val_tot'] ?></td>
                                       </tr>
                                        <?php } ?>
                                      
                                    </tbody>
                                </table><br><br><br>


<div class="col-sm-12 mb-4">
        <div class="card-group">
            <h2 align="center">CONSOLIDADO POR MUNICÍPIO</h2><br><br>
            <div class="row">
            <?php foreach ($municipio_sih as $mun): ?>
            <div class="card col-md-3 no-padding ">
                <div class="card-body">
                    <div class="h4 mb-0">
                        <span class="">R$ <?= valor_municipio($conexao, $mun['munic_mov'])?></span>
                    </div><br>
                    <div>
                        <span><?= quant_municipio($conexao, $mun['munic_mov']) ?> PROCEDIMENTOS</span>
                    </div>

                    <h4 style="color: green"><?= utf8_encode(cod_cidade($conexao, $mun['munic_mov'])) ?></h4>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 98%; height: 5px;"></div>
                </div>
            </div>
           <?php endforeach ?>
           </div>
        </div>
    </div>







                                <a href="<?= base_url() ?>usuario/regulacao/procedimentos-diversos" class="btn btn-warning">VOLTAR</a>
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