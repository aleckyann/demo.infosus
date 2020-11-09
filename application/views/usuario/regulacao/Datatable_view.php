<div class="row">
    <div class="col-sm-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                Base de clientes
                <span class="card-subtitle">Listagem com todos os seus clientes</span>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-hover float-center">
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

        $('#example').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
            },
            "ajax": {
                "url": "<?= base_url('usuario/regulacao/json') ?>", //ONDE VAI PEGAR OS DADOS
                "deferRender": true,
            },
            "responsive": true,
            "processing": true,
            "columns": [{ //COLUNAS DO HTML/DATATABLE EM ORDEM
                    "data": "cliente_nome"
                },
                {
                    "data": "cliente_telefone"
                },
                {
                    "data": "cidade_nome"
                },
                {
                    data: null, //SE FOR USAR BOTÃO NO LUGAR DO DADO DIRETO
                    render: function(data, type, row) {
                        return `
                        <a class="btn btn-warning mr-1" href="<?= base_url("admin/clientes/editar/") ?>${data.cliente_id}" title="Editar cliente">\u{1F4CE}</a>
                        <a class="btn btn-primary" href="<?= base_url("admin/clientes/historico/") ?>${data.cliente_id}" title="Histórico de atendimentos">📖</a>
                        `;
                    }

                }
            ]
        });
    }
</script>