@extends('layout.app')

@section('conteudo')
<main>

        <div class="triangle"></div>
        <img src="Dog.png" alt="Dog image" id="dog">

        <div class="form-container">
            <h2>LOGIN</h2>

            <form action="/login" method="post">

            @csrf

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"  placeholder="Digite seu e-mail" required>
    
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
    
    
                <p>Não possui uma conta? 
                <a id="cadastrar" href="#">Cadastrar</a>
                </p>
    
                <button type="submit">ENTRAR</button>

                <div id="rodape">
                    © Indog Company - 2024 
                </div>

            </form>
        </div>
    
    </main>

    

    <footer>
        
    </footer>
@endsection