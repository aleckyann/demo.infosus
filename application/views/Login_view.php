<!DOCTYPE html>
<html lang="en">
<head>
<title>Treinamentos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/bootstrap4/bootstrap.min.css">
<link href="<?= base_url() ?>public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/responsive.css">

</head>
<body>
<br><br><br><br>
<div class="super_container">

	<!-- Header -->

	<header class="header">
	

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="<?= base_url() ?>">
									<div class="logo_text"><img src="<?= base_url() ?>public/images/logo.png" width="200"></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="<?= base_url() ?>">Home</a></li>
									<li><a href="<?= base_url() ?>cursos">Treinamentos</a></li>
									<li><a href="<?= base_url() ?>contato">Contato</a></li>
								</ul>

								<!-- Hamburger -->

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?= base_url() ?>">Home</a></li>
				<li class="menu_mm"><a href="cursos">Treinamentos</a></li>
				<li class="menu_mm"><a href="contato">Contato</a></li>
			</ul>
		</nav>
	</div>
	








	<div class="counter">
		<div class="counter_background" style="background-image:url(<?= base_url() ?>public/images/counter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<a href="<?= base_url() ?>#cadastro"><h2 class="counter_title">Solicite seu cadastro agora</h2></a>
						<div class="counter_text"><p>Já estamos esperando você solicitar um cadastro para desfrutar de todo benefício que é ter uma plataforma que entrega resultados para o seu time, <a href="<?= base_url() ?>#cadastro">clique aqui</a> para solicitar seu cadastro.</p></div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							
							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="7">0</div>
								<div class="milestone_text">Treinamentos</div>
							</div>


							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="120" data-sign-after="">0</div>
								<div class="milestone_text">Acessos por dia</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="250">0</div>
								<div class="milestone_text">Profissionais</div>
							</div>

						</div>
					</div>

				</div>
			</div>
			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="<?= base_url('action_login') ?>" method="post">

    					<?php alert($this->session->flashdata('login'), 'danger') ?>
							<div class="counter_form_title">Login</div>
            				<input class="counter_input" type="email" name="usuario_email" required="true" placeholder="Email de login">

            				<input class="counter_input" type="password" name="usuario_password" required="true" placeholder="Password">


							
							<button type="submit" class="counter_form_button">Entrar</button>
    						<div align="center"><br><br><br><br>
    							<a href="https://wa.me/553899892125"><b style="color: black"><i style="color: green" class="fa fa-phone-square"></i> (38)9 99892125 <br></b></a>
    							<b style="color: black">contato@infosus.net.br</b>
    						</div>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>