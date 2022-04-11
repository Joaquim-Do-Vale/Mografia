@extends('layouts.app')

@section('conteudo')
<main class="form-signin">
    <h1 class="h3 mb-3 fw-normal">Inserir um novo Freelancer:</h1>
    <form method="POST" action="{{route('freelancer.store')}}">
        @csrf
        <input class="form-control" type="text" name="nome" placeholder="Digite a Especialidades" required>

        <button type="submit" class="btn btn-success mt-1">Criar</button>
    </form>

</main>


@endsection
