<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-car-side"></i> Veículos
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar todos os veículos cadastrados para viagens.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <table id="veiculos_datatable" class="table table-striped" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">MARCA</th>
                <th class="text-dark small text-left">TIPO</th>
                <th class="text-dark small text-left">LUGARES</th>
                <th class="text-dark small text-left">PLACA</th>
                <th class="text-dark small text-center align-middle">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($veiculos as $v) { ?>
                    <tr>
                        <td class="small">
                            <?= $v['veiculo_marca'] ?>
                        </td>
                        <td class="small">
                            <?= $v['veiculo_tipo'] ?>
                        </td>
                        <td class="small">
                            <?= $v['veiculo_vagas'] ?>
                        </td>
                        <td class="small">
                            <?= $v['veiculo_placa'] ?>
                        </td>
                        <td class="text-center p-1">
                            <!-- Example single danger button -->

                            <div class="btn-group ">

                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fa fa-database"></i> Históricos</a>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-warning editar_veiculo_button" data-id="<?= $v['veiculo_id'] ?>"><i class="fa fa-edit"></i> Editar veículo</button>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<!-- CARREGAR COMPONENTES -->
<?php $this->load->view('v2/components/add_veiculo_modal') ?>
<?php $this->load->view('v2/components/editar_veiculo_modal') ?>

<script>
    window.onload = function() {

        //Cria modal para editar paciente
        let editar_veiculo_modal = new bootstrap.Modal(document.getElementById('editar_veiculo_modal'))


        $('.editar_veiculo_button').on('click', function() {
            let veiculo_id = this.dataset.id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/veiculos/json') ?>",
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>",
                        veiculo_id: veiculo_id
                    }
                })
                .done(function(veiculo) {
                    $('#veiculo_id').val(veiculo.veiculo_id);
                    $('#veiculo_marca').val(veiculo.veiculo_marca);
                    $('#veiculo_ano').val(veiculo.veiculo_ano);
                    $('#veiculo_tipo').val(veiculo.veiculo_tipo);
                    $('#veiculo_placa').val(veiculo.veiculo_placa);
                    $('#veiculo_vagas').val(veiculo.veiculo_vagas);
                });
            editar_veiculo_modal.toggle()
        });


        //Add input de filtro às colunas
        $('#veiculos_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });



        $('#veiculos_datatable').DataTable({
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
                    text: '<i class="fas fa-car-side"></i> Novo veículo',
                    action: function() {
                        $('#add_veiculo_modal').modal('show')
                    }

                }

            ]
        });
    }
</script>