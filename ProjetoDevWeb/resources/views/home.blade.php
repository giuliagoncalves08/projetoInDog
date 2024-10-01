@extends('layout.app')

@section('conteudo')

<header>
        <div class="logo">
            <img src="images/Logo.png" alt="Indog logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">SUPORTE</a></li>
                <li><a href="#">WORK</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </nav>
</header>

<main>
    <div class="triangle"></div>

    <div class="textoInicio">
        <h1 id="texto"> Seja Bem vindo a In-Dog </h1>
        <p>Você não tem tempo para sair com seu <br> pet por conta da rotina, mas não abre<br> mão do seu filhote?</p>
        <h2 id="txtSolucao">Nós somos a solução !</h2>
        <button>SAIBA MAIS</button>
    </div>

    <img src="images/Dog.png" alt="" id="dog">

            
</main>

    

<footer>
        
</footer>

@endsection