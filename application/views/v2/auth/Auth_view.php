<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INFOSUS - Autenticação</title>

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

    <script src="<?= base_url() ?>/public/v2/assets/js/config.navbar-vertical.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

    <main class="main" id="top">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center g-0">
                <div class="col-lg-8 col-xxl-5 py-3 position-relative">
                    <img class="bg-auth-circle-shape" src="<?= base_url() ?>/public/v2/assets/img/illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="<?= base_url() ?>/public/v2/assets/img/illustrations/shape-1.png" alt="" width="150">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5 text-center bg-card-gradient">
                                    <div class="position-relative p-4 pt-md-5 pb-md-7">
                                        <div class="bg-holder bg-auth-card-shape" style="background-image:url(<?= base_url() ?>/public/v2/assets/img/illustrations/half-circle.png);"></div>
                                        <!--/.bg-holder-->
                                        <div class="z-index-1 position-relative">
                                            <a class="link-light mb-4 font-sans-serif fs-4 d-inline-block font-weight-bolder" href="<?= base_url() ?>/public/v2/index.html">

                                            </a>
                                            <img class="align-content mb-4" style="filter: brightness(0) invert(1);" src="<?= base_url() ?>public/images/logo.png" width="100" alt="Logotipo Infosus">

                                            <p class="opacity-75 text-white">A melhor solução em tecnologia da informação para o SUS</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                                        <p class="text-white">Você precisa de ajuda?<br><a class="text-decoration-underline link-light small" href="https://wa.me/5538999892125"><i class="fab fa-whatsapp"></i> Falar com o suporte!</a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        <div class="row flex-between-center mb-5">
                                            <?= $this->ui->alert_flashdata() ?>
                                            <div class="col-auto">
                                                <h3>Faça login para continuar:</h3>
                                            </div>
                                        </div>
                                        <form action="<?= base_url('auth') ?>" method="post" id="auth_form">
                                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                                            <div class="mb-3"><label class="form-label" for="card-email">Email de acesso</label>
                                                <input class="form-control" name="usuario_email" id="card-email" type="email" required />
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label" for="card-password">Senha</label>
                                                </div>
                                                <input class="form-control" name="usuario_password" id="card-password" type="password" required />
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="card-checkbox" checked="checked" /><label class="form-check-label" for="card-checkbox">Lembrar-me</label>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary btn-block mt-3" id="auth_submit_button" type="submit">Autenticar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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

    <script>
        window.onload = function() {
            // SET LOADING BUTTONS
            $('#auth_form').on('submit', function() {
                $('#auth_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
            });
        }
    </script>
</body>

</html>