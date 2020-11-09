
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
<div class="content mt-1">
    <div class="animated fadeIn">
        <div class="card card-border-color card-border-color-primary">
            <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
            <div class="card-body">
                <table id="pacientes" class="table table-striped table-hover float-center">
                    <thead>
                        <tr>
                            <th class="font-weight-bold">Nome</th>
                            <th class="font-weight-bold">Telefone</th>
                            <th class="font-weight-bold">Cidade</th>
                            <th class="font-weight-bold">Opções</th>

                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th class="font-weight-bold">Nome</th>
                            <th class="font-weight-bold">Telefone</th>
                            <th class="font-weight-bold">Cidade</th>
                            <th class="font-weight-bold">Opções</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>



<script>
    window.onload = function() {

        $('#pacientes').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
            },
            "ajax": {
                "url": "<?= base_url('usuario/regulacao/json') ?>", //ONDE VAI PEGAR OS DADOS
                "deferRender": true,
            },
            "responsive": true,
            "processing": true,
            "columns": [
            
                { //COLUNAS DO HTML/DATATABLE EM ORDEM
                    "data": "nome_paciente"
                },
                {
                    "data": "telefone_paciente"
                },
                {
                    "data": "cns_paciente"
                },
                {
                    data: null, //SE FOR USAR BOTÃO NO LUGAR DO DADO DIRETO
                    render: function(data, type, row) {
                        return `
                        <a class="btn btn-warning" style="color:white;" href="<?= base_url("usuario/regulacao/historico-paciente/") ?>${data.paciente_id}" title="Histórico do paciente"><i class="fa fa-address-card-o"></i></a>
                        <a class="btn btn-success" style="color:white;" href="<?= base_url("usuario/regulacao/dados-paciente/") ?>${data.paciente_id}" title="Histórico do paciente cliente"><i class="fa fa-share-square-o"></i></a>
                        <a class="btn btn-default" style="color:white;" href="<?= base_url("usuario/excluir-paciente?id=") ?>${data.paciente_id}" title="Excluir paciente"><i class="text-danger fa fa-window-close"> </i></a>
                        
                        `;
                    }

                }
            ]
        });
    }
</script>


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