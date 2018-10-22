
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>H O L L Y</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Use Font Awesome's  -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- Só carrega esse estilo se for a pagina comprar.php -->
		<link rel="stylesheet" href="css/compra-style.css">
		<!------ Include the above in your HEAD tag ---------->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



	</head>
	<body>

		<nav class="navbar navbar-default navbar-custom">
			<div class="flipkart-navbar">
					<div class="container">
							<div class="row row1">
									<ul class="largenav pull-right">
											<li class="upper-links"><a class="links" href="#">Home</a></li>
											<li class="upper-links"><a class="links" href="#">Sobre</a></li>
											<li class="upper-links"><a class="links" href="#">Revenda</a></li>
											<li class="upper-links"><a class="links" href="#">Afiliados</a></li>
											<li class="upper-links"><a class="links" href="#">Informações</a></li>
											<li class="upper-links"><a class="links" href="#">Contato</a></li>
											<li class="upper-links"><a class="links" href="#"></a></li>
											<li class="upper-links"><a class="links" href="#">Meus dados</a></li>
											<li class="upper-links"><a class="links" href="#">Meus pedidos</a></li>
											<li class="upper-links"><a class="links" href="#">Lista de desejos</a></li>
											<li class="upper-links">
															<a  href="#">
																	<svg class="" width="16px" height="12px" style="overflow: visible;">
																			<i class="fas fa-1x fa-bell" style="color:#fff;"></i>
																	</svg>
															</a>
													</li>
													<li class="upper-links dropdown"><a class="links" href="login.php">Fazer login</a>
															<ul class="dropdown-menu">
																	<li class="profile-li"><a class="profile-links" href="nova_conta.php">Criar Conta</a></li>
															</ul>
													</li>

									</ul>
							</div>
							<div class="row row2">
									<div class="col-sm-2">
											<h2 style="margin:0px; text-align:center;">
												<span class="smallnav men"><a href="index.php" class="logo">HOLLY</a></span>
												<span class="smallnav menu" onclick="openNav()">☰</span>
											</h2>
											<h1 style="margin:0px;">
												<span class="largenav logo"><a href="index.php" class="logo">HOLLY</a></span>
											</h1>
									</div>
									<div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-10">
											<div class="row">
													<input class="flipkart-navbar-input col-xs-10" type="" placeholder="Digite o nome do produto..." name="">
													<button class="flipkart-navbar-button col-md-1 col-xs-2">
															<svg width="15px" height="15px">
																	<i class="fas fa-search"></i>
													</button>
											</div>
									</div>
									<div class="cart largenav col-sm-2">
											<a class="cart-button">
													<svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
														<i class="fas fa-1x fa-shopping-cart"></i>
													</svg> Link
													<span class="item-number ">0</span>
											</a>
									</div>

							</div>
					</div>
			</div>
			<div id="mySidenav" class="sidenav">
					<div class="container" style="background-color: #000; padding-top: 10px;">
							<span class="sidenav-heading logo">HOLLY</span>
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
					</div>
					<a href="#">masculino</a>
					<a href="#">feminino</a>
					<a href="#">infantil</a>
					<a href="#">esporte</a>
					<a href="#">inspiracao</a>
						<a href="#">outlet</a>

			</div>
  <div class="container">
    <ul class="nav navbar-nav nav-custom">

			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 um">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">MASCULINO</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>


			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 dois">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">FEMININO</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>


			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 tres">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">INFANTIL</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>


			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 quatro">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">ESPORTE</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>

			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 cinco">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">INSPIRAÇÃO</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>


			<li class="upper-links dropdown link col-lg-2 col-md-2 col-sm-12 six">
				<a class="links text-center" href="login.php" style="text-transform: uppercase;">OUTLET</a>
					<ul class="dropdown-menu">
							<li class="profile-li"><a class="profile-links" href="#">link</a></li>
					</ul>
			</li>
			<hr />

    </ul>
  </div>
</nav>
<div class="header">
</div>

<div class="container">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner carousel-inner-custom">
         <div class="item active">
            <img class="img-responsive" src="imagens/slider/camisetas.jpg" alt="Modelo1" >
         </div>
         <div class="item">
            <img class="img-responsive" src="imagens/slider/camisetas2.jpg" alt="Modelo2">
         </div>
         <div class="item">
            <img class="img-responsive" src="imagens/slider/like.jpg" alt="Modelo3" >
         </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control carousel-control-custom " href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left glyphicon-custom"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control carousel-control-custom" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right glyphicon-custom"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   <!-- FIM myCarousel -->
