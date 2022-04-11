@extends('layouts.app')

@section('conteudo')
<main class="form-signin">
    <h1 class="h3 mb-3 fw-normal">Enviar uma solicitação:</h1>
    <form method="POST" action="{{ route('solicitacoes.store') }}">
        @csrf
        {{-- <input class="form-control" type="text" name="nome" placeholder="Nome do Freelancer" required> --}}
        <select class="form-control" name="free_id" id="nome">
            @foreach ($mostrar as $view)
                <option class="text-dark" value="{{$view->id}}">{{$view->name}}</option>
            @endforeach
        </select>
        <input class="form-control" type="text" name="nome_s" placeholder="Seu Nome" required>
        <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10" placeholder="Deixe aqui a sua Solicitação" required></textarea>

        <button type="submit" class="btn btn-success mt-1">Criar</button>
    </form>

</main>


@endsection
