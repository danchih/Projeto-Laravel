@extends('layouts.main')

@section('title', 'Professores')

@section('content')

<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Professores</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">MATÉRIA</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($professors as $professor)
        <tr>
            <th scope="row">{{ $professor->id }}</th>
            <td>{{ $professor->name }}</td>
            <td>{{ $professor->email }}</td>
            <td>{{ $professor->subject->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
