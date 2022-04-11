@extends('layouts.app')

@section('conteudo')
<main class="form-signin">
    <h1 class="h3 mb-3 fw-normal">Inserir um novo Tema:</h1>
    <form method="POST" action="{{ route('temas.store') }}">
        @csrf
        <input class="form-control" type="text" name="tema_d" placeholder="Nome do Tema" required>

        <button type="submit" class="btn btn-success mt-1">Criar</button>
    </form>

</main>


@endsection
