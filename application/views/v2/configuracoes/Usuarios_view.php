<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-user-edit"></i> Usuários
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode configurar os usuários cadastrados no sistema
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <table id="usuarios_conf_datatable" class="table table-striped" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">USUÁRIO</th>
                <th class="text-dark small text-left">TIPO</th>
                <th class="text-dark small text-left">WHATSAPP</th>
                <th class="text-dark small text-left">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $u) { ?>
                    <tr>
                        <td class="small">
                            <?= $u['usuario_nome'] ?>
                        </td>
                        <td class="small">
                            <?= $u['usuario_nivel'] ?>
                        </td>
                        <td class="small">
                            <?= $u['usuario_telefone'] ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group ">

                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item text-warning editar_usuario_button" data-usuario_id="<?= $u['usuario_id'] ?>"><i class="fa fa-edit"></i> Editar usuario</button>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-muted log_atividade_usuario_button" data-usuario_id="<?= $u['usuario_id'] ?>"><i class="fa fa-edit"></i> Log de atividade</button>
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
<?php $this->load->view('v2/components/configuracoes/add_usuario_conf_modal') ?>
<?php $this->load->view('v2/components/configuracoes/editar_usuario_conf_modal') ?>

<script>
    window.onload = function() {

        var editar_usuario_conf_modal = new bootstrap.Modal(document.getElementById('editar_usuario_conf_modal'))

        $('.editar_usuario_button').on('click', function() {
            var usuario_id = this.dataset.usuario_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/api/usuarios/json/') ?>",
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>",
                        usuario_id: usuario_id
                    }
                })
                .done(function(usuario) {
                    $('#editar_usuario_conf_id').val(usuario.usuario_id);
                    $('#editar_usuario_conf_nome').val(usuario.usuario_nome);
                    $('#editar_usuario_conf_email').val(usuario.usuario_email);
                    $('#editar_usuario_conf_telefone').val(usuario.usuario_telefone);
                    $('#editar_usuario_conf_nivel').val(usuario.usuario_nivel);
                });
            editar_usuario_conf_modal.toggle()
        });


        //Add input de filtro às colunas
        $('#usuarios_conf_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });



        $('#usuarios_conf_datatable').DataTable({
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
            }, {
                "bSortable": false
            }, {
                "bSortable": false
            }, {
                "bSortable": false
            }],
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
                    className: 'btn btn-falcon-primary btn-sm rounded-pill font-weight-light m-1',
                    text: '<i class="fas fa-user-plus"></i> Novo usuário',
                    action: function() {
                        $('#add_usuario_conf_modal').modal('show')
                    }
                }

            ]
        });
    }
</script>