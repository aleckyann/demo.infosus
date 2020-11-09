<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/bootstrap4/bootstrap.min.css">
<link href="<?= base_url() ?>public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>public/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/course.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/styles/course_responsive.css">
	<!-- Course -->


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

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						<div class="row">
							<div class="course_title col-lg-12"><?= $curso['treinamento_nome'] ?></div>
						</div>

						<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Professor:</div>
								<div class="course_info_text"><a href="#"><?= $curso['treinamento_prof'] ?></a></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Qualificação:</div>
								<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Fabricante:</div>
								<div class="course_info_text"><a href="#"><?= $curso['treinamento_fab'] ?></a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image" align="center"><img src="<?= base_url() ?><?= $curso['treinamento_img'] ?>" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">Detalhes</div>
								<div class="tab">Qualificações</div>
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									<div class="tab_panel_title">Sobre o treinamento</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Para quem não conhece, “Lorem Ipsum” ou “dummy text” é um texto utilizado para preencher o espaço de texto em publicações (jornais, revistas, e websites), com a finalidade de verificar o layout, tipografia e formatação antes de utilizar conteúdo real.Para quem não conhece, “Lorem Ipsum” ou “dummy text” é um texto utilizado para preencher o espaço de texto em publicações (jornais, revistas, e websites), com a finalidade de verificar o layout.</p>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Algo sobre o treinamento</div>
											<ul class="tab_panel_bullets">
												<li>Para quem não conhece, “Lorem Ipsum” ou “dummy text” é um texto utilizado para preencher o espaço de texto em publicações.</li>
												<li>Para quem não conhece, “Lorem Ipsum” ou “dummy text” é um texto utilizado para preencher o espaço de texto em publicações.</li>
											</ul>
										</div>
										<div class="tab_panel_section">
											<div class="tab_panel_subtitle">Algo sobre o treinamento</div>
											<div class="tab_panel_text">
												<p>Para quem não conhece, “Lorem Ipsum” ou “dummy text” é um texto utilizado para preencher o espaço de texto em publicações (jornais, revistas, e websites), com a finalidade de verificar o layout, tipografia e formatação antes de utilizar conteúdo real.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Curriculum -->
								<!-- Reviews -->
								<div class="tab_panel tab_panel_2">
									<div class="tab_panel_title">Qualificação do treinamento</div>

									<!-- Rating -->
									<div class="review_rating_container">
										<div class="review_rating">
											<div class="review_rating_num">4.5</div>
											<div class="review_rating_stars">
												<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
											</div>
										</div>
										<div class="review_rating_bars">
											<ul>
												<li><span>5 estrelas</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
												<li><span>4 estrelas</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
												<li><span>3 estrelas</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
												<li><span>2 estrelas</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
												<li><span>1 estrelas</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
											</ul>
										</div>
									</div>
									
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_feature">

								<!-- Features -->
								<div class="feature_list">

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duração:</span></div>
										<div class="feature_text ml-auto">8 horas</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Tópicos:</span></div>
										<div class="feature_text ml-auto">4</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Certificado:</span></div>
										<div class="feature_text ml-auto">Sim</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Alunos:</span></div>
										<div class="feature_text ml-auto">35</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Professor</div>
							<div class="sidebar_teacher">
								<div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
									<div class="teacher_image"><img src="<?= base_url() ?>public/images/team_2.jpg" alt=""></div>
									<div class="teacher_title">
										<div class="teacher_name"><a href="#"><?= $curso['treinamento_prof'] ?></a></div>
										<div class="teacher_position">Engenheiro Clínico</div>
									</div>
								</div>
								
								<div class="teacher_info">
									<p>Olá! Sou engenheiro eletricista, pós-graduado em engenharia clínica pela Funorte e docente há mais de 10 anos, especialista em equipamentos eletro-médicos bem como seu funcionamento.</p>
								</div>
							</div>
						</div>					

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