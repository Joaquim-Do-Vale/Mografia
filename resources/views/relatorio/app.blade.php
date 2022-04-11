<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Logo -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.png')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mografia</title>
</head>
<body>
    @foreach ($relatorio as $rela)
        <h1>{{$rela->nome_s}}</h1>
        <p>{{$rela->descricao}}</p>
        <span>{{$rela->created_at}}</span>
    @endforeach
</body>
</html>
