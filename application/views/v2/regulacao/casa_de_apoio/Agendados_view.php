<div class="d-flex my-3">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-1.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">

                <i class="fas fa-clinic-medical text-warning"></i> Utilizações agendadas
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar todo histórico de utilizações da casa de apoio.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">

        <table id="casaDeApoioAgendados_datatable" class="table table-striped table-hover" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">ENTRADA</th>
                <th class="text-dark small text-left">SAÍDA</th>
                <th class="text-dark small text-center align-middle">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($apoio as $a) : ?>
                    <tr>
                        <td class="small">
                            <a class="load_paciente_button" href="#" data-paciente_id="<?= $a['paciente_id'] ?>"><?= $a['nome_paciente'] ?></a>
                        </td>
                        <td class="small">
                            <?= date_format(date_create($a['data_entrada']), 'd/m/Y') ?>
                        </td>
                        <td class="small">
                            <?= date_format(date_create($a['data_saida']), 'd/m/Y') ?>
                        </td>

                        <td class="text-center p-1">
                            <div class="btn-group">
                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item text-warning editarRegistrosCasaDeApoioButton" data-apoio_id="<?= $a['apoio_id'] ?>"><i class="fa fa-edit"></i> Editar registro</button>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-danger pacienteSaiu_button" data-apoio_id="<?= $a['apoio_id'] ?>"><i class="fa fa-check"></i> Paciente saiu</button>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>


<!-- CARREGAR COMPONENTES -->
<?php $this->load->view('v2/components/casa_de_apoio/editar_casa_de_apoio_modal') ?>

<script>
    window.onload = function() {

        //Cria modal para editar paciente
        var editar_casa_de_apoio_modal = new bootstrap.Modal(document.getElementById('editar_casa_de_apoio_modal'))


        // ABRE MODAL DE EDITAR
        $('body').on('click', '.editarRegistrosCasaDeApoioButton', function() {
            var apoio_id = this.dataset.apoio_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/regulacao/casa-de-apoio/json/') ?>" + apoio_id,
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(casa_de_apoio) {
                    $('#apoio_id').val(casa_de_apoio.apoio_id);
                    $('#nome_paciente').val(casa_de_apoio.nome_paciente);
                    $('#data_entrada').val(casa_de_apoio.data_entrada);
                    $('#data_saida').val(casa_de_apoio.data_saida);
                    $('#observacao').val(casa_de_apoio.observacao);

                });
            editar_casa_de_apoio_modal.toggle()
        });


        //ADICIONANDO FILTRO AS COLUNAS
        $('#casaDeApoioAgendados_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });


        $('#casaDeApoioAgendados_datatable').DataTable({
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
                    "sFirst": "<<",
                    "sPrevious": "<",
                    "sNext": ">",
                    "sLast": ">>"
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
                },
                {
                    className: 'btn btn-falcon-primary btn-sm rounded-pill font-weight-light m-1',
                    text: '<i class="fas fa-house-user"></i> Novo paciente',
                    action: function() {
                        $('#add_casa_de_apoio_modal').modal('show')
                    }

                }

            ]
        });



        //CONFIRMAR REMOÇÃO DO PACIENTE 
        $("#casaDeApoioAgendados_datatable").on("click", ".pacienteSaiu_button", function() {
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