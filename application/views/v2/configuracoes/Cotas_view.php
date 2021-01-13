<div class="d-flex mb-2">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-2.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i>
            </a>
            <h3 class="font-weight-light">

                <i class="fas fa-user-edit"></i> Cotas
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h3>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode configurar as cotas cadastradas no sistema
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <table id="especialidades_conf_datatable" class="table table-striped" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">ESPECIALIDADE</th>
            </thead>
            <tbody>
                <?php foreach ($cotas as $c) { ?>
                    <tr>
                        <td class="small">
                            <?= $c['especialidade_nome'] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<!-- CARREGAR COMPONENTES -->
<?php $this->load->view('v2/components/add_especialidade_conf_modal') ?>

<script>
    window.onload = function() {


        $('.editar_paciente_button').on('click', function() {
            var paciente_id = this.dataset.id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('v2/pacientes/jsonOne/') ?>",
                    data: {
                        <?= $csrf_name ?>: "<?= $csrf_value ?>",
                        paciente_id: paciente_id
                    }
                })
                .done(function(paciente) {
                    $('#paciente_id').val(paciente.paciente_id);
                    $('#acs').val(paciente.acs);
                    $('#bairro_paciente').val(paciente.bairro_paciente);
                    $('#cep').val(paciente.cep);
                    $('#cns_paciente').val(paciente.cns_paciente);
                    $('#cpf').val(paciente.cpf);
                    $('#endereco_paciente').val(paciente.endereco_paciente);
                    $('#identidade').val(paciente.identidade);
                    $('#nascimento').val(paciente.nascimento);
                    $('#nome_paciente').val(paciente.nome_paciente);
                    $('#profissao').val(paciente.profissao);
                    $('#responsavel').val(paciente.responsavel);
                    $('#telefone_paciente').val(paciente.telefone_paciente);
                });
            editar_paciente_modal.toggle()
        });


        //Add input de filtro às colunas
        $('#especialidades_conf_datatable thead th').each(function() {
            let title = $(this).text();
            if (title == '' || title == 'OPÇÕES') {

            } else {
                $(this).html(`
                    <span class="text-dark font-weight-bold">${title}</span>
                    <input type="text" class="form-control form-control-sm pl-1" placeholder="🔎 Filtrar ${title.toLocaleLowerCase()}">
                `);

            }
        });



        $('#especialidades_conf_datatable').DataTable({
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
            }],
            dom: 'Brtip',
            buttons: [{
                    className: 'btn btn-falcon-default btn-sm rounded-pill font-weight-light m-1',
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> imprimir',
                    exportOptions: {
                        columns: [0]
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
                    text: '<i class="fas fa-user-edit"></i> Nova especialidade',
                    action: function() {
                        $('#add_especialidade_conf_modal').modal('show')
                    }

                }

            ]
        });
    }
</script>