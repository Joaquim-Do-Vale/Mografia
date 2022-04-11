@extends('layouts.app')

@section('conteudo')
<div class="col">
    <h2>Bem Vindo(a), {{ Auth::user()->name }}</h2>
</div>
<div class="col">
    <h2>Bem Vindo</h2>
</div>
@endsection
{{-- <div class="col-8">
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
</div> --}}
