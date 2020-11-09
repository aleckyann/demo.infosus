	<!-- Home -->

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/bootstrap4/bootstrap.min.css">
<link href="<?= base_url() ?>public/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/courses.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/courses_responsive.css">

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Cursos</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>public/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-12">
					
					<div class="courses_container">
						<div class="row courses_row">
			
							<!-- Course -->
							<?php foreach ($videos as $video) { ?>

							<div class="col-lg-4 course_col">
								<div class="course">
									<div class="course_image" align="center">
										<a href="<?= base_url() ?>usuario/curso/<?= $video['treinamento_id'] ?>">
											<img src="<?= base_url() ?><?= $video['treinamento_img'] ?>" <?= $video['treinamento_img_size'] ?> alt="">
										</a>
									</div>
									<div class="course_body">
										<h3 class="course_title"><a href="<?= base_url() ?>usuario/curso/<?= $video['treinamento_id'] ?>"><?= $video['treinamento_nome'] ?></a></h3>
										<div class="course_teacher"><?= $video['treinamento_prof'] ?></div>
										<div class="course_text">
											<p><?= $video['treinamento_desc'] ?></p>
										</div>
									</div>
									<div class="course_footer">
										
									</div>
								</div>
							</div>

							<?php } ?>

						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>