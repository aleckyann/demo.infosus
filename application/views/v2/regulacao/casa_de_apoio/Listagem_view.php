<div class="d-flex mb-2">
    <span class="fa-stack mr-2 ml-n1">
        <i class="fas fa-circle fa-stack-2x text-300"></i>
        <i class="fas fa-clinic-medical fa-inverse fa-stack-1x text-primary"></i>
    </span>
    <div class="flex-1 mt-1">
        <h5 class="mb-0 text-primary position-relative">
            <span class="bg-200 pr-3">Casa de apoio</span>
            <span class="border position-absolute top-50 translate-middle-y w-100 left-0 z-index--1"></span>
        </h5>
        <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-question-circle"></i>
        </a>
    </div>
</div>


<div class="collapse mb-3" id="collapseExample">
    <div class="border p-card rounded">Nesta página você pode visualizar todos os pacientes, adicionar pacientes, ir para históricos e agendar novos procedimentos.</div>
</div>


<div class="card mb-3">
    <?= $this->ui->alert_flashdata() ?>

    <div class="card-body">
        <table id="casaDeApoioTable" class="table table-striped">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">CPF</th>
                <th class="text-dark small text-center align-middle">OPÇÕES</th>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $p) { ?>
                    <tr>
                        <td class="small">
                            <?= $p['nome_paciente'] ?>
                        </td>
                        <td class="small"><?= $p['cpf'] ?></td>


                        <td class="text-center p-1">
                            <!-- Example single danger button -->

                            <div class="btn-group ">

                                <div class="btn-group mb-2">
                                    <button class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fa fa-database"></i> Históricos</a>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item text-warning editarPacienteButton" data-id="<?= $p['paciente_id'] ?>"><i class="fa fa-edit"></i> Editar paciente</button>
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



<script>
    window.onload = function() {

        //Cria modal para editar paciente
        // var editarPacienteModal = new bootstrap.Modal(document.getElementById('editarPacienteModal'), {
        //     keyboard: false
        // })


        // $('.editarPacienteButton').on('click', function() {
        //     var paciente_id = this.dataset.id;
        //     $.ajax({
        //             method: "POST",
        //             url: "<?= base_url('v2/pacientes/json/') ?>" + paciente_id,
        //             data: {
        //                 <?= $csrf_name ?>: "<?= $csrf_value ?>"
        //             }
        //         })
        //         .done(function(paciente) {
        //             $('#paciente_id').val(paciente.paciente_id);
        //             $('#acs').val(paciente.acs);
        //             $('#bairro_paciente').val(paciente.bairro_paciente);
        //             $('#cep').val(paciente.cep);
        //             $('#cns_paciente').val(paciente.cns_paciente);
        //             $('#cpf').val(paciente.cpf);
        //             $('#endereco_paciente').val(paciente.endereco_paciente);
        //             $('#identidade').val(paciente.identidade);
        //             $('#nascimento').val(paciente.nascimento);
        //             $('#nome_paciente').val(paciente.nome_paciente);
        //             $('#profissao').val(paciente.profissao);
        //             $('#responsavel').val(paciente.responsavel);
        //             $('#telefone_paciente').val(paciente.telefone_paciente);

        //         });
        //     editarPacienteModal.toggle()
        // });


        //Add input de filtro às colunas
        $('#casaDeApoioTable thead th').each(function() {
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



        $('#casaDeApoioTable').DataTable({
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
                    text: '<i class="fas fa-house-user"></i> Novo paciente',
                    action: function() {
                        $('#novoCasaDeApoio').modal('show')
                    }

                }

            ]
        });
    }
</script>