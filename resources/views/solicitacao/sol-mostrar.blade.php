@extends('layouts.app')

@section('conteudo')
{{-- <h2>Bem Vindo(a), {{ Auth::user()->name }}</h2> --}}
<div class="container">
    @if (session('success'))
        <div class="alert alert-success m-auto">
            {{session('success')}}
        </div>
    @endif
    <h3 class="text-success">Listas de pedidos</h3>
    <p class="text-end">Caso deseja criar uma solicitação clique aqui... <a class="btn btn-success" href="{{route('solicitacao.sol-criar')}}"> criar</a></p>
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Freelancer</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
              </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($solicitacao as $soli)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$soli->name}}</td>
                    <td>{{$soli->nome_s}}</td>
                    <td>{{$soli->descricao}}</td>
                    <td>
                        <a href="">
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
</div>
</div>
@endsection
