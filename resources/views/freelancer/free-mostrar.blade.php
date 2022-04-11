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
    <h3 class="text-danger">Lista Freelancers</h3>
    <p class="text-end">Caso deseja ser Freelancer clique aqui... <a class="btn btn-success" href="{{route('freelancer.free-criar')}}"> criar</a></p>
    <div class="row g-2">
        @foreach ($free as $freel)

            <div class="col-md-6">
                <ul>
                    <li>
                        <div><h4>Nome: {{$freel->name}}</h4></div>
                        <div><h5>Especialidade: {{$freel->especialidade}}</h5></div>
                        <div>
                            <a href="">
                                <button class="btn btn-dark">Colaboração</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        @endforeach
    </div>
</div>
</div>
@endsection
