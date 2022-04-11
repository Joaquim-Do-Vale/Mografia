@extends('layouts.app')

@section('conteudo')
{{-- <h2>Bem Vindo(a), {{ Auth::user()->name }}</h2> --}}

<div class="container">
    <h3 class="text-primary">Notificações</h3>
    <div class="row g-2">
        <a href="{{route('relatorio.app')}}">Gerar Relatório</a>
        @foreach ($notificacao as $not)

            <div class="col-md-6">
                <ul>
                    <li>
                        <div><h5>Nome: {{$not->nome_s}}</h5></div>
                        <div><h6>Descrição: {{$not->descricao}}</h6></div>
                        <div><h6>Data e hora de envio: {{$not->created_at}}</h6></div>
                    </li>
                </ul>
            </div>

        @endforeach
    </div>
</div>
</div>
@endsection
