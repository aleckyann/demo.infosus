<!DOCTYPE html>
<html lang="en">
<head>
<title>Videoaula</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/bootstrap4/bootstrap.min.css">
<link href="<?= base_url() ?>public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>public/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/about_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									
									<li>
										<i aria-hidden="true"></i>
										<div><?= $_SESSION['usuario_email'] ?></div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="<?= base_url() ?>logout">Sair</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
		
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="<?= base_url() ?>usuario/dados">
									<div class="logo_text"><img src="<?= base_url() ?>public/images/logo.png" width="200"></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="<?= base_url() ?>usuario/dados">Meus dados</a></li>
									<li><a href="<?= base_url() ?>usuario/meus-treinamentos">Meus treinamentos</a></li>
									<li><a href="<?= base_url() ?>usuario/cursos">Treinamentos</a></li>
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
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?= base_url() ?>usuario/dados">Meus dados</a></li>
				<li class="menu_mm"><a href="<?= base_url() ?>usuario/meus-treinamentos">Meus treinamentos</a></li>
				<li class="menu_mm"><a href="<?= base_url() ?>usuario/cursos">Cursos</a></li>
			</ul>
		</nav>
	</div>
	
	