</div>
<!-- FIM CONTAINER SLIDER -->
<div class="container">
   <div class="row">

      <!--<div class="container">-->
      <div class="vip-product">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
            <div class="product">
               <a href="#" ><img class="img-categoria" src="imagens/img-categoria/Camisetas.jpg" alt="" title=""></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
            <div class="product">
               <a href="#" ><img class="img-categoria" src="imagens/img-categoria/legging.jpg" alt="" title=""></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
            <div class="product">
               <a href="#" ><img class="img-categoria" src="imagens/img-categoria/vestidos.jpg" alt="" title=""></a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <!-- CONTAINER -->
   <div class="row">
      <img class="img-responsive banner-desck" src="imagens/Banner/entrega_seguranca.jpg">
   </div>
</div>
<!-- FIM CONTAINER -->
<div class="container">
   <!-- CONTAINER -->
   <div class="row">
	  <div class="title-lancamento text-center">LANÇAMENTOS</div>
	  <ul class="lista-produtos">
	 <!-- ROW 1 -->
	  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
				 <img class="produto-img" src="imagens/produtos/camisetas/camiseta1.jpg">
				 <img class="img-costa" src="imagens/produtos/camisetas/camiseta1-costa.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">Camise xxt</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
						<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
				 <img class="produto-img" src="imagens/produtos/camisetas/camiseta2.jpg">
				 <img class="img-costa" src="imagens/produtos/camisetas/camiseta2-costa.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">Camise xxt</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
				 <img class="produto-img" src="imagens/produtos/camisetas/camiseta3.jpg">
				 <img class="img-costa" src="imagens/produtos/camisetas/camiseta3-costa.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">Camise xxt</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
				 <img class="produto-img" src="imagens/produtos/camisetas/blusa1.jpg">
				 <img class="img-costa" src="imagens/produtos/camisetas/blusa1-costa.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">Camise xxt</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>
		  <!-- ROW 2 -->
		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
				 <img class="produto-img" src="imagens/produtos/legging/legging1.jpg">
				 <img class="img-costa" src="imagens/produtos/legging/legging1-lado.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">LEGGING XXT</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
			 	<img class="produto-img" src="imagens/produtos/legging/legging2.jpg">
				 <img class="img-costa" src="imagens/produtos/legging/legging2-lado.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">LEGGING XXT</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
			 	<img class="produto-img" src="imagens/produtos/legging/legging3.jpg">
				 <img class="img-costa" src="imagens/produtos/legging/legging3-lado.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">LEGGING XXT</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
			 	<img class="produto-img" src="imagens/produtos/legging/legging2.jpg">
				 <img class="img-costa" src="imagens/produtos/legging/legging2-lado.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">LEGGING XXT</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>
		    <!-- ROW 3 -->
			<li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
			 <img class="produto-img" src="imagens/produtos/vestidos/vestido2.jpg">
				 <img class="img-costa" src="imagens/produtos/vestidos/vesstido2-costa.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">VESTIDO XXT</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
			 	<img class="produto-img" src="imagens/produtos/vestidos/vestido2.jpg">
				 <img class="img-costa" src="imagens/produtos/vestidos/vesstido2-costa.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">VESTIDO XXT</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
			 <img class="produto-img" src="imagens/produtos/vestidos/vestido3.jpg">
				 <img class="img-costa" src="imagens/produtos/vestidos/vesstido2-costa.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">VESTIDO XXT</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>

		  <li>
		 	 <div class=" col-lg-3">
			 <div class="produto-box">
			 <img class="produto-img" src="imagens/produtos/vestidos/vestido2.jpg">
				 <img class="img-costa" src="imagens/produtos/vestidos/vesstido2-costa.jpg">
				 <div class="produto-descricao">
					 <div class="nome-produto text-center"><a href="#">VESTIDO XXT</a></div>
					 <div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
					 <div class="preco-produto">
					 <div class="valor-total">R$ 64,80</div>
					 <div class="parcela-valor">
					 até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
					 </div>
					<div class="comprar-produto">
					<a class="btn-vermais" href="comprar.php">VER MAIS</a>
					</div>
					 </div>
				 </div>

			 </div>
			 </div>
		  </li>
	  </ul>
   </div>
