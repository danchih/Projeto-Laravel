@extends('layouts.main')

@section('title', 'NovoProfessor')

@section('content')

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