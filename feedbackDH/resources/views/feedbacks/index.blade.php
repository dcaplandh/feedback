@extends('layout.app')
@section('content')
  <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
              <h2 class="pageheader-title">Feedback Individual </h2>
              <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Feedback</a></li>
                          <li class="breadcrumb-item" aria-current="page">Alumno</li>
                          <li class="breadcrumb-item active" aria-current="page">Entregable HTML-CSS</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="card">
      <h5 class="card-header">Entregable HTML-CSS</h5>
      <div class="card-body">
          <form action="#" id="basicform" data-parsley-validate="" novalidate="">
              <div class="form-group">
                  <label for="inputUserName">Alumno</label>
                  <select name="name" class="form-control">
                    <option>Seleccionar Alumno</option>
                    <option>Camila Gomez</option>
                    <option>Ruben Martinez</option>
                    <option>Jorge Lopez</option>
                  </select>
              </div>
              <div class="form-group d-flex align-items-center">
                  <label for="inputEmail">Estructura HTML Definición de la estructura utilizando tags semánticos.</label>
                  <input id="inputEmail" type="checkbox" name="email" class="form-control">
              </div>
              <div class="form-group d-flex align-items-center">
                  <label for="inputPassword">Estilo CSS Definición de estilos optimizada. Sin repetir reglas.</label>
                  <input id="inputPassword" type="checkbox" placeholder="Password" required="" class="form-control">
              </div>
              <div class="form-group d-flex align-items-center">
                  <label for="inputRepeatPassword">Formulario de registro Estructura y definición de los campos del formulario</label>
                  <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="checkbox" required="" placeholder="Password" class="form-control">
              </div>
              <div class="form-group d-flex align-items-center">
                  <label for="inputRepeatPassword">Comentarios</label>
                  <textarea class="form-control-" name="name" rows="8" cols="80"></textarea>
              </div>
              <div class="row">
                  <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                      <label class="be-checkbox custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Enviar por mail al alumno</span>
                      </label>
                  </div>
                  <div class="col-sm-6 pl-0">
                      <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary">Guardar</button>
                      </p>
                  </div>
              </div>
          </form>
      </div>
      </div>
    </div>
  </div>
@endsection
