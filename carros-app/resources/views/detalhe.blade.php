@extends('Layout.main')
@section ('title', 'Detalhe do Veiculo')
@section ('content')

<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
                            <a href="/" class="logo">
							<span class="symbol"><img src="/images/logo.svg" alt="" /></span><span class="title">Ivan Gonçalves</span>
                              </a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
                <nav id="menu">
                    <h2>Menu</h2>
                 <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/teste">Inserir o seu veiculo</a></li>
           
                </ul>
    </nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Detalhe do veículo</h1>
							<span class="image main" style="width:1200px"><img src="/images/carros/{{$carros->imagem}}" alt="" /></span>
                            <b>Marca:</b> : {{$carros->marca}} <br>
                            <b>Contacto:</b> : {{$carros->Contacto}} <br>
                            <b>ilha:</b> : {{$carros->ilha}} <br>
                            <b>kilometragem:</b> : {{$carros->kilometragem}} Km<br>
							<b>Descrição</b> <br>
							<p>{{$carros->Descricao}}</p>
						</div>
					</div>

				

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>



@endsection