@extends('layout')
	
	@section('conteudo')
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
							<img class="img-responsive" src="{{ url('storage/imagens/slider/camisetas.jpg') }}" alt="Modelo1" >
						</div>
						<div class="item">
							<img class="img-responsive" src="{{ url('storage/imagens/slider/camisetas2.jpg') }}" alt="Modelo2">
						</div>
						<div class="item">
							<img class="img-responsive" src="{{ url('storage/imagens/slider/like.jpg') }}" alt="Modelo3" >
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
									<a href="#" ><img class="img-categoria" src="{{ url('storage/imagens/img-categoria/Camisetas.jpg') }}" alt="" title=""></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
							<div class="product">
									<a href="#" ><img class="img-categoria" src="{{ url('storage/imagens/img-categoria/legging.jpg') }}" alt="" title=""></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
							<div class="product">
									<a href="#" ><img class="img-categoria" src="{{ url('storage/imagens/img-categoria/vestidos.jpg') }}" alt="" title=""></a>
							</div>
						</div>
				</div>
			</div>
	</div>
	<div class="container">
			<!-- CONTAINER -->
			<div class="row">
				<img class="img-responsive banner-desck" src="{{ url('storage/imagens/Banner/entrega_seguranca.jpg') }}">
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
						<img class="produto-img" src="{{ url('/storage/imagens/produtos/camisetas/camiseta1.jpg') }}">
						<img class="img-costa" src="{{ url('/storage/imagens/produtos/camisetas/camiseta1-costa.jpg') }}">
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
						<a class="btn-vermais" href="{{ route('comprar') }}">VER MAIS</a>
						</div>
							</div>
						</div>
	
					</div>
					</div>
				</li>
	
				<li>
					<div class=" col-lg-3">
					<div class="produto-box">
						<img class="produto-img" src="{{ url('storage/imagens/produtos/camisetas/camiseta2.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/camisetas/camiseta2-costa.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/camisetas/camiseta3.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/camisetas/camiseta3-costa.jpg')}}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/camisetas/blusa1.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/camisetas/blusa1-costa.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/legging/legging1.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/legging/legging1-lado.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/legging/legging2.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/legging/legging2-lado.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/legging/legging3.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/legging/legging3-lado.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/legging/legging2.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/legging/legging2-lado.jpg') }}">
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
					<img class="produto-img" src="{{ url('storage/imagens/produtos/vestidos/vestido2.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/vestidos/vesstido2-costa.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/vestidos/vestido2.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/vestidos/vesstido2-costa.jpg') }}">
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
					<img class="produto-img" src="{{ url('storage/imagens/produtos/vestidos/vestido3.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/vestidos/vesstido2-costa.jpg') }}">
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
					<img class="produto-img" src="{{ url('storage/imagens/produtos/vestidos/vestido2.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/vestidos/vesstido2-costa.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/camisetas/camiseta1.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/camisetas/camiseta1-costa.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/camisetas/camiseta2.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/camisetas/camiseta2-costa.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/camisetas/camiseta3.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/camisetas/camiseta3-costa.jpg') }}">
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
						<img class="produto-img" src="{{ url('storage/imagens/produtos/camisetas/blusa1.jpg') }}">
						<img class="img-costa" src="{{ url('storage/imagens/produtos/camisetas/blusa1-costa.jpg') }}">
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
						<a href="#" ><img class="img-categoria img-categoria-banner img-categoria-custom " 
							src="{{ url('storage/imagens/produtos/blusas/blusa1.png')}}" alt="" title=""></a>
						</div>
					</div>
				</li>
				<li>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
					<div class="product">
					<a href="#" >
						<img class="img-categoria iimg-categoria-banner img-categoria-custom" 
						src="{{ url('storage/imagens/produtos/regata/regata2.png') }}" alt="" title="">
					</a>
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
						<a href="#" ><img class="img-categoria img-categoria-banner img-categoria-custom" 
							src="{{ url('storage/imagens/produtos/regata/babylook long.png') }}" alt="" title=""></a>
						</div>
					</div>
					</li>
					<li>
					<div class="col-lg-8 col-md-4 col-sm-12 col-xm-12">
						<div class="product">
						<a href="#" ><img class="img-categoria img-categoria-banner img-categoria-custom" 
							src="{{ url('storage/imagens/produtos/regata/almofadas.png') }}" alt="" title=""></a>
						</div>
					</div>
					</li>
				</ul>
				</div>
	</div><!-- FIM CONTAINER -->
	@endsection
