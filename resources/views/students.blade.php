@extends('layouts.main')

@section('title', 'Alunos')

@section('content')

<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Alunos</div>

<div id="students-container" class="col-md-12">
    <div id="cards-container" class="row">
        @foreach($students as $student)
        <div class="card col-md-4">
            <div class="card-body">
                <h5 class="card-title">{{ $student->name }}</h5>
                <p class="card-text"> RA: {{ $student->RA }}</p>
                <p class="card-text"> Email: {{ $student->email }}</p>
                <p class="card-text"> Cursando: {{ $student->subject->name }}</p>
                <a href="#" class="btn btn-dark">Mais Informações</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div id="students-container" class="col-md-12">
    <div id="cards-container" class="row">
        @foreach($students as $student)
        <div class="card col-md-4">
            <div class="card-body">
                <h5 class="card-title">{{ $student->name }}</h5>
                <p class="card-text"> RA: {{ $student->RA }}</p>
                <p class="card-text"> EMAIL: {{ $student->email }}</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $student->name }}</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @foreach($students as $student)
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $student->name }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>RA: {{ $student->RA }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    @endforeach
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Mais Informações</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nome</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p> RA: </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection