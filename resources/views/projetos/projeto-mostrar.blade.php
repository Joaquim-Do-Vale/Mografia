@extends('layouts.app')

@section('conteudo')
{{-- <h2>Bem Vindo(a), {{ Auth::user()->name }}</h2> --}}

<div class="container">
    @if (session('success'))
        <div class="alert alert-success m-auto">
            {{session('success')}}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger m-auto">
            {{ session('error') }}
        </div>
    @endif
    <h3>Lista de Projetos</h3>
    <p class="text-end">Caso deseja criar um projeto clique aqui... <a class="btn btn-success" href="{{route('projetos.projetos-criar')}}"> criar</a></p>
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tema</th>
                <th scope="col">Projeto</th>
                <th scope="col">Tipo</th>
                <th scope="col">Acesso</th>
                <th scope="col">Orçamento</th>
                <th scope="col">Data Início</th>
                <th scope="col">Data Fim</th>
                <th scope="col">Autor</th>
                <th scope="col">Ações</th>
              </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($projecto as $proj)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$proj->tema_d }}</td>
                    <td>{{$proj->projecto_d}}</td>
                    <td>{{$proj->tipo}}</td>
                    <td>{{$proj->acesso}}</td>
                    <td>{{$proj->orcamento}} kz</td>
                    <td>{{$proj->data_inicio}}</td>
                    <td>{{$proj->data_fim}}</td>
                    <td>{{$proj->name}}</td>
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
