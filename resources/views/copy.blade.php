<!-- resources/views/child.blade.php -->

@extends('layouts.layout')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-primary">volver</a>
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Información básica</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-prifile" aria-selected="false">Cronograma</button>
            <button class="nav-link" id="nav-limite-tab" data-bs-toggle="tab" data-bs-target="#nav-limite" type="button" role="tab" aria-controls="nav-limite" aria-selected="false">Límite de inquietudes</button>
            <button class="nav-link" id="nav-visita-tab" data-bs-toggle="tab" data-bs-target="#nav-visita" type="button" role="tab" aria-controls="nav-visita" aria-selected="false">Visita en sitio</button>
            <button class="nav-link" id="nav-document-oferta-tab" data-bs-toggle="tab" data-bs-target="#nav-document-oferta" type="button" role="tab" aria-controls="nav-document-oferta" aria-selected="false">Documentación petición de ofertas</button>
            <button class="nav-link" id="nav-entregables-tab" data-bs-toggle="tab" data-bs-target="#nav-entregables" type="button" role="tab" aria-controls="nav-entregables" aria-selected="false">Entregables de la oferta</button>
            <button class="nav-link" id="nav-informacion-precio-tab" data-bs-toggle="tab" data-bs-target="#nav-informacion-precio" type="button" role="tab" aria-controls="nav-informacion-precio" aria-selected="false">Información precio - básica</button>
            <button class="nav-link" id="nav-usuarios-internos-tab" data-bs-toggle="tab" data-bs-target="#nav-usuarios-internos" type="button" role="tab" aria-controls="nav-usuarios-internos" aria-selected="false">Usuarios internos</button>
            <button class="nav-link" id="nav-aprovadores-tab" data-bs-toggle="tab" data-bs-target="#nav-aprovadores" type="button" role="tab" aria-controls="nav-aprovadores" aria-selected="false">Aprobadores evaluaciones</button>
            <button class="nav-link" id="nav-oferentes-tab" data-bs-toggle="tab" data-bs-target="#nav-oferentes" type="button" role="tab" aria-controls="nav-oferentes" aria-selected="false">Oferentes</button>
        </div>
    </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form class="row g-3">
                <div class="row g-3 col-xs-12 col-sm-6">
                    <div class="col-12">
                        <label for="txtObject" class="form-label">Objeto</label>
                        <input type="text" class="form-control" id="txtObject">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </textarea>
                    </div>

                    <div class="col-12">
                      <label for="txtDescription" class="form-label">Descripción / alcance</label>
                      <input type="text" class="form-control" id="txtDescription" placeholder="Apartment, studio, or floor">
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <label for="slcCurrency" class="form-label">Moneda</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-list"></i>
                            </span>
                            <select class="form-select" id="slcCurrency">
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
                            <input id="numPresupuest" type="number" class="form-control">
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

                <hr class="mt-5" />
                <div class="col-12 text-center mt-2">
                  <button type="submit" class="btn btn-primary float-left">Siguiente</button>
                </div>
            </form>
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
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-limite-tab">
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
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-visita-tab">
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
        <div class="tab-pane fade" id="nav-document-oferta" role="tabpanel" aria-labelledby="nav-document-oferta-tab">
            <div class="table-responsive">
            <table class="table caption-top">
                <caption>Contenido - Documentación petición de ofertas / Terminos y condicones del proceso.</caption>
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Título</th>
                        <th scope="col">Contenido</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th colspan="5">
                            <div class="alert alert-info" role="alert">
                            Se requiere organizar los documentos, puede arrastrarlos y soltarlos en la posición deseada!
                        </div>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-secondary">
                Agregar contenido
            </button>
            <button type="button" class="btn btn-secondary">Biblioteca de contenidos</button>
            <button type="button" class="btn btn-secondary">Eliminar todos</button>
        </div>
        <hr class="mt-5" />
        <div class="col-12 text-center mt-2">
            <button type="submit" class="btn btn-primary float-left">Guardar</button>
            <button type="submit" class="btn btn-primary float-left">Ver</button>
        </div>
        <hr class="mt-5" />
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
