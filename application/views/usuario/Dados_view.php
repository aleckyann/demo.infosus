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
								<li><a href="<?= base_url() ?>usuario/dados">Meus Dados</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>public/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="container">
        <h3 align="center"><b>INFORMAÇÕES CADASTRAIS</b></h3><br>
    </div>

    <hr>

    <div class="container">
      <form action="#" method="post">
      <div class="card">
            <table class="table table-bordered">
                <tr>
                    <th class="active"><b>SEU NOME</b></th>
                    <th><input type="text" class="form-control" name="nome" style="color: black" value="<?= $_SESSION['usuario_nome'] ?>" disabled></th>
                </tr>
                <tr>
                    <th class="active"><b>EMAIL DE ACESSO</b></th>
                    <th><input type="text" class="form-control" name="email" style="color: black" value="<?= $_SESSION['usuario_email'] ?>" disabled></th>
                </tr>

                <tr>
                    <th class="active"><b>TELEFONE</b></th>
                    <th><input type="text" class="form-control" name="telefone" style="color: black" value="<?= $_SESSION['usuario_telefone'] ?>" disabled></th>
                </tr>

               <tr>
                    <th class="active"><b>INSCRIÇÃO</b></th>
                    <th><input type="text" class="form-control" name="data" style="color: black" value="<?= time_difference($_SESSION['created_at']) ?>" disabled></th>
                </tr>
                <tr>

                </tr>
            </table><br>
      </div>
    </form>
    </div><br>


			</div>
		</div>
</div>