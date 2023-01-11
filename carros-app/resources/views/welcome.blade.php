@extends('Layout.main')
@section ('title', 'Iniciar')
@section ('content')

<!-- Wrapper -->
<div id="wrapper">

<!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
                <a href="/" class="logo">
                    <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Ivan Gonçalves</span>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="/teste">Inserir o seu veiculo</a></li>
           
        </ul>
    </nav>

<!-- Main -->
    <div id="main">
        <div class="inner">
            <header>
                <h1>Esta Plataforma tem como Objectivo divulgar o seu carro<br /></h1>
                <p>Para inserir o seu veiculo, clique nas 3 barras ao lado</p>
            </header>
            <section class="tiles">
                @foreach ($carros as $carro)
                <article class="style1">
                    <span class="image" >
                        <img src="images/carros/{{$carro->imagem}}" alt="" />
                    </span>
                    <a href="/detalhe/{{$carro->id}}">
                        <h2>{{$carro->marca}}</h2>
                        <div class="content">
                            <p>{{$carro->ilha}}</p>
                        </div>
                    </a>
                </article>
                
                @endforeach
            </section>
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