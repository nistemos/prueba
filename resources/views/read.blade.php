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
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form class="row g-3">
                <div class="row g-3 col-xs-12 col-sm-4">
                    <div class="col-12">
                        <label for="txtObject" class="form-label">Objeto</label>
                        <input type="text" class="form-control" id="txtObject">
                    </div>
                    <div class="col-12">
                        <label for="slcCurrency" class="form-label">Extracto</label>
                        <div class="input-group">
                            <select class="form-select" id="slcCurrency">
                                <option selected>Choose...</option>
                                <option value="1">Todos</option>
                              </select>
                        </div>
                    </div>
                </div>

                <div class="row g-3 col-xs-12 col-sm-4">
                    <div class="col-12">
                        <label for="txtObject" class="form-label">Objeto / Descripción</label>
                        <input type="text" class="form-control" id="txtObject">
                    </div>
                </div>
                <div class="row g-3 col-xs-12 col-sm-4">
                    <div class="col-12">
                        <label for="txtObject" class="form-label">Componente</label>
                        <input type="text" class="form-control" id="txtObject">
                    </div>
                    <div class="col-md-6 d-grid gap-2">
                        <button type="button" class="btn btn-secondary">Buscar</button>

                    </div>
                    <div class="col-md-6 d-grid gap-2">
                        <button type="button" class="btn btn-success">Generar Reporte</button>
                    </div>
                </div>
            </form>
        </div>
        <hr class="mt-5" />
        <div class="table-responsive">
            <table class="table caption-top">
                <caption>Lista de resultados: 3</caption>
                <thead class="table-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First</th>
                        <th scope="col">Objeto</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha Inicio</th>
                        <th scope="col">Fecha Cierre</th>
                        <th scope="col">Responsable</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form class="row g-3">

                <div class="col-xs-12 col-md-6 col-xl-3">
                    <label for="dateInit" class="form-label">Fecha inicio (*)</label>
                    <input id="dateInit" type="date" class="form-control">
                </div>

                <div class="col-xs-12 col-md-6 col-xl-3">
                    <label for="timeInit" class="form-label">Hora inicio (*)</label>
                    <input id="timeInit" type="time" class="form-control">
                </div>

                <div class="col-xs-12 col-md-6 col-xl-3">
                    <label for="dateEnd" class="form-label">Fecha fin (*)</label>
                    <input id="dateEnd" type="date" class="form-control" placeholder="">
                </div>

                <div class="col-xs-12 col-md-6 col-xl-3">
                    <label for="timeEnd" class="form-label">Hora fin (*)</label>
                    <input id="timeEnd" type="time" class="form-control" step="60">
                </div>

                <hr class="mt-5" />
                <div class="col-12 text-center mt-2">
                  <button type="submit" class="btn btn-primary float-left">Guardar</button>
                </div>
            </form>
        </div>
      </div>
   @endsection
