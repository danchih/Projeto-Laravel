@extends('layouts.main')

@section('title', 'MateriasInfo')

@section('content')

<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Informações Detalhadas da Matéria: {{ $subject->name }}</div>

<h5> Código: </h5> 
<p> {{ $subject->codigo }}</p>

<h5> Sala: </h5> 
<p> {{ $subject->sala }}</p>

<h5> Professor: </h5> 
<p> {{ $subject->professor->name }}</p>

<h5>Alunos Matriculados: </h5>

@foreach($subject->students as $student)
    <p> -> {{ $student->name }} </p>
@endforeach


@endsection