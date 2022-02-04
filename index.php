<?php include "header.php"; ?>
<link rel="stylesheet" href="css/main.css">
	        <div class="col s12 m12 titulo center">
	        	<h1>IDEALIZAÇÃO E PRODUÇÃO<br>DE <b>SHOWS</b> E <b>EVENTOS</b></h1>
	        </div>
    	</header>
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
        

<?php include "footer.php"; ?>