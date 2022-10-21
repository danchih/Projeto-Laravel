@extends('layouts.main')

@section('title', 'Professores')

@section('content')

<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Professores</div>

<div class="card">
  <div class="card-header">
    Cadastro
  </div>
  <div class="card-body">
    <h5 class="card-title">Cadastrar Novo Professor</h5>
    <p class="card-text">Click no botão abaixo para cadastrar um novo professor na lista de professores</p>
    <a href="/professors/create" class="btn btn-dark">Cadastrar</a>
  </div>
</div>

<h3>Lista de Professores</h3>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($professors as $professor)
        <tr>
            <th scope="row">{{ $professor->id }}</th>
            <td>{{ $professor->name }}</td>
            <td>{{ $professor->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
