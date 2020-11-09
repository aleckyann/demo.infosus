<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/bootstrap4/bootstrap.min.css">
<link href="<?= base_url() ?>public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>public/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/course.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/course_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/blog_single_responsive.css">	<!-- Course -->


	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url() ?>">Home</a></li>
								<li>Curso</li>
								<li><?= $curso['treinamento_nome'] ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<div class="course">
		<div class="container">
			<div class="row">
				<div align="center" class="course_title col-lg-12"><h2><?= $curso['treinamento_nome'] ?></h2></div>
			</div>
			<div class="row">

				<!-- Course -->
				<div class="col-lg-7">
					
					<div class="course_container">
						
						<?php if ($verifica_matricula['treinamento_id'] == segment('3')) {?>
							
						<?php } else{?>
						<form action="<?= base_url() ?>usuario/fazer-matricula" method="post">
							<input type="hidden" name="usuario_id" value="<?= $_SESSION['usuario_id'] ?>">
							<input type="hidden" name="treinamento_id" value="<?= $curso['treinamento_id'] ?>">
							<input class="btn btn-primary" type="submit" value="FAZER MATRÍCULA">
						</form>
					<?php } ?>
						<div class="course_info  align-items-lg-center">

							<!-- Course Info Item -->
							<div><br>
								<h3 style="padding-left: 5%" class="course_info_title">PROFISSIONAL QUE REGISTRA:</h3>
								<h4 style="padding-left: 5%" class="course_info_text"><a><?= $curso['treinamento_fab'] ?></a></h4>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image" align="center"><img src="<?= base_url() ?><?= $curso['treinamento_img'] ?>" alt=""></div>
						
					</div>

					





				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-5">
					<div class="sidebar">
						<!-- Course Tabs -->
						<?= $curso['descricao'] ?>
					</div>
				</div>





			</div>
		</div>
	</div>
</div>


<script src="<?= base_url() ?>public/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url() ?>public/plugins/easing/easing.js"></script>
<script src="<?= base_url() ?>public/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url() ?>public/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?= base_url() ?>public/js/course.js"></script>