<div class="d-flex my-3">
    <div class="card overflow-hidden flex-1">
        <div class="bg-holder bg-card" style="background-image:url(<?= base_url('public/v2/assets/img/illustrations/corner-1.png') ?>);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <a class="float-right btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-question-circle"></i> <span class="font-weight-light">Ajuda</span>
            </a>
            <h4 class="font-weight-light">

                <i class="fas fa-route text-warning"></i> Viagens agendadas
                <!-- <span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span> -->
            </h4>
            <div class="collapse" id="collapseExample">
                <div class="p-card">
                    <p class="mb-2">
                        Nesta página você pode visualizar todas as viagens agendadas e configurar os passageiros desta viagem clicando no menu <span class="text-primary">azul</span>
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
                                        <a class="dropdown-item text-default" href="<?= base_url('v2/transportes/viagem/print/' . $v['viagem_id']) ?>" target="_new"><i class="fa fa-print"></i> Imprimir</a>
                                        <button class="dropdown-item passageiros_viagem_button text-primary" data-viagem_id="<?= $v['viagem_id'] ?>"><i class="fa fa-users"></i> Passageiros</button>
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
<?php $this->load->view('v2/components/transportes/editar_viagem_modal') ?>
<?php $this->load->view('v2/components/transportes/passageiros_viagem_modal') ?>


<script>
    function clear_passageiro(id) {
        $('#paciente_viagem_select2_' + id).empty().append('<option value="NENHUM" selected>Nenhum passageiro selecionado</option>');
        $('#paciente_viagem_local_input_' + id).val('');
        $('#paciente_viagem_horario_partida_input_' + id).val('');
        $('#paciente_viagem_ponto_chegada_input_' + id).val('');
        $('#paciente_viagem_horario_procedimento_input_' + id).val('');
        Swal.fire('Passageiro removido!', '', 'success');
    }

    window.onload = function() {

        // SET LOADING BUTTONS
        $('#editar_viagem_form').on('submit', function() {
            $('#editar_viagem_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
        });
        $('#passageiros_viagem_form').on('submit', function() {
            $('#passageiros_viagem_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
        });

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
                    className: 'btn btn-falcon-primary btn-sm rounded-pill font-weight-light m-1',
                    text: '<i class="fas fa-route"></i> Nova viagem',
                    action: function() {
                        $('#add_viagem_modal').modal('show')
                    }
                }
            ]
        });

        //Cria modal para editar passageiros
        var passageiros_viagem_modal = new bootstrap.Modal(document.getElementById('passageiros_viagem_modal'));

        // ABRE MODAL DE EDITAR PASSAGEIROS
        $('.passageiros_viagem_button').on('click', function() {
            $('#passageiros_viagem_content').empty(); //LIMPA MODAL ANTES DE RECARREGAR
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
                    //CRIA DADOS DA VIAGEM
                    $('#passageiros_viagem_content').append(`
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Veículo</label>
                            <input disabled value="${passageiros.veiculo_marca}" class="form-control col-6"> 
                        </div>
                        <div class="col-lg-6">
                            <label>Data da viagem</label>
                            <input disabled value="${passageiros.viagem_data}" type="date" class="form-control col-6"> 
                        </div>
                    </div>
                    <hr>
                    `)
                    //CRIA 1 INPUT PARA CADA PASSAGEIRO POSSÍVEL
                    //ADICIONA VALOR DO PASSAGEIRO SE ELE JÁ EXISTE
                    for (let index = 0; index < passageiros.passageiros.length; index++) {
                        $('#passageiros_viagem_content').append(`
                        <hr>
                        <div class="row mt-3">
                            <div class="col-lg-8 mb-1">
                                <span class="badge bg-primary"><span class="fa fa-user"></span> Vaga ${index+1} </span>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" type="button" onclick="clear_passageiro(${index})" class="small text-danger float-right"><i class="fas fa-user-times"></i> Limpar vaga</a>
                            </div>
                            <div class="col-lg-12">
                                <label class="text-dark">Nome do Passageiro</label>
                                <select style="width:100%" id="paciente_viagem_select2_${index}" class="load_pacientes_viagem_select2" name="passageiro[${passageiros.passageiros[index].passageiro_id}][passageiro_paciente_id]">
                                    ${passageiros.passageiros[index].nome_paciente ? 
                                    `<option selected value="${passageiros.passageiros[index].passageiro_paciente_id}"> ${passageiros.passageiros[index].nome_paciente}</option>`
                                    : '<option value=NENHUM selected>Nenhum passageiro selecionado</option>'}
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="text-dark">Ponto de partida</label>
                                <input type="text" id="paciente_viagem_local_input_${index}" value="${passageiros.passageiros[index].passageiro_local}" name="passageiro[${passageiros.passageiros[index].passageiro_id}][passageiro_local]" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label class="text-dark">Horário de partida</label>
                                <input type="time" id="paciente_viagem_horario_partida_input_${index}" value="${passageiros.passageiros[index].passageiro_horario}" name="passageiro[${passageiros.passageiros[index].passageiro_id}][passageiro_horario]" class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label class="text-dark">Ponto de chegada</label>
                                <input type="text" id="paciente_viagem_ponto_chegada_input_${index}" value="${passageiros.passageiros[index].passageiro_ponto_chegada}" name="passageiro[${passageiros.passageiros[index].passageiro_id}][passageiro_ponto_chegada]" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label class="text-dark">Horário do procedimento</label>
                                <input type="time" id="paciente_viagem_horario_procedimento_input_${index}" value="${passageiros.passageiros[index].passageiro_horario_procedimento}" name="passageiro[${passageiros.passageiros[index].passageiro_id}][passageiro_horario_procedimento]" class="form-control">
                            </div>
                        </div>
                        `)
                    }

                    //SETA O ID DA VIAGEM
                    $('#passageiros_viagem_id').val(passageiros.viagem_id);

                    //LOAD PACIENTES COM SELECT2
                    $('.load_pacientes_viagem_select2').select2({
                        ajax: {
                            url: '<?= base_url('v2/pacientes/json/select2') ?>',
                            method: 'POST',
                            data: function(params) {
                                var query = {
                                    nome_paciente: params.term,
                                    <?= $csrf_name ?>: '<?= $csrf_value ?>'
                                }
                                return query;
                            },
                            processResults: function(data, params) {
                                return {
                                    results: data
                                }
                            },
                            dataType: 'json',
                            placeholder: "Selecione um paciente",
                        },
                        delay: 250,
                        minimumInputLength: 1,
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
                title: 'Tem certeza que deseja cancelar esta viagem?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Sim`,
                icon: 'question',
                showCancelButton: false,
                denyButtonText: `Não`,
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