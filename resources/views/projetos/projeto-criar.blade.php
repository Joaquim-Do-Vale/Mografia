@extends('layouts.app')

@section('conteudo')
<main class="form-signin">
    <h1 class="h3 mb-3 fw-normal">Inserir um novo Projeto:</h1>
    <form method="POST" action="{{ route('projetos.store') }}">
        @csrf
        <select class="form-control" name="user_id" id="user_id">
            @foreach ($user as $us)
                <option class="text-dark" value="{{$us->id}}">{{$us->nome_s}}</option>
            @endforeach
        </select>
        <select class="form-control" name="tem_id" id="tem_id">
            @foreach ($temas as $tem)
                <option class="text-dark" value="{{$tem->id}}">{{$tem->tema_d}}</option>
            @endforeach
        </select>
        <input class="form-control" type="text" name="projecto_d" placeholder="Nome do Projeto" required>
        {{-- <select class="form-control" name="tipo" id="tipo">
            @foreach ($tipo as $tp)
                <option class="text-dark" value="{{$tp->id}}">{{$tem->tipo}}</option>
            @endforeach
        </select> --}}

        <button type="submit" class="btn btn-success mt-1">Criar</button>
    </form>

</main>


@endsection
