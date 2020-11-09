<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <div class="login-logo my-4">
                        <?php $this->ui->alert_flashdata() ?>
                        <img class="align-content" src="<?= base_url() ?>public/images/logo.png" alt="Logo" width="300" alt="">
                    </div>
                    <form action="<?= base_url('login') ?>" method="post">
                    
                        <div class="form-group">
						    <input class="form-control" type="email" name="usuario_email" required="true" placeholder="Email de login">
						</div>
                        <div class="form-group">
						    <input class="form-control" type="password" name="usuario_password" required="true" placeholder="Password">
						</div>
                        <div class="form-group">
						    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Autenticar</button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center small">v1.0.1</p>
</body>

