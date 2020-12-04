<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-1.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-calendar-times text-danger"></i> Procedimentos reprimidos
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar todos os procedimentos que foram reprimidos.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">

        <table id="procedimentosReprimidos_datatable" class="table table-striped table-hover" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">MOTIVO</th>
                <th class="text-dark small text-left">PROCEDIMENTO</th>
            </thead>
            <tbody>
                <?php foreach ($procedimentos as $p) : ?>
                    <tr>
                        <td class="small">
                            <?php switch ($p['procedimento_risco']) {
                                case '1':
                                    echo ('<span class="mr-2 fas fa-user-injured text-info" style="font-size:20px"></span>');
                                    break;
                                case '2':
                                    echo ('<span class="mr-2 fas fa-user-injured text-success" style="font-size:20px"></span>');
                                    break;
                                case '3':
                                    echo ('<span class="mr-2 fas fa-user-injured text-warning" style="font-size:20px"></span>');
                                    break;
                                case '4':
                                    echo ('<span class="mr-2 fas fa-user-injured text-danger" style="font-size:20px"></span>');
                                    break;
                                case '':
                                    echo ('<span class="mr-2 fas fa-user-injured text-muted" style="font-size:20px"></span>');
                                    break;
                            } ?>
                            <span class="small align-middle">
                                <a class="loadPaciente_button" href="#" data-paciente_id="<?= $p['paciente_id'] ?>"><?= $p['nome_paciente'] ?></a>
                            </span>
                        </td>
                        <td class="small">
                            <?= $p['reprimido_por'] ?>
                        </td>
                        <td class="small">
                            <?= $p['nome_procedimento'] ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>



<script>
    window.onload = function() {

        // ABRE MODAL DE EDITAR
        $('.editarProcedimento_button').on('click', function() {
            var procedimento_id = this.dataset.procedimento_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/regulacao/procedimentos/json/') ?>" + procedimento_id,
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(casa_de_apoio) {
                    $('#procedimento_id').val(casa_de_apoio.procedimento_id);
                    $('#nome_paciente').val(casa_de_apoio.nome_paciente);
                    $('#data_entrada').val(casa_de_apoio.data_entrada);
                    $('#data_saida').val(casa_de_apoio.data_saida);
                    $('#observacao').val(casa_de_apoio.observacao);

                });
            editarRegistrosCasaDeApoioModel.toggle()
        });


        //ADICIONANDO FILTRO AS COLUNAS
        $('#procedimentosReprimidos_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });


        $('#procedimentosReprimidos_datatable').DataTable({
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
                }
            ],
            dom: 'Brtip',
            buttons: [{
                    className: 'btn btn-falcon-default btn-sm rounded-pill font-weight-light m-1',
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> imprimir',
                    exportOptions: {
                        columns: [0, 1, 2]
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
                    text: '<i class="far fa-calendar-plus"></i> Novo procedimento',
                    action: function() {
                        $('#AddProcedimento_modal').modal('show')
                    }

                }

            ]
        });

    }
</script>