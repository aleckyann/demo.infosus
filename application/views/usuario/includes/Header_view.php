<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SECRETARIA MUNICIPAL DE SAÚDE</title>
    <meta name="description" content="Siga Assessoria">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>public/images/favicon.ico">

    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel d-print-none">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button><br>
                <a class="navbar-brnd hidden-xs" href="<?= base_url() ?>usuario/dashboard"><img src="<?= base_url() ?>public/images/logoinfo.png" alt="Logo" width="150"></a><br>

            </div><br>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url() ?>usuario/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h2 class="menu-title">REGULAÇÃO</h2><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>PROCED DIVERSOS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="<?= base_url() ?>usuario/cadastros/cadastrar-paciente">CADASTRAR PACIENTE</a></li>
                            <li><a href="<?= base_url() ?>usuario/regulacao/fila">GERENCIAR FILA</a></li>
                            <li><a href="<?= base_url() ?>usuario/regulacao/lista-pacientes">LISTAR PACIENTES</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>TFD</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="<?= base_url() ?>usuario/cadastros/cadastrar-paciente">CADASTRAR PACIENTE</a></li>
                            <li><a href="<?= base_url() ?>usuario/regulacao/fila-tfd">GERENCIAR FILA</a></li>
                            <li><a href="<?= base_url() ?>usuario/regulacao/lista-pacientes">LISTAR PACIENTES</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="<?= base_url() ?>usuario/atencao-primaria" class="dropdown-" data-toggle="" aria-haspopup="true" aria-expanded=""> <i class="menu-icon fa fa-laptop"></i>ATENÇÃO PRIMÁRIA</a>

                    </li>

                    <h2 class="menu-title">RELATÓRIOS - REGULAÇÃO</h2><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>PROCED DIVERSOS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="<?= base_url() ?>usuario/regulacao/agendados">PROCED. REALIZADOS</a></li>
                            <li><a href="<?= base_url() ?>usuario/regulacao/lista-demanda-reprimida">DEMANDA REPRIMIDA</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>TFD</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="<?= base_url() ?>usuario/regulacao/agendados-tfd">PROCED. REALIZADOS</a></li>
                            <li><a href="<?= base_url() ?>usuario/regulacao/lista-demanda-reprimida-tfd">DEMANDA REPRIMIDA</a></li>

                        </ul>
                    </li>


            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header d-print-none">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="dropdown for-notification">
                            <?php $this->ui->alert_flashdata() ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url() ?>public/images/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Meus dados</a>
                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Configurar</a>
                            <a class="nav-link" href="<?= base_url('logout') ?>"><i class="fa fa-power-off"></i> Sair</a>
                        </div>
                    </div>

                </div>
            </div>

        </header>