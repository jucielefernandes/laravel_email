<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
    <fieldset>
            <h1>formulário</h1>
        <form method="post" action="{{ route('ta') }}">
            @csrf
            <div>
                <label>Destino:</label>
                <input type="email" name="destino" placeholder="Email">
            </div>
            <div>
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome">
            </div>
            <div>
                <label>Assunto</label>
                <input type="text" name="assunto" placeholder="Assunto">
            </div>

            <div>
                <label>Descrição</label>
                <input type="text" name="descricao" placeholder="Descrição">
            </div>
          
            <input type="submit" name="ok" pa>
        </form>
    </fieldset>
    </body>
</html>
