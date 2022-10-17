@extends('layouts.main')

@section('title', 'Materias')

@section('content')

<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Matérias</div>

<div id="subjects-container" class="col-md-12">
    <div id="cards-container" class="row">
        @foreach($subjects as $subject)
        <div class="card col-md-4">
            <div class="card-body">
                <h5 class="card-title">{{ $subject->name }}</h5>
                <p class="card-text"> Código: {{ $subject->codigo }}</p>
                <p class="card-text"> Sala: {{ $subject->sala }}</p>
                <p class="card-text"> Professor: {{ $subject->professor->name }}</p>
                <a href="/subjects/{{ $subject->id }}" class="btn btn-dark">Mais Informações</a>
            </div>
        </div>
        @endforeach
    </div>
</div>




@endsection