</div>
<!-- FIM CONTAINER -->
<div class="container"><!-- CONTAINER -->
  <div class="row">
 	 <div class="title-lancamento text-center">DESTAQUES</div>
		<ul class="lista-produtos">
		<!-- ROW 1 -->
		<li>
				<div class=" col-lg-3">
				<div class="produto-box">
					<img class="produto-img" src="imagens/produtos/camisetas/camiseta1.jpg">
					<img class="img-costa" src="imagens/produtos/camisetas/camiseta1-costa.jpg">
					<div class="produto-descricao">
						<div class="nome-produto text-center"><a href="#">Camise xxt</a></div>
						<div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
						<div class="preco-produto">
						<div class="valor-total">R$ 64,80</div>
						<div class="parcela-valor">
						até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
						</div>
						<div class="comprar-produto">
						<a class="btn-vermais" href="comprar.php">VER MAIS</a>
						</div>
						</div>
					</div>

				</div>
				</div>
			</li>

			<li>
				<div class=" col-lg-3">
				<div class="produto-box">
					<img class="produto-img" src="imagens/produtos/camisetas/camiseta2.jpg">
					<img class="img-costa" src="imagens/produtos/camisetas/camiseta2-costa.jpg">
					<div class="produto-descricao">
						<div class="nome-produto text-center"><a href="#">Camise xxt</a></div>
						<div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
						<div class="preco-produto">
						<div class="valor-total">R$ 64,80</div>
						<div class="parcela-valor">
						até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
						</div>
						<div class="comprar-produto">
						<a class="btn-vermais" href="comprar.php">VER MAIS</a>
						</div>
						</div>
					</div>

				</div>
				</div>
			</li>

			<li>
				<div class=" col-lg-3">
				<div class="produto-box">
					<img class="produto-img" src="imagens/produtos/camisetas/camiseta3.jpg">
					<img class="img-costa" src="imagens/produtos/camisetas/camiseta3-costa.jpg">
					<div class="produto-descricao">
						<div class="nome-produto text-center"><a href="#">Camise xxt</a></div>
						<div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
						<div class="preco-produto">
						<div class="valor-total">R$ 64,80</div>
						<div class="parcela-valor">
						até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
						</div>
						<div class="comprar-produto">
						<a class="btn-vermais" href="comprar.php">VER MAIS</a>
						</div>
						</div>
					</div>

				</div>
				</div>
			</li>

			<li>
				<div class=" col-lg-3">
				<div class="produto-box">
					<img class="produto-img" src="imagens/produtos/camisetas/blusa1.jpg">
					<img class="img-costa" src="imagens/produtos/camisetas/blusa1-costa.jpg">
					<div class="produto-descricao">
						<div class="nome-produto text-center"><a href="#">Camise xxt</a></div>
						<div class="avalicao-produto">
						<div class="estrelas">
							<input type="radio" id="cm_star-empty" name="fb" value="" checked/>
							<label for="cm_star-1"><i class="fa"></i></label>
							<input type="radio" id="cm_star-1" name="fb" value="1"/>
							<label for="cm_star-2"><i class="fa"></i></label>
							<input type="radio" id="cm_star-2" name="fb" value="2"/>
							<label for="cm_star-3"><i class="fa"></i></label>
							<input type="radio" id="cm_star-3" name="fb" value="3"/>
							<label for="cm_star-4"><i class="fa"></i></label>
							<input type="radio" id="cm_star-4" name="fb" value="4"/>
							<label for="cm_star-5"><i class="fa"></i></label>
							<input type="radio" id="cm_star-5" name="fb" value="5"/>
						</div>
					 </div>
						<div class="preco-produto">
						<div class="valor-total">R$ 64,80</div>
						<div class="parcela-valor">
						até <span>3x</span> de <span>R$ 21,60</span> sem juros ou <span>R$ 58,32</span> via Depósito
						</div>
						<div class="comprar-produto">
						<a class="btn-vermais" href="comprar.php">VER MAIS</a>
						</div>
						</div>
					</div>

				</div>
				</div>
			</li>
		</ul>
  </div>
