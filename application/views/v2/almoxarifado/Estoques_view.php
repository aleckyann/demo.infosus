<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-boxes"></i> <?= $estoque['estoque_nome'] ?><br>
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode manipular todos os produtos cadastrados neste estoque
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <table id="estoque_datatable" class="table table-striped" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left"></th>
                <th class="text-dark small text-left">PRODUTO</th>
                <th class="text-dark small text-left">LOTE</th>
                <th class="text-dark small text-left">VALIDADE</th>
                <th class="text-dark small text-left">QTD. EM ESTOQUE</th>
                <th class="text-dark small text-left">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($produtos as $p) { ?>
                    <tr>
                        <td class="text-center">
                            <?php if ($p['produto_quantidade_atual'] < $p['produto_quantidade_minima']) : ?>
                                <i class="fas fa-exclamation-circle text-danger" data-toggle="tooltip" title="Produto abaixo do indicado."></i>
                            <?php endif; ?>
                        </td>
                        <td class="small">
                            <?= $p['produto_nome'] ?>
                        </td>
                        <td class="small">
                            <?= $p['produto_lote'] ?>
                        </td>
                        <td class="small">
                            <?php
                                $diff = floor((strtotime($p['produto_validade']) - strtotime(date('Y-m-d'))) / (60 * 60 * 24));
                                if ($diff <= $p['produto_aviso_validade']) {
                                    $aviso = 'class="text-danger font-weight-bold" data-toggle="tooltip" title="Produto está próximo do vencimento!"';
                                } else {
                                    $aviso = '';
                                }
                            ?>
                            <span <?= $aviso ?>>
                                <?= ($p['produto_validade'] != '0000-00-00') ? date_format(date_create($p['produto_validade']), 'd/m/Y') : '' ?>
                            </span>
                        </td>
                        <td class="text-center small">
                            <?= $p['produto_quantidade_atual'] ?>
                        </td>
                        <td class="text-center small">
                            <div class="btn-group">
                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item text-primary repor_produto_estoque_button" data-produto_id="<?= $p['produto_id'] ?>"><i class="fas fa-sign-in-alt"></i> Repor estoque</button>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-danger retirar_produto_estoque_button" data-produto_id="<?= $p['produto_id'] ?>"><i class="fas fa-sign-out-alt"></i> Retirar do estoque</button>
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
<?php $this->load->view('v2/components/almoxarifado/add_produto_estoque_modal') ?>
<?php $this->load->view('v2/components/almoxarifado/repor_produto_estoque_modal') ?>
<?php $this->load->view('v2/components/almoxarifado/retirar_produto_estoque_modal') ?>

<script>
    window.onload = function() {

        let add_estoque_modal = new bootstrap.Modal(document.getElementById('add_produto_estoque_modal'));
        let repor_produto_estoque_modal = new bootstrap.Modal(document.getElementById('repor_produto_estoque_modal'));
        let retirar_produto_estoque_modal = new bootstrap.Modal(document.getElementById('retirar_produto_estoque_modal'));

        $('.repor_produto_estoque_button').on('click', function() {
            let produto_id = this.dataset.produto_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/produtos/json') ?>",
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>",
                        produto_id: produto_id
                    }
                })
                .done(function(estoque) {
                    $('#repor_produto_id').val(produto_id);
                    $('#repor_produto_nome').val(estoque.produto_nome);
                    $('#repor_produto_estoque').val(estoque.estoque_nome);
                    $('#repor_produto_quantidade_atual').val(estoque.produto_quantidade_atual);
                });
            repor_produto_estoque_modal.toggle();
            console.log('%c repor_produto_estoque_modal: OPEN', 'color: white; background-color: blue; border-radius:4px; padding:2px; font-size:12px');
        });

        $('.retirar_produto_estoque_button').on('click', function() {
            let produto_id = this.dataset.produto_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/produtos/json') ?>",
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>",
                        produto_id: produto_id
                    }
                })
                .done(function(estoque) {
                    $('#retirar_produto_id').val(produto_id);
                    $('#retirar_produto_nome').val(estoque.produto_nome);
                    $('#retirar_produto_estoque').val(estoque.estoque_nome);
                    $('#retirar_produto_quantidade_atual').val(estoque.produto_quantidade_atual);
                });
            retirar_produto_estoque_modal.toggle();
            console.log('%c retirar_produto_estoque_modal: OPEN', 'color: white; background-color: red; border-radius:4px; padding:2px; font-size:12px');
        });


        //Add input de filtro às colunas
        $('#estoque_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES' || title == 'QUANTIDADE MÍNIMA') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });



        $('#estoque_datatable').DataTable({
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
                        columns: [1, 2, 3, 4, 5]
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
                    text: '<i class="fas fa-box"></i> Adicionar produto ao estoque',
                    action: function() {
                        $('#add_produto_estoque_modal').modal('show')
                    }

                }

            ]
        });
    }
</script>