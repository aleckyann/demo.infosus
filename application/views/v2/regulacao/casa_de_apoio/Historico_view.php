<div class="d-flex mb-2">
    <span class="fa-stack mr-2 ml-n1">
        <i class="fas fa-circle fa-stack-2x text-300"></i>
        <i class="fas fa-clinic-medical fa-inverse fa-stack-1x text-primary"></i>
    </span>
    <div class="flex-1 mt-1">
        <h5 class="mb-0 text-primary position-relative">
            <span class="bg-200 pr-3">Histórico de utilização</span>
            <span class="border position-absolute top-50 translate-middle-y w-100 left-0 z-index--1"></span>
        </h5>
        <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-question-circle"></i>
        </a>
    </div>
</div>


<div class="collapse mb-3" id="collapseExample">
    <div class="border p-card rounded">Nesta página você pode visualizar todo o histórico de utilização da casa de apoio.</div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">

        <table id="casaDeApoioHistoricoTable" class="table table-striped table-hover">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">CPF</th>
                <th class="text-dark small text-left">ENTRADA</th>
                <th class="text-dark small text-left">SAÍDA</th>
            </thead>
            <tbody>
                <?php foreach ($apoio as $a) : ?>
                    <tr>
                        <td class="small">
                            <?= $a['nome_paciente'] ?>
                        </td>
                        <td class="small">
                            <?= $a['cpf'] ?>
                        </td>
                        <td class="small">
                            <?= date_format(date_create($a['data_entrada']), 'd/m/Y') ?>
                        </td>
                        <td class="small">
                            <?= date_format(date_create($a['data_saida']), 'd/m/Y') ?>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<script>
    window.onload = function() {

        //ADICIONANDO FILTRO AS COLUNAS
        $('#casaDeApoioHistoricoTable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                <span class="text-dark font-weight-bold">${title}</span>
                <div class="input-group">
                    <div class="input-group-text">
                        <span data-toggle="tooltip" data-placement="top" title="Filtrar por ${title} específico">🔎</span>
                    </div>
                    <input type="text" class="form-control form-control-sm px-0 pl-1" placeholder="FILTAR POR ${title}">
                </div>
                
                `);

            }
        });


        $('#casaDeApoioHistoricoTable').DataTable({
            initComplete: function() {
                this.api().columns().every(function() {
                    let that = this;
                    $('input', this.header()).on('keyup change clear', function() {
                        if (that.search() !== this.value) {
                            that
                                .search(this.value)
                                .draw();
                        }
                    });
                });
            },
            "sScrollY": "100%",
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

            "aoColumns": [{
                    "bSortable": false
                },
                {
                    "bSortable": false
                },
                {
                    "bSortable": false
                },
                {
                    "bSortable": false
                }
            ],
            dom: 'Brtip',
            buttons: [{
                    className: 'btn btn-falcon-default btn-sm rounded-pill font-weight-light m-1',
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> imprimir',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
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
                },
                {
                    className: 'btn btn-falcon-default btn-sm rounded-pill font-weight-light m-1',
                    text: '<i class="fas fa-house-user"></i> Novo paciente',
                    action: function() {
                        $('#novoCasaDeApoio').modal('show')
                    }

                }

            ]
        });





        //CONFIRMAR REMOÇÃO DO PACIENTE 
        $('.pacienteSaiuButton').on('click', function() {
            Swal.fire({
                title: 'Confirma a saída do paciente?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Sim`,
                icon: 'question',
                showCancelButton: false,
                denyButtonText: `Não, cancelar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("<?= base_url('v2/regulacao/casa-de-apoio/update-status/') ?>" + this.dataset.apoio_id);
                } else if (result.isDenied) {
                    Swal.fire('Alteração não foi realizada.', '', 'info')
                }
            })
        })
    }
</script>