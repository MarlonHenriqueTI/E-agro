<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!--CSS site-->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/E-agro-icone.ico" type="image/x-icon" />

    <title>Marlon Henrique - Demonstração de sites</title>
  </head>
  <body>

  	<!--Cabeçalho-->
 <section id="header">
    	<div class="container">
	    	<nav class="navbar fixed-top navbar-light bg-light">
	    		<div class="row" id="logo-header">
	    			<div class="col-md-1"></div>
	    			<div class="col-md-7">
	    				<a class="navbar-brand" href="home.php">
				    		<img src="images/E-agro logo.png" class="d-inline-block align-top" alt="logo do e-agro" id="logo">
				  		</a>
	    			</div>
	    			<div class="col-md-4">
	    				<form class="form-inline">
					    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
					    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Produto</button>
			  			</form>
	    			</div>
	    		</div>
	    		<div class="row" id="menu-header">
	    			<div class="col-md-4"></div>
	    					<div class="col-md-2">
	    						<a href="painel-usuario.php" class="nav-item nav-link" id="link-header-left">Meus Anuncios</a>
	    					</div>
	    					<div class="col-md-2">
								<a href="login.php" class="nav-item nav-link active" id="link-header">Minha Conta</a>
	    					</div>
	    			<div class="col-md-4"></div>
	    		</div>
			</nav>
		</div>
    </section>

	<section id="painel-usuario">
		<div class="row">
			<div class="col-md-2" id="menu-painel">					
				<div class="list-group" id="list-tab" role="tablist">
				   	  <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Meus anuncios</a>
					    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Inserir anuncio</a>
						<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Excluir anuncio</a>
						<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Alterar meu cadastro</a>
					</div>					
			</div>
			<div class="col-md-10" id="corpo-painel">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2">
					</div>
					<div class="col-md-8" id="formulario-cadastro">
						<form method="POST" action="" id="cadastro-anuncio">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome do produto</label>
						    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="O que você está vendendo" name="produto-nome">
						 	</div>
						    <div class="form-group">
						    	<label for="exampleFormControlInput1">Preço</label>
						    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="XX,XX" name="preco">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Descrição do anuncio</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							 <div class="form-group">
							    <label for="exampleFormControlFile1">Envie as fotos do produto</label>
							    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagensProduto[]"  multiple="multiple">
							  </div>
						  	<button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
						</form>
					</div>
				<div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

      <!--Rodapé-->
	<section id="footer">
		<nav class="navbar navbar-dark bg-dark">
		 	<div class="row">
		 		<div class="col-4">
		 			<div class="row">
		 				<div class="col-12">
		 					<p id="creditos">Categorias</p>
		 				</div>
		 			</div>
		 		</div>
		 		<div class="col-4">
		 			<div class="row">
		 				<div class="col-12">
		 					<p id="creditos">E-agro 2018 - Todos os direitos reservados</p>
		 				</div>
		 			</div>
		 		</div>
		 		<div class="col-4">
		 			<div class="row">
		 				<div class="col-6">
		 					<p>Redes sociais</p>
		 				</div>
		 				<div class="col-6">
		 					<a href="#" class="facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
					 		<a href="#" class="instagram"><i class="fab fa-instagram fa-2x"></i></a>
							<a href="#" class="twitter"><i class="fab fa-twitter-square fa-2x"></i></a>
		 				</div>
		 			</div>
			 	</div>
		 	</div>
		</nav>
	</section>

    <!-- JavaScript (Opcional) -->
    <script src="js/script.js" type="script/js"></script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>