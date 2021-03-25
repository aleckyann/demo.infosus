<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INFOSUS | <?= $title ?? '' ?></title>

    <!-- Favicons-->
    <meta name="author" content="Aleck Yann Mattos" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>/public/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>/public/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>/public/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/public/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>/public/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>/public/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>/public/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>/public/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/public/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/public/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>/public/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/public/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>/public/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/public/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- Stylesheets-->
    <script src="<?= base_url() ?>/public/v2/assets/js/config.navbar-vertical.js"></script>
    <link href="<?= base_url() ?>/public/v2/assets/css/theme.min.css" rel="stylesheet" id="style-default" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- datatables -->
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <!-- ESTILOS DE NAVBAR TRANSPARENT, INVERTED, VIBRANT E CARD -->
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl navbar-card d-print-none" >
                <div class="d-flex align-items-center py-2">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Expandir ou reduzir menu"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div>
                    <a class="navbar-brand" href="#">
                        <div class="d-flex align-items-center py-2"><span class="font-sans-serif" style="font-size:0.8em">INFOSUS</span></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <span class="badge p-2 my-2 bg-dark nav-link-text"><i class="fas fa-sitemap"></i> MÓDULOS</span>

                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link font-weight-light <?= (segment(2) == 'inicio') ? 'active' : '' ?>" href="<?= base_url('v2/inicio') ?>">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="fas fa-house-user"></i></span><span class="nav-link-text font-weight-light"> Início</span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator <?= (segment(2) == 'pacientes') ? 'active' : '' ?>" href="#pacientesNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pacientesNav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="fas fa-user-injured"></i></span>
                                        <span class="nav-link-text font-weight-light"> Pacientes</span>
                                    </div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'pacientes') ? 'show' : '' ?>" id="pacientesNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('v2/pacientes/dashboard') ?>"><i class="fas fa-chart-line mr-1"></i> Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'listagem') ? 'active' : '' ?>" href="<?= base_url('v2/pacientes/listagem') ?>"><i class="fas fa-clipboard-list mr-1"></i> Listagem</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light" href="#" data-toggle="modal" data-target="#add_paciente_modal"><i class=" fas fa-user-plus"></i> Novo paciente</a></li>
                                </ul>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator <?= (segment(2) == 'regulacao') ? 'active' : '' ?>" href="#regulacaoNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="regulacaoNav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <i class="fas fa-balance-scale"></i>
                                        </span>
                                        <span class="nav-link-text font-weight-light"> Regulação</span>
                                    </div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'regulacao') ? 'show' : '' ?>" id="regulacaoNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator font-weight-light <?= (segment(3) == 'tfd') ? 'active collapsed' : '' ?>" href="#TfdNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="TfdNav"><i class="fas fa-laptop-medical"></i> Tfd</a>
                                        <ul class="nav collapse <?= (segment(3) == 'tfd') ? 'show' : '' ?>" id="TfdNav" data-parent="#regulacaoNav">
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/dashboard') ?>"><i class="fas fa-chart-line mr-1"></i> Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'fila') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/fila') ?>"><i class="fas fa-sort-amount-down"></i> Fila</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'agendados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/agendados') ?>"><i class="far fa-calendar-alt text-warning"></i> Agendados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'realizados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/realizados') ?>"><i class="far fa-calendar-check text-success"></i> Realizados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'negados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/negados') ?>"><i class="far fa-calendar-times text-danger"></i> Negados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light" href="#" data-toggle="modal" data-target="#add_tfd_modal"><i class="far fa-calendar-plus"></i> Novo Tfd</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator font-weight-light <?= (segment(3) == 'procedimentos') ? 'active collapsed' : '' ?>" href="#procedimentosNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="procedimentosNav"><i class="fas fa-diagnoses"></i> Procedimentos</a>
                                        <ul class="nav collapse <?= (segment(3) == 'procedimentos') ? 'show' : '' ?>" id="procedimentosNav" data-parent="#regulacaoNav">
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/dashboard') ?>"><i class="fas fa-chart-line mr-1"></i> Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'fila') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/fila') ?>"><i class="fas fa-sort-amount-down"></i> Fila</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'agendados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/agendados') ?>"><i class="far fa-calendar-alt text-warning"></i> Agendados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'realizados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/realizados') ?>"><i class="far fa-calendar-check text-success"></i> Realizados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'negados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/negados') ?>"><i class="far fa-calendar-times text-danger"></i> Negados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light" href="#" data-toggle="modal" data-target="#add_procedimento_modal"><i class="far fa-calendar-plus"></i> Novo procedimento</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator font-weight-light <?= (segment(3) == 'casa-de-apoio') ? 'active collapsed' : '' ?>" href="#casaDeApoioNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="casaDeApoioNav"><i class="fas fa-house-user"></i> Casa de apoio</a>
                                        <ul class="nav collapse <?= (segment(3) == 'casa-de-apoio') ? 'show' : '' ?>" id="casaDeApoioNav" data-parent="#regulacaoNav">
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/casa-de-apoio/dashboard') ?>"><i class="fas fa-chart-line mr-1"></i> Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'agendados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/casa-de-apoio/agendados') ?>"><i class="far fa-calendar-alt text-warning"></i> Agendados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == 'historico') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/casa-de-apoio/historico') ?>"><i class="fas fa-history text-success"></i> Histórico de uso</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light" href="#" data-toggle="modal" data-target="#add_casa_de_apoio_modal"><i class="fas fa-clinic-medical"></i> Novo paciente</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator <?= (segment(2) == 'transportes') ? 'active collapsed' : '' ?>" href="#veiculosNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="veiculosNav">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><i class="fas fa-bus"></i></span><span class="nav-link-text font-weight-light"> Transportes</span></div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'transportes') ? 'show' : '' ?>" id="veiculosNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-light <?= (segment(4) == 'transportes') ? 'active' : '' ?>" href="<?= base_url('v2/transportes/dashboard') ?>"><i class="fas fa-chart-line mr-1"></i> Dashboard</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'veiculos') ? 'active' : '' ?>" href="<?= base_url('v2/transportes/veiculos') ?>"><i class="fas fa-car-side"></i> Veiculos</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'viagens-agendadas') ? 'active' : '' ?>" href="<?= base_url('v2/transportes/viagens-agendadas') ?>"><i class="fas fa-route text-warning"></i> Viagens agendadas</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'viagens-realizadas') ? 'active' : '' ?>" href="<?= base_url('v2/transportes/viagens-realizadas') ?>"><i class="fas fa-route text-success"></i> Viagens realizadas</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'viagens-canceladas') ? 'active' : '' ?>" href="<?= base_url('v2/transportes/viagens-canceladas') ?>"><i class="fas fa-route text-danger"></i> Viagens canceladas</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light" href="#" data-toggle="modal" data-target="#add_viagem_modal"><i class="fas fa-calendar-plus"></i> Nova viagem</a></li>
                                </ul>
                            </li>
                            <!-- antenção -->
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator <?= (segment(2) == 'atencao-primaria') ? 'active' : '' ?>" href="#atencao_primaria_nav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="atencao_primaria_nav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <i class="fas fa-hand-holding-medical"></i>
                                        </span>
                                        <span class="nav-link-text font-weight-light"> Atenção primária</span>
                                    </div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'atencao-primaria') ? 'show' : '' ?>" id="atencao_primaria_nav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator <?= (segment(3) == 'brasil-previne') ? 'active collapsed' : '' ?>" href="#previne_brasil_nav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="previne_brasil_nav"><i class="fas fa-globe-americas"></i> Previne Brasil</a>
                                        <ul class="nav collapse <?= (segment(3) == 'brasil-previne') ? 'show' : '' ?>" id="previne_brasil_nav" data-parent="#atencao_primaria_nav">
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == '1') ? 'active' : '' ?>" href="#"><i class="fas fa-thermometer"></i> Indicador 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == '2') ? 'active' : '' ?>" href="#"><i class="fas fa-thermometer"></i> Indicador 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == '3') ? 'active' : '' ?>" href="#"><i class="fas fa-thermometer"></i> Indicador 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == '4') ? 'active' : '' ?>" href="#"><i class="fas fa-thermometer"></i> Indicador 4</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == '5') ? 'active' : '' ?>" href="#"><i class="fas fa-thermometer"></i> Indicador 5</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == '6') ? 'active' : '' ?>" href="#"><i class="fas fa-thermometer"></i> Indicador 6</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light <?= (segment(4) == '7') ? 'active' : '' ?>" href="#"><i class="fas fa-thermometer"></i> Indicador 7</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- antenção -->
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#almoxarifadoNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="almoxarifadoNav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="fas fa-people-carry"></i></span>
                                        <span class="nav-link-text font-weight-light"> Almoxarifado</span>
                                    </div>
                                </a>
                                <ul class="nav collapse" id="almoxarifadoNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-light <?= (segment(4) == 'dashboard') ? 'active' : '' ?>" href="<?= base_url('v2/almoxarifado/dashboard') ?>"><i class="fas fa-chart-line mr-1"></i> Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator font-weight-light <?= (segment(3) == 'estoques') ? 'active collapsed' : '' ?>" href="#estoquesNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="previne_brasil_nav"><i class="fas fa-boxes"></i> Estoques</a>
                                        <ul class="nav collapse <?= (segment(3) == 'estoques') ? 'show' : '' ?>" id="estoquesNav" data-parent="#estoquesNav">
                                            <?php foreach ($this->Estoques->getAll() as $e) : ?>
                                                <li class="nav-item">
                                                    <a class="nav-link font-weight-light <?= (segment(4) == $e['estoque_id']) ? 'active' : '' ?>" href="<?= base_url('v2/almoxarifado/estoque/' . $e['estoque_id']) ?>"><i class="fas fa-box"></i> <?= $e['estoque_nome'] ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-light" href="#" data-toggle="modal" data-target="#add_estoque_modal"><i class="fas fa-cart-plus"></i> Novo estoque</a>
                                            </li>
                                        </ul>
                                        <a class="nav-link font-weight-light <?= (segment(3) == 'historico') ? 'active collapsed' : '' ?>" href="<?= base_url('v2/almoxarifado/historico') ?>"><i class="fas fa-history mr-1"></i> Histórico</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-vertical-divider">
                            <hr class="navbar-vertical-hr my-2" />
                        </div>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator text-muted <?= (segment(2) == 'configuracoes') ? 'active' : '' ?>" href="#configuracoesNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="configuracoesNav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="fas fa-sliders-h"></i></span>
                                        <span class="nav-link-text font-weight-light"> Configurações</span>
                                    </div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'configuracoes') ? 'show' : '' ?>" id="configuracoesNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'estabelecimentos') ? 'active' : '' ?>" href="<?= base_url('v2/configuracoes/estabelecimentos') ?>"><i class="fas fa-hospital-alt"></i> Estabelecimentos</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'procedimentos') ? 'active' : '' ?>" href="<?= base_url('v2/configuracoes/procedimentos') ?>"><i class="fas fa-procedures"></i> Procedimentos</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'especialidades') ? 'active' : '' ?>" href="<?= base_url('v2/configuracoes/especialidades') ?>"><i class="fas fa-hospital-user"></i> Especialidades</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'profissionais') ? 'active' : '' ?>" href="<?= base_url('v2/configuracoes/profissionais') ?>"><i class="fas fa-user-md mr-1"></i> Profissionais</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'municipios') ? 'active' : '' ?>" href="<?= base_url('v2/configuracoes/municipios') ?>"><i class="fas fa-globe-americas mr-1"></i> Municipios</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'usuarios') ? 'active' : '' ?>" href="<?= base_url('v2/configuracoes/usuarios') ?>"><i class="fas fa-users"></i> Usuários</a></li>
                                    <li class="nav-item"><a class="nav-link font-weight-light <?= (segment(3) == 'cotas') ? 'active' : '' ?>" href="<?= base_url('v2/configuracoes/cotas') ?>"><i class="fas fa-ticket-alt"></i> Cotas / Convênios</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" ></nav>

            <div class="content pt-2">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand d-print-none" >
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand mr-1 mr-sm-3" href="#">
                        <div class="d-flex align-items-center"><span class="font-sans-serif">INFOSUS</span></div>
                    </a>
                    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                        <li class="nav-item dropdown">
                            <a href="https://wa.me/5538999892125" target="_new" class="btn btn-sm btn-success mr-2" data-toggle="tooltip" title="Suporte técnico"> <i class="fab fa-whatsapp"></i></a>
                            <a href="<?= base_url('logout') ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Sair do sistema"> <i class="fas fa-times-circle"></i></a>
                        </li>
                    </ul>
                </nav>

                <script>
                    var navbarTop = document.querySelector('[data-layout] .navbar-top');
                    navbarTop.remove(navbarTop);
                </script>