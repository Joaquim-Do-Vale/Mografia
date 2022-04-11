@extends('layouts.app')

@section('conteudo')
<main class="form-signin">
    <h1 class="h3 mb-3 fw-normal">Inserir um novo Título:</h1>
    <form method="POST" action="{{ route('titulos.store') }}">
        @csrf
        <select class="form-control" name="proj_id" id="nome">
            @foreach ($projeto as $proj)
                <option class="text-dark" value="{{$proj->id}}">{{$proj->projecto_d}}</option>
            @endforeach
        </select>
        <select class="form-control" name="user_id" id="nome">
            @foreach ($temas as $tem)
                <option class="text-dark" value="{{$tem->id}}">{{$tem->tema_d}}</option>
            @endforeach
        </select>
        <input class="form-control" type="text" name="titulo_d" placeholder="Nome do Título" required>

        <button type="submit" class="btn btn-success mt-1">Criar</button>
    </form>

</main>


@endsection
