<!-- resources/views/child.blade.php -->


@extends('layouts.layout')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-primary">volver</a>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Información básica</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Cronograma</button>
        </div>
      </nav>
        <form action="{{ route('EventoController.create') }}" method="POST">
            @csrf
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active row g-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row g-3">
                            <div class="row g-3 col-xs-12 col-sm-6">
                                <div class="col-12">
                                    <label for="txtObject" class="form-label">Objeto</label>
                                    <input type="text" name="txtObject" class="form-control" id="txtObject" value="{{ old('txtObject') }}">
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <textarea type="text" name="inputAddress" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{ old('inputAddress') }}">
                                    </textarea>
                                </div>

                                <div class="col-12">
                                <label for="txtDescription" class="form-label">Descripción / alcance</label>
                                <input type="text" name="txtDescription" class="form-control" id="txtDescription" placeholder="Apartment, studio, or floor" value="{{ old('txtDescription') }}">
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <label for="slcCurrency" class="form-label">Moneda</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-list"></i>
                                        </span>
                                        <select name="slcCurrency" class="form-select" id="slcCurrency" value="{{ old('slcCurrency') }}">
                                            <option selected>Choose...</option>
                                            <option value="1">COP</option>
                                            <option value="2">USD</option>
                                            <option value="3">EUR</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <label for="numPresupuest" class="form-label">Presupuesto</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input name="numPresupuest" id="numPresupuest" type="number" class="form-control" value="{{ old('numPresupuest') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 col-xs-12 col-sm-6">
                                <div class="col-12">
                                    <label for="txtActivity" class="form-label">Actividad</label>
                                    <div class="input-group">
                                        <input id="txtActivity" type="text" class="form-control">
                                        <span class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-5" />
                        <div class="col-12 text-center mt-2">
                            <div role="tablist">
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Cronograma</button>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade row g-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row g-3">
                        <div class="col-xs-12 col-md-6 col-xl-3">
                            <label for="dateInit" class="form-label">Fecha inicio (*)</label>
                            <input name="dateInit" id="dateInit" type="date" class="form-control" value="{{ old('dateInit') }}">
                        </div>

                        <div class="col-xs-12 col-md-6 col-xl-3">
                            <label for="timeInit" class="form-label">Hora inicio (*)</label>
                            <input name="timeInit" id="timeInit" type="time" class="form-control" value="{{ old('timeInit') }}">
                        </div>

                        <div class="col-xs-12 col-md-6 col-xl-3">
                            <label for="dateEnd" class="form-label">Fecha fin (*)</label>
                            <input name="dateEnd" id="dateEnd" type="date" class="form-control" placeholder="" value="{{ old('dateEnd') }}">
                        </div>

                        <div class="col-xs-12 col-md-6 col-xl-3">
                            <label for="timeEnd" class="form-label">Hora fin (*)</label>
                            <input name="timeEnd" id="timeEnd" type="time" class="form-control" step="60" value="{{ old('timeEnd') }}">
                        </div>
                    </div>
                    <hr class="mt-5" />
                    <div class="col-12 text-center mt-2">
                        <button type="submit" class="btn btn-primary float-left">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
   @endsection
