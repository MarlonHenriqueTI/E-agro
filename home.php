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
	    				<a class="navbar-brand" href="#">
				    		<img src="images/E-agro logo.png" class="d-inline-block align-top" alt="">
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
	    						<a href="#" class="nav-item nav-link" id="link-header-left">Meus Anuncios</a>
	    					</div>
	    					<div class="col-md-2">
								<a href="#" class="nav-item nav-link" id="link-header">Minha Conta</a>
	    					</div>
	    			<div class="col-md-4"></div>
	    		</div>
			</nav>
		</div>
    </section>

	<!--Banner Home-->
	<section id="banner-home">
		<h2>Banner aqui</h2>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://picsum.photos/900/?random" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://picsum.photos/900/?random" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://picsum.photos/900/?random" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>

	<!--Anuncios Home-->
	<section id="anuncios-home">
		<div class="container">
			<div class="row">
				<div class="col" id="barra-lateral">
					<form class="form-inline">
				    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
				    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Por palavra-chave</button>
		  			</form>

		  			<h4 id="busca-estado">Buscar por Categoria</h4>
					 <div class="list-group" id="list-tab" role="tablist">
					      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Agrotoxicos</a>
					      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Rações</a>
					      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Sementes</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Fertilizantes</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Ferramentas</a>
					</div>	

					<h4 id="busca-estado">Buscar por Estado</h4>
					<div class="list-group" id="list-tab" role="tablist">
						  <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Minas Gerias</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">São Paulo</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Rio de Janeiro</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Paraná</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Rio Grande do Sul</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Santa Catarina</a>
					      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Acre</a>
					      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Amapá</a>
					      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Amazonas</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Pará</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Rondônia</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Roraima</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Tocantis</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Alagoas</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Bahia</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Ceará</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Maranhão</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Paraíba</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Pernambuco</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Piauí</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Rio Grande do Norte</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Sergipe</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Goiás</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Mato Grosso</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Mato Grosso do Sul</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Distrito Federal</a>
					      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Espírito Santo</a>
					</div>							
				</div>
				<div class="col-9" id="anuncios">
					<div class="row">
						
					
					<?php for ($i=0; $i < 12; $i++) { ?>
					
						<div class="card col-4">
						  <img class="card-img-top" src="https://picsum.photos/300/?random" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Titulo do anuncio</h5>
						    <a href="#" class="categoria-anuncio">Categoria</a>
						    <p class="vendedor">Nome Vendedor</p>
						    <p class="card-text">Pequena descrição do anuncio</p>
						    <div class="row">
						    	<div class="col-md-6">
						    		<p class="like-label">Curtiu?</p>
						    	</div>
						    	<div class="col-md-6">
						    		<a href="#" id="Like"><i class="far fa-heart fa-1x"></i></a>
						    	</div>
						    </div>
						    <a href="#" class="btn btn-primary">Ver anuncio</a>
						  </div>
						</div>
					

					<?php }?>
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