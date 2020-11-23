<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>INFOSUS | Dashboard</title>

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
    
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

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
                                <a class="nav-link active" href="<?= base_url('v2/pacientes') ?>">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="fas fa-user-injured"></i></span>
                                        <span class="nav-link-text"> Pacientes</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#regulacao" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="regulacao">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><i class="fas fa-balance-scale"></i></span><span class="nav-link-text"> Regulação</span></div>
                                </a>
                                <ul class="nav collapse" id="regulacao" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><i class="fas fa-link"></i></span><span class="nav-link-text"> Módulo 2</span></div>
                                </a>
                                <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 2</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="settings">
                            <div class="navbar-vertical-divider">
                                <hr class="navbar-vertical-hr my-3" />
                            </div>
                            <a class="btn btn-sm btn-block btn-primary mb-4 font-weight-light" href="#" target="_blank"><i class="fab fa-whatsapp"></i> Suporte técnico</a>
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
                        <div class="d-flex align-items-center"><img class="mr-2" src="<?= base_url() ?>/public/v2/assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
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
                                    <a class="dropdown-item" href="<?= base_url('logout') ?>">Sair</a>
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

                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('v2/inicio') ?>">Página inicial</a></li>
                        <li class="breadcrumb-item"><?= segment(3) ?></li>
                    </ol>
                </nav> -->

                <?= $this->ui->alert_flashdata() ?>