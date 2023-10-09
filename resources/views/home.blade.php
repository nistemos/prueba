<!-- resources/views/child.blade.php -->

@extends('layouts.layout')

@section('content')
    <div class="card text-white bg-primary mb-3" style="max-width: 35rem;">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-red h5">Procesos / Eventos.</li>
                </ol>
            </nav>
        </div>
        <div class="card-header bg-secondary text-center">
            <div id="content-btn-open" class="d-grid gap-2">
                <a class="btn btn-transparent p-0" id="btn-open" role="button" data-bs-toggle="button">Acceder</a>
            </div>
            <div id="content-open" class="d-none">
                <a href="{{ route('create')}}" type="button" class="btn btn-outline-light p-2">
                    <i class="far fa-copy d-block"></i>
                    Crear
                </a>
                <a href="{{ route('copy')}}" type="button" class="btn btn-outline-light p-2">
                    <i class="fas fa-pen d-block"></i>
                    Copiar
                </a>
                <a href="{{ route('read')}}" type="button" class="btn btn-outline-light p-2">
                    <i class="fas fa-search-plus d-block"></i>
                    Consultar
                </a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection


