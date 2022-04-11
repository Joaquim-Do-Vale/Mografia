<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tema</th>
                <th scope="col">Subtema</th>
                <th scope="col">Conteudo</th>
                <th scope="col">Autor</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tema as $temas)
                <tr>
                    <th scope="row">{{$temas->id_temas}}</th>
                    <td>{{$temas->tema}}</td>
                    <td>{{$temas->subtema}}</td>
                    <td>{{$temas->conteudo}}</td>
                    <td>{{$temas->relUsers->name}}</td>
                    <td>
                        <a href="{{url("info/$temas->id_temas")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
