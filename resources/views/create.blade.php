@extends('layouts.main')

@section('title', 'Novo')

@section('content')

<h2>Adicionar Filme</h2>

<form class="row g-3">
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome do Filme</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="example: Velozes e Furioso">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Categoria do Filme</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="example: Ação">
    </div>
    <input type="submit" class="btn btn-dark" value="Adicionar">
</form>


@endsection