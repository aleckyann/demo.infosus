<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INFOSUS | <?= $title ?? '' ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/public/v2/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/public/v2/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/public/v2/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/public/v2/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?= base_url() ?>/public/v2/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/public/v2/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <script src="<?= base_url() ?>/public/v2/assets/js/config.navbar-vertical.js"></script>

    <link href="<?= base_url() ?>/public/v2/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl" />
    <link href="<?= base_url() ?>/public/v2/assets/css/theme.min.css" rel="stylesheet" id="style-default" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .tablePrint {
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
</head>

<body onload="">
    <div class=" mb-3" style="width:21cm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="font-weight-bold">Dados da viagem</h5>
                    <p class="font-weight-light mb-1"><span class="text-dark">Cidade de origem:</span> <?= $viagem['origem'] ?></p>
                    <p class="font-weight-light mb-1"><span class="text-dark">Cidade destino:</span> <?= $viagem['destino'] ?></p>
                    <p class="font-weight-light mb-1"><span class="text-dark">Data da viagem:</span> <?= date_format(date_create($viagem['viagem_data']), 'd/m/Y') ?></p>
                </div>
                <div class="col">
                    <h5 class="font-weight-bold">Informações do veículo</h5>
                    <table class="">
                        <tbody>
                            <tr>
                                <th class="font-weight-light text-dark">Modelo:</th>
                                <td><?= $viagem['veiculo_marca'] ?></td>
                            </tr>
                            <tr>
                                <th class="font-weight-light text-dark">Placa:</th>
                                <td><?= $viagem['veiculo_placa'] ?></td>
                            </tr>
                            <tr>
                                <th class="font-weight-light text-dark">Ano:</th>
                                <td><?= $viagem['veiculo_ano'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="table-responsive mt-4 fs--1">
                <table class="table table-striped table-bordered border-default tablePrint">
                    <thead>
                        <tr class="bg-default text-dark h6">
                            <th class="text-left" style="width: 30%">Passageiro</th>
                            <th class="text-right" style="width: 25%">Ponto de partida</th>
                            <th class="text-right" style="width: 15%">Horário de partida</th>
                            <th class="text-right" style="width: 15%">Horário de chegada</th>
                            <th class="text-right" style="width: 15%">Horário do procedim.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($passageiros as $p) : ?>
                            <tr>
                                <td class="align-middle text-left"><?= $p['nome_paciente'] ?> <?= $p['telefone_paciente'] ?></td>
                                <td class=" align-middle text-right"><?= $p['passageiro_local'] ?></td>
                                <td class="align-middle text-right"><?= $p['passageiro_horario'] ?></td>
                                <td class="align-middle text-right"><?= $p['passageiro_ponto_chegada'] ?></td>
                                <td class="align-middle text-right"><?= $p['passageiro_horario_procedimento'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card-footer bg-light">
            <p class="text-center"><strong>Este documento foi gerado na data de </strong> <u><?= date('d/m/Y H:i:s') ?></u> <strong>em</strong> <u><?= base_url() ?></u></p>
        </div>
    </div>


    <footer>
        <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Tecnologia desenvolvida pela INFOSUS.</p>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v2.0.0 alpha</p>
            </div>
        </div>
    </footer>


    <script src="<?= base_url() ?>/public/v2/vendors/popper/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/anchorjs/anchor.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/is/is.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/list.js/list.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/assets/js/theme.js"></script>

</body>


</html>