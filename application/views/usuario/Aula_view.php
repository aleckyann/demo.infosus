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
								<li><a href="index.html">Home</a></li>
								<li>Aula</li>
								<li><?= $curso['treinamento_nome'] ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
	<div class="feature">
		<div class="feature_background" style="background-image:url(<?= base_url() ?>public/images/courses_backgroud.jpg)"></div>
		<div class="container">
			<div class="row">
				<div align="center" class="course_title col-lg-12"><h2><?= $curso['treinamento_nome'] ?></h2></div>
			</div>
			<div class="row feature_row">

				<!-- Feature Content -->
				
				<!-- Feature Video -->
				<div class="col-lg-7 feature_col">
					<div class="feature_video d-flex flex-column align-items-center justify-content-center">
						<div class="feature_video_background" style="background-image:url(<?= base_url() ?><?= $curso['treinamento_img'] ?>)"></div>
						<a class="vimeo feature_video_button" href="<?= $curso['video_link'] ?>" title="">
							<img src="<?= base_url() ?>public/images/play.png" alt="">
						</a>
					</div>




					<div class="comments_container">
						<div class="comments_title"><span></span> Deixe sua dúvida, sugestão ou reclamação.</div><br>
						<ul class="comments_list">
							<li>
								<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
									<div class="comment_image"><div><img src="<?= base_url() ?>public/images/user.png" alt=""></div></div>
									<div class="comment_content">
										<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author"><a href="#">INFOSUS</a></div>
										</div>
										<div class="comment_text">
											<p>Olá, a sua dúvida pode ser a dúvida de outros, deixe seu comentário. Responderemos o mais breve possível ;)</p>
										</div>
									</div>
								</div>
								<?php foreach ($comentarios as $comentario) { ?>
									<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
										<div class="comment_image"><div><img src="<?= base_url() ?>public/images/user.png" alt=""></div></div>
										<div class="comment_content">
											<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
												<div class="comment_author"><a href="#"><?= $comentario['usuario_nome'] ?></a></div>
											</div>
											<div class="comment_text">
												<p><?= $comentario['comentario'] ?></p>
											</div>
										</div>
									</div>
								<?php } ?>
								<!--<ul>
									<li>
										<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
											<div class="comment_image"><div><img src="<?= base_url() ?>public/images/user.png" alt=""></div></div>
											<div class="comment_content">
												<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
													<div class="comment_author"><a href="#">John Smith</a></div>
													<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
													<div class="comment_time ml-auto">October 19,2018</div>
												</div>
												<div class="comment_text">
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
												</div>
												<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
													<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
													<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
												</div>
											</div>
										</div>
									</li>
								</ul>-->
							</li>
							
						</ul>
						<div class="add_comment_container" id="comentario">
							<form method="post" action="<?= base_url() ?>usuario/salva-comentario/<?= segment(3) ?>" class="comment_form">
								<div>
									<div class="form_title">COMENTÁRIO</div>
									<textarea class="comment_input" name="comentario" required="required"></textarea>
								</div>
								<div class="row">
									<div class="col-md-6 input_col">
										<div class="form_title">NOME</div>
										<input type="text" class="comment_input" name="usuario_nome" value="<?= $_SESSION['usuario_nome'] ?>" >
										<input type="hidden" name="video_id" value="<?= segment(3) ?>">

									</div>
									<div class="col-md-6 input_col">
										<div class="form_title">EMAIL</div>
										<input type="text" class="comment_input" value="<?= $_SESSION['usuario_email'] ?>" disabled>
									</div>
								</div>
								
								<div>
									<button type="submit" class="comment_button trans_200">COMENTAR</button>
								</div>
							</form>
						</div>
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
