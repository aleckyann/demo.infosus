<?php function data_tratada($data){
        $data_separada = explode("-", $data);
        return $data_separada[2] . "/" . $data_separada[1]. "/" . $data_separada[0];
    }
?>
<div class="breadcrumbs">
    <div class="col-sm-8">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>NÚCLEO DE REGULAÇÃO - LISTA DE PACIENTES NA CASA</h1>
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
            <h3 align="center" class="text-center">PACIENTES NA CASA</h3>
        </div>
        <a href="<?= base_url() ?>usuario/regulacao/lista-pacientes"><button class="btn btn-success">ADICIONAR PACIENTE NA CASA
                </button></a>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                        <table id="fila" class="table table-striped table-bordered display nowrap">
                            <thead>
                                    <th class="text-dark small font-weight-bold text-left">PACIENTE</th>
                                    <th class="text-dark small font-weight-bold text-left">CPF</th>
                                    <th class="text-dark small font-weight-bold text-left">DATA DE ENTRADA</th>
                                    <th class="text-dark small font-weight-bold text-left">PREVISÃO DE SAÍDA</th>
                                    <th class="text-dark small font-weight-bold text-center align-middle">OPÇÕES</th>
                            </thead>
                            <tbody>
                                <?php foreach ($casadeapoio as $paciente) { ?>
                                <tr>
                                    <td class="small">
                                        <?= $paciente['nome_paciente'] ?>
                                    </td>
                                    <td class="small"><?= $paciente['cpf'] ?></td>
                                   
                                    <td class="small">
                                        <?= @data_tratada($paciente['data_entrada']) ?>
                                    </td>
                                    
                                    <td class="small">
                                        <?= @data_tratada($paciente['data_saida']) ?>
                                    </td>
                                    <td class="text-center small">
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                          <button type="button" data-display="static" class="btn btn-info btn-sm dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" aria-haspopup="true">
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right">
                                            <a class="small dropdown-item" href="atualizar-datas-casa/<?= $paciente['paciente_id'] ?>/<?= $paciente['apoio_id'] ?>"><i class="fa fa-edit"></i> Atualizar Datas</a>
                                            <div class="small dropdown-divider"></div>
                                            <a class="small dropdown-item" href="baixa-paciente-casa/<?= $paciente['apoio_id'] ?>"><i class="fa fa-check"></i> Paciente saiu</a>

                                          </div>
                                        </div>
                                       
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                        <a href="javascript:history.back()"
                            class="btn btn-warning">VOLTAR</a>
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

<script>
    $(document).ready(function() {
        //Add input de filtro às colunas
        $('#fila thead th').each(function () {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            }else{
                
                $(this).html(`
                <span class="text-dark font-weight-bold">${title}</span>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text form-control-sm" data-toggle="tooltip" data-placement="top" title="Filtrar por ${title} específico">🔎</div>
                    </div>
                    <input type="text" class="form-control form-control-sm px-0 pl-1" placeholder="Filtrar">
                </div>
                
                `);

            }
        });



        $('#fila').DataTable({
            initComplete: function () {
                this.api().columns().every(function () {
                    let that = this;
                    $('input', this.header()).on('keyup change clear', function () {
                        if (that.search() !== this.value) {
                            that
                                .search(this.value)
                                .draw();
                        }
                    });
                });
            },
            "search": {
                "smart": false
            },
            "ordering": false,
            "oLanguage": {
                "sProcessing": "Aguarde enquanto os dados são carregados ...",
                "sLengthMenu": "Mostrar _MENU_ resgistros por pagina",
                "sZeroRecords": "Nenhuma registro encontrado correspondente aos critérios de pesquisa",
                "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                "sInfoFiltered": "",
                "sSearch": "<i class='ti-help-alt text-info' data-toggle='tooltip' title='COMO UTILIZAR: Digite parte de uma palavra ou termo para aplicar um filtro em toda a tabela. ' style='cursor:pointer'></i> FILTRO:",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Próximo",
                    "sLast": "Último"
                }
            },
            
            "aoColumns": [
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false},
                {"bSortable": false}
            ],
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> Imprimir planilha',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    },
                    customize: function(win) {
                        $(win.document.body)
                            .css('font-size', '10pt')
                            .prepend(
                                '<img src="" style="margin-top: 100px; height:100%;position:absolute; top:0; left:10%; opacity:0.1; width:850px; height:600px" />'
                            );

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]
        });
    });

</script>