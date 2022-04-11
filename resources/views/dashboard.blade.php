@extends('layouts.app')

@section('conteudo')
<div class="col">
    <h2>Bem Vindo(a), {{ Auth::user()->name }}</h2>
</div>
<div class="col">
    <h2>Bem Vindo</h2>
</div>
@endsection
@section('temas')
<h2>Bem Vindo(a), {{ Auth::user()->name }}</h2>
<div class="container">
    <h3>Temas existentes</h3>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tema</th>
                <th scope="col">Subtema</th>
                <th scope="col">Conteudo</th>
                <th scope="col">Autor</th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>imond</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>imond</td>
              </tr>
        </tbody>
      </table>

</div>
</div>
<div class="col-4">
<h2>Bem Vindo</h2>
</div>
@endsection

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @can('user')
                        Dados do usuario
                    @elsecan('admin')
                        Somente o Administrador pode isso
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
