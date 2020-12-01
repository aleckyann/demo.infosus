<div class="d-flex mb-2">
    <span class="fa-stack mr-2 ml-n1">
        <i class="fas fa-circle fa-stack-2x text-300"></i>
        <i class="fas fa-calendar-times fa-inverse fa-stack-1x text-primary"></i>
    </span>
    <div class="flex-1 mt-1">
        <h5 class="mb-0 text-primary position-relative">
            <span class="bg-200 pr-3">Procedimentos reprimidos</span>
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

        <table id="procedimentosReprimidos_datatable" class="table table-striped table-hover" style="min-height: 200px;">
            <thead>
                <th class="text-dark small text-left">PACIENTE</th>
                <th class="text-dark small text-left">CPF</th>
                <th class="text-dark small text-left">PROCEDIMENTO</th>
                <th class="text-dark small text-left">DATA</th>
                <th class="text-dark small text-left">TELEFONE</th>
            </thead>
            <tbody>
                <?php foreach ($procedimentos as $p) : ?>
                    <tr>
                        <td class="small">
                            <?= $p['nome_paciente'] ?>
                        </td>
                        <td class="small">
                            <?= $p['cpf'] ?>
                        </td>
                        <td class="small">
                            <?= $p['nome_procedimento'] ?>
                        </td>
                        <td class="small">

                            <?= date_format(date_create($p['data_solicitacao']), 'd/m/Y') ?>
                        </td>
                        <td class="small">
                            <?= $p['telefone_paciente'] ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>



<script>
    window.onload = function() {

        //Cria modal para editar paciente
        // var editarRegistrosCasaDeApoioModel = new bootstrap.Modal(document.getElementById('editarRegistrosCasaDeApoioModel'), {
        //     keyboard: false
        // })


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
                        columns: [0, 1, 2, 3, 4, 5]
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



        //CONFIRMAR REMOÇÃO DO PACIENTE 
        $('.removerProcedimento_button').on('click', function() {
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
                    window.location.replace("<?= base_url('v2/regulacao/casa-de-apoio/update-status/') ?>" + this.dataset.procedimento_id);
                } else if (result.isDenied) {
                    Swal.fire('Alteração não foi realizada.', '', 'info')
                }
            })
        })
    }
</script>