</div><!-- FIM CONTEINAR -->
<div class="container"><!-- CONTAINER -->
	<div class="row">
		<ul class="banner-produto-destaque">
			<li >
				<div class="col-lg-8 col-md-4 col-sm-12 col-xm-12">
					<div class="product">
					<a href="#" ><img class="img-categoria img-categoria-banner img-categoria-custom " src="imagens/produtos/blusas/blusa1.png" alt="" title=""></a>
					</div>
				</div>
			</li>
			<li>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
				<div class="product">
				<a href="#" ><img class="img-categoria iimg-categoria-banner img-categoria-custom" src="imagens/produtos/regata/regata2.png" alt="" title=""></a>
				</div>
			</div>
			</li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row">
			<ul class="banner-produto-destaque">
				<li>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
					<div class="product">
					<a href="#" ><img class="img-categoria img-categoria-banner img-categoria-custom" src="imagens/produtos/regata/babylook long.png" alt="" title=""></a>
					</div>
				</div>
				</li>
				<li>
				<div class="col-lg-8 col-md-4 col-sm-12 col-xm-12">
					<div class="product">
					<a href="#" ><img class="img-categoria img-categoria-banner img-categoria-custom" src="imagens/produtos/regata/almofadas.png" alt="" title=""></a>
					</div>
				</div>
				</li>
			</ul>
			</div>
</div><!-- FIM CONTAINER -->


<footer>
	<div class="container-fluid">
		<div class="container"><!-- CONTAINER -->
			<div class="row">
			<div class="title-lancamento text-center"><i class="fab fa-2x fa-instagram"></i>  SIGA NOSSO <a href="#">INSTAGRAM@HOLLY</a></div>
				<h2 class="text-center">embed do instagram</h2>
			</div>
		</div><!-- FIM  CONTAINER -->

	<section class="home-newsletter">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="single">
						<h2>RECEBA NOSSAS OFERTAS POR E-MAIL</h2>
					<div class="input-group">
						<input type="email" class="form-control" placeholder="E-mail">
						<span class="input-group-btn">
						<button class="btn btn-theme" type="submit">Subscribe</button>
						</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

			<div class="lg-col-3 col-md-3 col-sm-12 col-xm-12">
				<div class="">
					<img class="img-responsive" src="imagens/site/HOLLY-LOGO.png">
					<!-- Cololar texto sobre a loja -->
				</div>
			</div>

			<div class="lg-col-3 col-md-3 col-sm-12 col-xm-12">
				<div class="">
						<span class="title-footer">Categorias</span>
				</div>
			<ul class="list-footer">
					<li><a href="#">Legging</a></li>
					<li><a href="#">COLLECTIONS</a></li>
					<li><a href="#">Decoração & Arte</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Agasalhos</a></li>
					<li><a href="#">Camisetas</a></li>
					<li><a href="#">Baby Look Long</a></li>
					<li><a href="#">Regatas</a></li>
					<li><a href="#">PROMOÇÕES</a></li>
				</ul>
			</div>

			<div class="lg-col-3 col-md-3 col-sm-12 col-xm-12">
				<div class="">
						<span class="title-footer">CONTEÚDO</span>
				</div>
				<ul class="list-footer">
					<li><a href="#">Fale Conosco</a></li>
					<li><a href="#">Faq</a></li>
					<li><a href="#">Formas de pagamentos</a></li>
					<li><a href="#">Frete</a></li>
					<li><a href="#">Na estrada dos estilosos!</a></li>
					<li><a href="#">Política de privacidade</a></li>
					<li><a href="#">Política de trocas</a></li>
					<li><a href="#">Prazos de entrega</a></li>
					<li><a href="#">Sobre nós</a></li>
					<li><a href="#">Tabela de medidas</a></li>
					<li><a href="#">Vídeos</a></li>
				</ul>
			</div>

			<div class="lg-col-3 col-md-3 col-sm-12 col-xm-12">
				<div class="">
						<span class="title-footer">social</span>
				</div>
				<ul class="list-footer">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Linkdin</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">whatsapp</a></li>
				</ul>
			</div>

				<div class="lg-col-6 col-md-6 col-sm-12 col-xm-12">
					<div class="coi-lg-8 col-md-8">
						<div class="" style="margin-bottom: 30px;">
							<span class="title-footer">Pague Com</span>
							<img class="img-responsive" src="imagens/site/forma de pagamento.png">
						</div>
					</div>
				</div>

				<div class="lg-col-6 col-md-6 col-sm-12 col-xm-12">
					<div class="coi-lg-8 col-md-8">
						<div class="" style="margin-bottom: 30px;">
							<span class="title-footer">SELOS</span>
							<img class="img-responsive" src="imagens/site/internet-segura.jpg">
						</div>
					</div>
				</div>
			</div>



	<div class="text-center copy" >
			<a href="#">© 2018 Company HOLLY.<o/a></li>
	</div>

	</footer>
		<script src="./js/script.js"></script>
	</body>
</html>
