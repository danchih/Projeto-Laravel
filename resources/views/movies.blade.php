@extends('layouts.main')

@section('title', 'Filmes')

@section('content')

<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Filmes</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">CATEGORIA</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($movies as $movie)
        <tr>
            <th scope="row">{{ $movie->id }}</th>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->category->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection