@extends('layouts.main')

@section('title', 'Novo')

@section('content')


<div class="card">
  <div class="card-header">
    Cadastro
  </div>
  <div class="card-body">
    <h5 class="card-title">Cadastrar Novo Professor</h5>
    <p class="card-text">Click no botão abaixo para cadastrar um novo aluno na lista de alunos</p>
    <a href="/professors/create" class="btn btn-dark">Cadastrar</a>
  </div>
</div>

<h2>Cadastrar Professor</h2>

<form class="row g-3" action="/professors/create" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Professor</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Nome do Professor">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="test@example.com">
    </div>


    <input type="submit" class="btn btn-dark" value="Cadastrar">
</form>


@endsection