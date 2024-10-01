
@extends('layout.app')

@section('conteudo')
<div id="container">
    
    <div id="containerimg">
        <img src='images/cachorrocadastro.png' />
    </div>

    <div id="divmaior" >
        <h1 id="titulo">CRIE SEU CADASTRO</h1>
        <form action="/storePet" method="post">
            
        @csrf

          <div class="div1">
                <label for="nome" class="titulo">Nome do filhote:</label>
                <input type="text" id="nome" name="nomePet" class="formulario"/>

                <label for="idade" class="titulo">Idade:</label>
                <input type="text" id="idade" name="idade" class="formulario"/>
          </div>
           
          <div class="div1">
                <label for="raca" class="titulo">Raça:</label>
                <input type="text" id="raca" name="raca" class="formulario"/>


                <label for="temperamento" class="titulo">Temperamento:</label>
                <input type="text" id="temperamento" name="temperamento" class="formulario"/>
          </div>

          <div class="div2">
          <label for="porte" class="titulo" id="porte">Porte:</label>
                <select name="porte" id="porte">
                    <option value="pequeno">Pequeno</option>
                    <option value="medio">Médio</option>
                    <option value="grande">Grande</option>
                </select>
                </div>

                <div class="div2">
                <label for="sexo" class="titulo" id="sexo">Sexo:</label>
                <select name="sexo" id="sexo" class="select-estilizado">
                    <option value="feminino">Fêmea</option>
                    <option value="masculino">Macho</option>
                </select>
            </div>

            <div class="div55">
            <label for="condicao"  id="condicao">Condição Especial:</label>
            <input type="text" name="condicaoEspecial" id="condicaoform"/>
            </div>

            <button type="submit" id="botaocadastro">CADASTRAR</button>
        </form>

        
        
    </div>
</div>


@endsection
