<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"  />
    <title>Teste para Markup</title>
</head>
<body>
    <div class="estrutura">
        <header class="cabecalho"></header>
        <div>
            <div>
                <p><a href="{{Route('RoomsList')}}">Salas</a></p>
                <p><a href="{{Route('UsersList')}}">Usuários</a></p>
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>