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

            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
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
                                <a class="nav-link active" href="#">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-home"></span></span><span class="nav-link-text"> Página inicial</span></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="home">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><i class="fas fa-box-open"></i></span></span><span class="nav-link-text"> Módulos</span></div>
                                </a>
                                <ul class="nav collapse" id="home" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="#">Regulação</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atenção primária</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Transporte</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Almoxarifado</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-vertical-divider">
                            <hr class="navbar-vertical-hr my-2" />
                        </div>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><i class="fas fa-link"></i></span><span class="nav-link-text"> Atalhos</span></div>
                                </a>
                                <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 3</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 4</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 5</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 6</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Atalho 7</a></li>
                                    
                                </ul>
                            </li>


                            <div class="settings">
                                <div class="navbar-vertical-divider">
                                    <hr class="navbar-vertical-hr my-3" />
                                </div>
                                <a class="btn btn-sm btn-block btn-primary mb-4" href="#" target="_blank">Suporte via whatsapp</a>
                            </div>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand mr-1 mr-sm-3" href="#">
                    <div class="d-flex align-items-center"><img class="mr-2" src="<?= base_url() ?>/public/v2/assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
                </a>
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                                <div class="bg-white rounded-lg py-2"><a class="dropdown-item" href="#">Dashboard</a><a class="dropdown-item" href="../home/dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="../home/feed.html">Feed</a><a class="dropdown-item" href="../home/landing.html">Landing </a></div>
                            </div>
                        </li>

                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownDocumentation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownDocumentation">
                                <div class="bg-white rounded-lg py-2"><a class="dropdown-item" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item" href="../documentation/file-structure.html">File structure</a><a class="dropdown-item" href="../documentation/customization.html">Customization</a><a class="dropdown-item" href="../documentation/dark-mode.html">Dark mode</a><a class="dropdown-item" href="../documentation/fluid-layout.html">Fluid layout</a><a class="dropdown-item" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item" href="../documentation/RTL.html">RTL</a><a class="dropdown-item" href="../documentation/plugins.html">Plugins</a><a class="dropdown-item" href="../documentation/design-file.html">Design file</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownComponents" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownComponents">
                                <div class="card shadow-none navbar-card-components">
                                    <div class="card-body scrollbar max-h-dropdown">
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/avatar.html">Avatar</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/background.html">Background</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/breadcrumb.html">Breadcrumb</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/bulk-select.html">Bulk select</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/carousel.html">Carousel</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../components/close-button.html">Close button</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/cookie-notice.html">Cookie notice<span class="badge rounded-pill ml-2 fs--2 badge-soft-success">New</span></a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/fancyscroll.html">Fancyscroll</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/fancytab.html">Fancytab</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/figures.html">Figures</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/images.html">Images</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/list-group.html">List group</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/navbar/default.html">Navbar default</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/navbar/vertical.html">Navbar vertical</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/navbar/darken-on-scroll.html">Navbar darken on scroll</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/navbar/top.html">Navbar top</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/navbar/combo.html">Navbar combo</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/navs.html">Navs</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/page-headers.html">Page headers</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/pagination.html">Pagination</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/popovers.html">Popovers</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../components/progress.html">Progress</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/search.html">Search<span class="badge rounded-pill ml-2 fs--2 badge-soft-success">New</span></a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/sidepanel.html">Sidepanel</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/tables.html">Tables</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/tabs.html">Tabs</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-700 font-weight-medium" href="../components/typography.html">Typography</a></div>
                                            </div>
                                        </div>
                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3">Plugins</div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/anchor.html">Anchor</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/countup.html">Countup</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/choices.html">Choices</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/date-picker.html">Date picker</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/draggable.html">Draggable</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/dropzone.html">Dropzone</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/echarts.html">Echarts</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/fontawesome.html">Fontawesome</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/fullcalendar.html">Fullcalendar</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/glightbox.html">Glightbox</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/progressbar.html">Progressbar</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/inline-player.html">Inline player</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/list.html">List</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/lottie.html">Lottie</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/typed-text.html">Typed text</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/tinymce.html">Tinymce</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/swiper.html">Swiper</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/rater.html">Rater</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/map/leaflet-map.html">Leaflet map</a><a class="nav-link py-1 link-700 font-weight-medium" href="../plugins/map/google-map.html">Google map</a></div>
                                            </div>
                                        </div>
                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3">Utilities</div>
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/colors.html">Colors</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/embed.html">Embed</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/flex.html">Flex</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/float.html">Float</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/position.html">Position</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/spacing.html">Spacing</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-700 font-weight-medium" href="../utilities/visibility.html">Visibility</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownAuthentication" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Authentication</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownAuthentication">
                                <div class="card shadow-none navbar-card-auth">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="<?= base_url() ?>/public/v2/assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav-link py-1 text-900 font-weight-bold">Basic</div>
                                                <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/basic/login.html">Login</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/basic/logout.html">Logout</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/basic/register.html">Register</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/basic/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/basic/reset-password.html">Reset password</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/basic/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/basic/lock-screen.html">Lock screen</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <div class="nav-link py-1 text-900 font-weight-bold">Split</div><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/split/login.html">Login</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/split/register.html">Register</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/split/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Card</div><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/card/login.html">Login</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/card/register.html">Register</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/card/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Special</div><a class="nav-link py-1 link-700 font-weight-medium" href="../authentication/wizard.html">Wizard</a><a class="nav-link py-1" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                    <li class="nav-item"><a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                                    </svg></span></span></a></li>
                    <li class="nav-item">
                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush font-weight-normal fs--1">
                                    <div class="list-group-title border-bottom">NEW</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush notification-unread" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <img class="rounded-circle" src="<?= base_url() ?>/public/v2/assets/img/team/1-thumb.png" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                                <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush notification-unread" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-title border-bottom">EARLIER</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <img class="rounded-circle" src="<?= base_url() ?>/public/v2/assets/img/icons/weather-sm.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block" href="../pages/notifications.html">View all</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="<?= base_url() ?>/public/v2/assets/img/team/3-thumb.png" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                            <div class="bg-white rounded-lg py-2">
                                <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Set status</a>
                                <a class="dropdown-item" href="../pages/profile.html">Profile &amp; account</a>
                                <a class="dropdown-item" href="#!">Feedback</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../pages/settings.html">Settings</a>
                                <a class="dropdown-item" href="../authentication/card/logout.html">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
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
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand mr-1 mr-sm-3" href="#">
                        <div class="d-flex align-items-center"><img class="mr-2" src="<?= base_url() ?>/public/v2/assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
                    </a>
                    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                                    <div class="bg-white rounded-lg py-2"><a class="dropdown-item" href="#">Dashboard</a><a class="dropdown-item" href="../home/dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="../home/feed.html">Feed</a><a class="dropdown-item" href="../home/landing.html">Landing </a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownPages">
                                    <div class="card navbar-card-pages shadow-none">
                                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="<?= base_url() ?>/public/v2/assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                                            <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/activity.html">Activity</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/associations.html">Associations</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/billing.html">Billing</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/errors.html">Errors</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/event-create.html">Event create</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/event-detail.html">Event detail</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/events.html">Events</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/faq.html">Faq</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/invite-people.html">Invite people</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/invoice.html">Invoice</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/notifications.html">Notifications</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/people.html">People</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/pricing.html">Pricing</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/pricing-alt.html">Pricing alt</a></div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column"><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/profile.html">Profile</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/settings.html">Settings</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/starter.html">Starter</a><a class="nav-link py-1 link-700 font-weight-medium" href="../calendar.html">Calendar<span class="badge rounded-pill ml-2 fs--2 badge-soft-success">New</span></a><a class="nav-link py-1 link-700 font-weight-medium" href="../chat.html">Chat</a><a class="nav-link py-1 link-700 font-weight-medium" href="../kanban.html">Kanban</a>
                                                        <a class="nav-link py-1 link-700 font-weight-medium" href="../widgets.html">Atalhos</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/errors/404.html">404</a><a class="nav-link py-1 link-700 font-weight-medium" href="../pages/errors/500.html">500</a>
                                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3">Emails</div><a class="nav-link py-1 link-700 font-weight-medium" href="../email/inbox.html">Inbox</a><a class="nav-link py-1 link-700 font-weight-medium" href="../email/email-detail.html">Email detail</a><a class="nav-link py-1 link-700 font-weight-medium" href="../email/compose.html">Compose</a>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column">
                                                        <div class="nav-link py-1 text-900 font-weight-bold">E-commerce</div><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/order-details.html">Order details</a><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/orders.html">Orders</a><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/product-details.html">Product details</a><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/product-grid.html">Product grid</a><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/product-list.html">Product list</a><a class="nav-link py-1 link-700 font-weight-medium" href="../e-commerce/shopping-cart.html">Shopping cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="../widgets.html">Widgets</a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                        <li class="nav-item"><a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                                        </svg></span></span></a></li>
                        <li class="nav-item">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush font-weight-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <img class="rounded-circle" src="<?= base_url() ?>/public/v2/assets/img/team/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <img class="rounded-circle" src="<?= base_url() ?>/public/v2/assets/img/icons/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../pages/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="<?= base_url() ?>/public/v2/assets/img/team/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white rounded-lg py-2">
                                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="../pages/profile.html">Profile &amp; account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../pages/settings.html">Settings</a>
                                    <a class="dropdown-item" href="../authentication/card/logout.html">Logout</a>
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

                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTopCombo.remove(navbarTopCombo);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopVertical.remove(navbarTopVertical);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    }
                </script>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Módulo</a></li>
                        <li class="breadcrumb-item"><a href="#">Seção</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Página</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Página inicial</h5>
                    </div>
                    <div class="card-body fs--1 p-0">
                        <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                            <div class="notification-avatar">
                                <div class="avatar avatar-xl mr-3">
                                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">🔍</span></div>
                                </div>
                            </div>
                            <div class="notification-body">
                                <h2 class="h5">Núcleo de regulação</h2>
                                <span class="notification-time">Módulo de de regulação</span>
                            </div>
                        </a>




                        <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                            <div class="notification-avatar">
                                <div class="avatar avatar-xl mr-3">
                                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📋️</span></div>
                                </div>
                            </div>
                            <div class="notification-body">
                                <h2 class="h5">Atenção primária</h2>
                                <span class="notification-time">Módulo de atenção primária</span>
                            </div>
                        </a>

                        <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                            <div class="notification-avatar">
                                <div class="avatar avatar-xl mr-3">
                                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">🏷️</span></div>
                                </div>
                            </div>
                            <div class="notification-body">
                                <h2 class="h5">Almoxarifado</h2>
                                <span class="notification-time">Módulo de almoxarifado</span>
                            </div>
                        </a>

                        <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                            <div class="notification-avatar">
                                <div class="avatar avatar-xl mr-3">
                                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📅️</span></div>
                                </div>
                            </div>
                            <div class="notification-body">
                                <h2 class="h5">Transporte</h2>
                                <span class="notification-time">Módulo de controle de transportes</span>
                            </div>
                        </a>

                    </div>
                </div>
                <footer>
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">Tecnologia desenvolvida pela <span class="d-none d-sm-inline-block"><a href="https://infosus.net.br">Infosus</a>.</p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v2.0.0 alpha</p>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?= base_url() ?>/public/v2/vendors/popper/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/anchorjs/anchor.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/is/is.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= base_url() ?>/public/v2/vendors/list.js/list.min.js"></script>
    <script src="<?= base_url() ?>/public/v2/assets/js/theme.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
</body>

</html>