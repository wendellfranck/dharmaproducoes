<?php include "../header.php"; ?>
<link rel="stylesheet" href="contato.css">
	<?php
	if ($_GET['enviado'] == "true") {
		?> <script>
			 M.toast({html: 'Mensagem enviada com sucesso!'})
		</script><?php
	} else if ($_GET['enviado'] == "false") {
		?> <script>
			 M.toast({html: 'Mensagem não enviada!'})
		</script><?php
	}
	?>
    	</header>
      	<section class="section section-contato">
      		<div class="container">
      			<div class="row">
      				<div class="col s12 m5 titulo center-align">
			          	<h1>FALE COM <br><b>A GENTE</b></h1>
			        </div>
			        <div class="vl col s12 m2"></div>
			        <!-- <div class="col s12 m5 titulo2">
			            <h1>CONTATO E <br>ORÇAMENTO</h1>
			        </div> -->
			        <div class="col s12 m5 dados">
			        	<h5 class="center email" style="color: white;">E-mail: contato@dharmaproducao.com</h5>
			        	<h5 class="center email" style="color: white;">Localização: Tijuca - Rio de Janeiro</h5>
			        </div>
			        <div class="col s12 m5 email_box">
						<h5 class="center" style="margin-top: 20px;"><b>Deseja um atendimento personalizado?</b></h5>
						<p class="center" style="margin-top: 20px;">Informe seus dados de contato abaixo e <br>responderemos o mais rápido possível</p>
						<form action="enviar.php" method="POST">
							<div class="input-field col s12 m6" style="margin-top: 30px;">
								<input type="text" name="nome">
								<label for="nome">Nome</label>
							</div>
							<div class="input-field col s12 m6" style="margin-top: 30px;">
								<input type="text" name="email">
								<label for="email">e-mail*</label>
							</div>
							<div class="input-field col s12" style="margin-top: 30px;">
								<input type="text" name="assunto">
								<label for="assunto">Assunto</label>
							</div>
							<div class="input-field col s12" style="margin-top: 50px;">
								<textarea type="text" class='materialize-textarea' name="mensagem"></textarea>
								<label for="mensagem">Digite sua mensagem*</label>
							</div>
							<div class="col s12 enviar_email center" style="margin-bottom: 20px;">
								<input type="submit" class="btn purple" value="Enviar">
							</div>
							
						</form>
					</div>
      			</div>
      		</div>
      	</section>
        

        <?php include "../footer.php"; ?>



  