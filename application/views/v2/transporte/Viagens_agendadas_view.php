<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-1.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-route text-warning"></i> Viagens agendadas
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar todas as viagens agendadas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>
    <div class="card-body">

        <table id="viagens_agendadas_datatable" class="table table-striped table-hover" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">VEÍCULO</th>
                <th class="text-dark small text-left">DATA</th>
                <th class="text-dark small text-left">ORIGEM</th>
                <th class="text-dark small text-left">DESTINO</th>
                <th class="text-dark small text-center align-middle">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($viagens as $v) : ?>
                    <tr>
                        <td class="small">
                            <?= $v['veiculo_marca'] ?> - <?= $v['veiculo_placa'] ?>
                        </td>
                        <td class="small">
                            <?= date_format(date_create($v['viagem_data']), 'd/m/Y') ?>
                        </td>
                        <td class="small">
                            <?= $v['origem'] ?>
                        </td>
                        <td class="small">
                            <?= $v['destino'] ?>
                        </td>
                        <td class="text-center p-1">
                            <div class="btn-group">
                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item passageiros_viagem_button" data-viagem_id="<?= $v['viagem_id'] ?>"><i class="fa fa-users"></i> Passageiros</button>
                                        <button class="dropdown-item text-warning editar_viagem_button" data-viagem_id="<?= $v['viagem_id'] ?>"><i class="fa fa-edit"></i> Editar viagem</button>
                                        <button class="dropdown-item text-success finalizar_viagem_button" data-viagem_id="<?= $v['viagem_id'] ?>"><i class="fa fa-check"></i> Finalizar viagem</button>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-danger cancelar_viagem_button" data-viagem_id="<?= $v['viagem_id'] ?>"><i class="fa fa-times"></i> Cancelar viagem</button>
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
<?php $this->load->view('v2/components/editar_viagem_modal') ?>
<?php $this->load->view('v2/components/passageiros_viagem_modal') ?>


<script>
    window.onload = function() {

        //Cria modal para editar viagem
        var editar_viagem_modal = new bootstrap.Modal(document.getElementById('editar_viagem_modal'));

        // ABRE MODAL DE EDITAR
        $('.editar_viagem_button').on('click', function() {
            var viagem_id = this.dataset.viagem_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/viagens/json') ?>",
                    data: {
                        viagem_id: viagem_id,
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(viagem) {
                    $('#editar_viagem_id').val(viagem.viagem_id);
                    $('#editar_viagem_origem').val(viagem.origem);
                    $('#editar_viagem_destino').val(viagem.destino);
                    $('#editar_viagem_data').val(viagem.viagem_data);
                    $('#editar_viagem_veiculo').val(viagem.viagem_veiculo_id);

                });
            editar_viagem_modal.toggle()
        });


        //ADICIONANDO FILTRO AS COLUNAS
        $('#viagens_agendadas_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });


        $('#viagens_agendadas_datatable').DataTable({
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
                    className: 'btn btn-falcon-default btn-sm rounded-pill font-weight-light m-1',
                    text: '<i class="fas fa-route"></i> Nova viagem',
                    action: function() {
                        $('#add_viagem_modal').modal('show')
                    }

                }

            ]
        });

        
        //Cria modal para editar viagem
        var passageiros_viagem_modal = new bootstrap.Modal(document.getElementById('passageiros_viagem_modal'));
        // ABRE MODAL DE EDITAR
        $('.passageiros_viagem_button').on('click', function() {
            var viagem_id = this.dataset.viagem_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/passageiros/json') ?>",
                    data: {
                        viagem_id: viagem_id,
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
                })
                .done(function(passageiros) {
                    $.each(passageiros, function(index, value) {
                        console.log(value);
                    });


                });
            passageiros_viagem_modal.toggle()
        });


        //CONFIRMAR REMOÇÃO DA VIAGEM 
        $("#viagens_agendadas_datatable").on("click", ".finalizar_viagem_button", function() {
            Swal.fire({
                title: 'Confirma a realização desta viagem?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Sim`,
                icon: 'question',
                showCancelButton: false,
                denyButtonText: `Não, cancelar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("<?= base_url('v2/transportes/viagens/finalizar/') ?>" + this.dataset.viagem_id);
                } else if (result.isDenied) {
                    Swal.fire('Alteração não foi realizada.', '', 'info')
                }
            })
        })

        //CONFIRMAR FINALIZAÇÃO DE VIAGEM
        $("#viagens_agendadas_datatable").on("click", ".cancelar_viagem_button", function() {
            Swal.fire({
                title: 'Confirma o cancelamento desta viagem?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Sim`,
                icon: 'question',
                showCancelButton: false,
                denyButtonText: `Não, cancelar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("<?= base_url('v2/transportes/viagens/cancelar/') ?>" + this.dataset.viagem_id);
                } else if (result.isDenied) {
                    Swal.fire('Alteração não foi realizada.', '', 'info')
                }
            })
        })

    }
</script>