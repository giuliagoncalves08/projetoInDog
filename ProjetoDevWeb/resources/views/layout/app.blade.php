<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InDog</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<style>

/*CSS DA PÁGINA HOME*/ 

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Josefin Sans", sans-serif;
    background-color: #fff;
    color: #fff;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    position: relative;
}

.logo img {
    width: 100px;
}

nav ul {
    font-size: 17px;
    display: flex;
    list-style: none;
}

nav ul li {
    margin-left: 50px;
}

nav ul li a {
    text-decoration: none;
    color: #93163A;
    font-weight: bold;
}

main {
    position: relative;
    height: calc(100vh - 140px);
    
}

.triangle {
    position: absolute;
    z-index: -1;
    width: 0;
    height: 0;
    border-left: 98.8vw solid #93163A;
    border-bottom: 820px solid transparent;
    position: absolute;
    top: 0;
    left: 0;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #7c102e;
    color: #93163A;
    font-size: 12px;
}


.textoInicio{
    width: 40%;
    height: 35rem;
    padding: 10% 0 0 6%;
   

}
.textoInicio p{
    font-family: "Jura", sans-serif;
    padding: 5% 0 5% 0 ;
    font-size: 20px;
  
}
.textoInicio h2{
    color: #F81D6E;
    font-family: "Josefin Sans", sans-serif;
    padding: 5% 0 8% 0 ;
    font-size: 30px;
}
.textoInicio button{
    color: #5A0022;
    background-color: #F8005C;
    border: none;
    width: 30%;
    height: 2rem;
    border-radius: 20px;
    font-weight: bold;
}
#texto{
    color: #F81D6E;
    font-family: "Josefin Sans", sans-serif;
    
    font-size: 3rem;
}
#dog{
  position: absolute;
  top: 38%;
  width: 40%;
  left: 60%;
  /* background-color: black; */
}

/*CSS DA PASTA CADASTRO DE PET*/ 

header 
{
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    background: #fff;
    width: 100%;
    
    top: 0;
}

header, nav ul 
{
    display: flex;
    justify-content: space-between;
    
}
ul li{
    list-style-type: none;
 }


.lista{
    padding: 2vh;
    color: #1E619E;
    font-weight: 500;
}
#cachorrocadastro{
    height: 50rem;
    width: 34%; 


}
#containerimg{
    width: 50%;
}
#containerimg img{
    width: 80%;
    opacity: 0.8;
}
#titulo{
    font-weight: 300;
    color: #125593;
    text-align: center;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
#container{
    display: flex;
    width: 100%;
    background-color: rgb(255, 255, 255); 
    padding-top: 3vh;
    
}

.formulario{
    border: solid 1px rgb(40, 69, 151);
    background-color: rgb(255, 255, 255);
    border-radius: 5px;
    display: block;
    margin-bottom: 2vh;
}


.titulo{
    color: #125593;
    font-weight: normal;
}

.select-estilizado {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: Arial, sans-serif;
  font-size: 16px;
  width: 200px;
}

.select-estilizado {
  padding: 0.5em 1em; 
  border: 2px solid #ccc; 
  border-radius: 0.5em; 
  font-family: Arial, sans-serif; 
  font-size: 0.9em; 
  width: 50%; 
  height: 2.2rem; 
  background-color: #D9D9D9;
  color: #000; 
}
.div1{
    display: inline-block;
    padding: 1.5rem
}

.div2{
    padding-left: 0.8rem;
}
.formulario{
    display: inline-block;
    border-style: none;
    background-color: #e0dcdc;
    border-radius: 10px;
    margin-bottom: 3.5vh;
    height: 3.8vh;
    width: 30vh;
}

.div1 label,
.div2 label {
    display: block;
    margin-bottom: 5px; 
}

.div2 label {
    display: block;
    margin-bottom: 5px; 
}

.div2 select {
    display: block;
    width: 100%; 
    margin-bottom: 10px; 
}
#botaocadastro{
    background-color: #125593;
    color: white;
    border-style: none;
    height: 2rem;
    width: 100%;
    border-radius: 25px;
    cursor: pointer;
}
select {
    width: 200px;
    padding: 10px;
    font-size: 16px;
    border-style:none;
    border-radius: 5px;
    background-color: #f9f9f9;
    color: #333;
}
option {
    background-color: #f9f9f9;
    color: #333;
}
#condicao{
    width: 30vh;
    color:#125593;
    
}

.div55{
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
    width:100%;
    padding-top:4vh;
}

#condicaoform{
    margin-bottom: 1vh;
    border-style:none;
    background-color: #e0dcdc;
    border-radius: 10px;
    margin-bottom: 3.5vh;
    height: 3.8vh;
    
}

#divmaior{
    padding-top:10vh;
}

/*style formuário edit*/

    #editar{
        display: flex;
        justify-content:center;
    }
    #edit {
        background-color: #f0f5f9; 
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        padding: 20px; 
        width:100%;
        height:100%;
        text-align: center;
    }

    h2 {
        color: #007bff; 
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #007bff; 
        text-align: left; 
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    select {
        
        background-image: linear-gradient(45deg, transparent 50%, #007bff 50%);
        background-position: calc(100% - 15px) calc(1em + 2px);
        background-size: 10px 10px;
        background-repeat: no-repeat;
        padding-right: 20px;
        cursor: pointer;
    }

    .salvar{
        background-color: #007bff; 
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

   .salvar:hover {
        background-color: #0056b3; 
    }    */
    
    /*paginaçao*/

/*.container {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.btn-create {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 20px;
    background-color: #28a745;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.btn-create:hover {
    background-color: #218838;
}


.cadastro-table {
    width: 100%;
    border-collapse: collapse;
}

.cadastro-table th, .cadastro-table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.cadastro-table th {
    background-color: #f2f2f2;
}

.btn-edit, .btn-delete {
    display: inline-block;
    margin-right: 10px;
    padding: 5px 10px;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.btn-edit {
    background-color: #79b6c9;
}

.btn-edit:hover {
    background-color: #0056b3;
}

.btn-delete {
    background-color: #79b6c9;
}

.btn-delete:hover {
    background-color: #c82333;
}
.pagination-container a.active: Este seletor aplica estilos aos elementos <a> dentro de .pagination-container que possuem a classe active. No contexto da paginação do Laravel, a classe active é adicionada automaticamente ao link correspondente à página atual.


.pagination-container {
    text-align: center;
    margin: 20px 0;
}

.pagination-container ul {
    display: inline-flex;
    padding-left: 0;
    list-style: none;
    border-radius: 4px;
}

.pagination-container li {
    margin: 0 5px;
}

.pagination-container a, .pagination-container span {
    color: #007bff;
    padding: 8px 12px;
    text-decoration: none;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.pagination-container a.active, .pagination-container span.current {
    background-color: #007bff;
    color: white;
    border: 1px solid #007bff;
}

.pagination-container a:hover:not(.active) {
    background-color: #ddd;
    color: #333;
}

*/
    
</style>


</head>
<body>
    
    <section class='container'>
        @yield('conteudo')
    </section>
            
</body>
</html>