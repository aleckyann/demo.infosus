<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INFOSUS | <?= $title ?? '' ?></title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/public/v2/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/public/v2/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/public/v2/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/public/v2/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?= base_url() ?>/public/v2/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/public/v2/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <script src="<?= base_url() ?>/public/v2/assets/js/config.navbar-vertical.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?= base_url() ?>/public/v2/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl" />
    <link href="<?= base_url() ?>/public/v2/assets/css/theme.min.css" rel="stylesheet" id="style-default" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- datatables -->
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            linkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            linkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">

            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>

            <nav class="navbar navbar-light navbar-glass navbar-vertical navbar-expand-xl" style="display: none;">

                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Expandir ou reduzir menu"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div><a class="navbar-brand" href="#">
                        <div class="d-flex align-items-center py-3"><span class="font-sans-serif">Infosus</span></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-home"></span></span><span class="nav-link-text"> Página inicial</span></div>
                                </a>
                            </li>
                        </ul>
                        <div class="navbar-vertical-divider">
                            <hr class="navbar-vertical-hr my-2" />
                        </div>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator <?= (segment(2) == 'pacientes') ? 'active' : '' ?>" href="#pacientesNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pacientesNav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="fas fa-user-injured"></i></span>
                                        <span class="nav-link-text"> Pacientes</span>
                                    </div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'pacientes') ? 'show' : '' ?>" id="pacientesNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link <?= (segment(3) == 'listagem') ? 'active' : '' ?>" href="<?= base_url('v2/pacientes/listagem') ?>"><i class="fas fa-clipboard-list mr-1"></i> Lista</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#add_paciente_modal"><i class=" fas fa-user-plus"></i> Novo paciente</a></li>
                                </ul>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator <?= (segment(2) == 'regulacao') ? 'active' : '' ?>" href="#regulacaoNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="regulacaoNav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <i class="fas fa-balance-scale"></i>
                                        </span>
                                        <span class="nav-link-text"> Regulação</span>
                                    </div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'regulacao') ? 'show' : '' ?>" id="regulacaoNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator <?= (segment(3) == 'tfd') ? 'active collapsed' : '' ?>" href="#TfdNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="TfdNav"><i class="fas fa-file-medical ml-1"></i> Tfd</a>
                                        <ul class="nav collapse <?= (segment(3) == 'tfd') ? 'show' : '' ?>" id="TfdNav" data-parent="#regulacaoNav">
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'fila') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/fila') ?>"><i class="fas fa-sort-amount-down"></i> Fila</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'agendados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/agendados') ?>"><i class="far fa-calendar-alt"></i> Agendados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'realizados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/realizados') ?>"><i class="far fa-calendar-check text-success"></i> Realizados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'negados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/tfd/negados') ?>"><i class="far fa-calendar-times text-danger"></i> Negados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="modal" data-target="#add_tfd_modal"><i class="far fa-calendar-plus"></i> Novo Tfd</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator <?= (segment(3) == 'procedimentos') ? 'active collapsed' : '' ?>" href="#procedimentosNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="procedimentosNav"><i class="fas fa-file-medical ml-1"></i> Procedimentos</a>
                                        <ul class="nav collapse <?= (segment(3) == 'procedimentos') ? 'show' : '' ?>" id="procedimentosNav" data-parent="#regulacaoNav">
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'fila') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/fila') ?>"><i class="fas fa-sort-amount-down"></i> Fila</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'agendados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/agendados') ?>"><i class="far fa-calendar-alt text-warning"></i> Agendados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'realizados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/realizados') ?>"><i class="far fa-calendar-check text-success"></i> Realizados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'negados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/procedimentos/negados') ?>"><i class="far fa-calendar-times text-danger"></i> Negados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="modal" data-target="#add_procedimento_modal"><i class="far fa-calendar-plus"></i> Novo procedimento</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator <?= (segment(3) == 'casa-de-apoio') ? 'active collapsed' : '' ?>" href="#casaDeApoioNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="casaDeApoioNav"><i class="fas fa-house-user"></i> Casa de apoio</a>
                                        <ul class="nav collapse <?= (segment(3) == 'casa-de-apoio') ? 'show' : '' ?>" id="casaDeApoioNav" data-parent="#regulacaoNav">
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'agendados') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/casa-de-apoio/agendados') ?>"><i class="far fa-calendar-alt text-warning"></i> Agendados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?= (segment(4) == 'historico') ? 'active' : '' ?>" href="<?= base_url('v2/regulacao/casa-de-apoio/historico') ?>"><i class="fas fa-history text-success"></i> Histórico de uso</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="modal" data-target="#add_casa_de_apoio_modal"><i class="fas fa-clinic-medical"></i> Novo paciente</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><i class="fas fa-bus"></i></span><span class="nav-link-text"> Transportes</span></div>
                                </a>
                                <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-car-side"></i> Veiculos</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-route"></i> Viagens</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-calendar-plus"></i> Nova viagem</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator <?= (segment(2) == 'atencao-primaria') ? 'active' : '' ?>" href="#atencaoNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="atencaoNav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="fas fa-hand-holding-medical"></i></span>
                                        <span class="nav-link-text"> Atenção primária</span>
                                    </div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'pacientes') ? 'show' : '' ?>" id="atencaoNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link <?= (segment(3) == '') ? 'active' : '' ?>" href="<?= base_url('v2/pacientes/listagem') ?>"><i class="fas fa-clipboard-list mr-1"></i> ...</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#add_paciente_modal"><i class=" fas fa-user-plus"></i> ...</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator <?= (segment(2) == 'almoxarifado') ? 'active' : '' ?>" href="#almoxarifadoNav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="almoxarifadoNav">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="fas fa-cubes"></i></span>
                                        <span class="nav-link-text"> Almoxarifado</span>
                                    </div>
                                </a>
                                <ul class="nav collapse <?= (segment(2) == 'pacientes') ? 'show' : '' ?>" id="almoxarifadoNav" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link <?= (segment(3) == '') ? 'active' : '' ?>" href="<?= base_url('v2/pacientes/listagem') ?>"><i class="fas fa-clipboard-list mr-1"></i> ...</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#add_paciente_modal"><i class=" fas fa-user-plus"></i> ...</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="settings">
                            <div class="navbar-vertical-divider">
                                <hr class="navbar-vertical-hr my-3" />
                            </div>
                            <a class="btn btn-sm btn-block btn-primary mb-4 font-weight-light" href="https://web.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i> Suporte</a>
                        </div>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
            </nav>

            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand mr-1 mr-sm-3" href="#">
                        <div class="d-flex align-items-center"><span class="font-sans-serif">Infosus</span></div>
                    </a>
                    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="<?= base_url() ?>/public/v2/assets/img/team/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white rounded-lg py-2">
                                    <a class="dropdown-item" href="#">Configurações</a>
                                    <a class="dropdown-item text-danger" href="<?= base_url('logout') ?>">Sair</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>

                <script>
                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top');
                    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

                    navbarVertical.removeAttribute('style');
                    navbarTopVertical.removeAttribute('style');
                    navbarTop.remove(navbarTop);
                </script>