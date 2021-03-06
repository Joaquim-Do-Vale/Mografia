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
    <h3>Temas existentes</h3>
    <p class="text-end">Caso deseja criar tema clique aqui... <a class="btn btn-success" href="{{route('temas.create')}}"> criar</a></p>
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tema</th>
                <th scope="col">Autor</th>
                <th scope="col">Ações</th>
              </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($temas as $tema)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$tema->tema_d}}</td>
                    <td>{{$tema->name}}</td>
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
