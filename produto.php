
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
				    		<img src="images/E-agro logo.png" class="d-inline-block align-top" alt="logo do e-agro">
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
								<a href="login.php" class="nav-item nav-link active" id="link-header">Minha Conta</a>
	    					</div>
	    			<div class="col-md-4"></div>
	    		</div>
			</nav>
		</div>
    </section>

	<section id="single">
		<div class="container">
			<div class="produto">
				<div class="row">
					<nav aria-label="breadcrumb" id="caminho-home">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item"><a href="#">Estado</a></li>
					    <li class="breadcrumb-item"><a href="#">Categoria</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Produto</li>
					  </ol>
					</nav>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="alert alert-light" role="alert">
						 	<h2 id="titulo-anuncio">Nome do produto</h2>
						</div>
					</div>
					<div class="col-md-6">
						<div class="alert alert-success" role="alert">
						    <h3 id="Preco-produto">R$500,00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="slide-produto">
						<img class="card-img-top" src="https://picsum.photos/300/?random" alt="imagem-Produto">
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12" id="descricao-vendedor-produto">
							<div class="jumbotron jumbotron-fluid" style="width: 100%;">
							  <div class="container">
							    <h3 class="display-4">Nome do vendedor</h3>
							    <p class="lead">Telefone: (xx)xxxxx-xxxx</p>
							    <p class="lead">E-mail: contato@email.com</p>
							  </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" id="contato-vendedor">
							<a href="produto.php" class="btn btn-primary" id="botao-contato-vendedor">Falar com o vendedor</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" id="seguranca-produto">
							<div class="jumbotron jumbotron-fluid" style="width: 100%;">
							  <div class="container">
							    <p class="lead">Não pague adiantado</p>
							    <p class="lead">Desconfie de anuncios não realistas</p>
							  </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4" id="curtir-produto">
							<p class="like-label">
								Curtir: <a href="produto.php" id="Like"><i class="far fa-heart fa-1x"></i></a> 
							</p>
						</div>
						<div class="col-md-8" id="compartilhar-produto"> 
							<p>Compartilhar:Redes Sociais aqui</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="titulo-desc-produto">
						<h2>Nome do Produto - R$500,00</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="desc-produto">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda saepe, similique nesciunt eveniet debitis architecto a itaque eligendi et nostrum expedita iste aliquid, error fugit libero vero quos harum? Rem!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis alias debitis culpa minima laudantium voluptatibus possimus illum deleniti aut atque voluptatum voluptate provident vitae quam vel, mollitia totam numquam laboriosam.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" id="mapa-produto">
						<h2>Mapa + detalhes de localização</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7507.316706426105!2d-43.17109572731246!3d-19.812077773770795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa5074732765415%3A0xe75615374cb9bb9a!2sJo%C3%A3o+Monlevade%2C+MG!5e0!3m2!1spt-BR!2sbr!4v1524940571423" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
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