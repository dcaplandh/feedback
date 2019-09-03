@extends('layout.app')
@section('content')
  <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
              <h2 class="pageheader-title">Todos los Cursos </h2>
              <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Cursos</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Buscar</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>


<div class="row">
  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="card">
          <h5 class="card-header">Cursos</h5>
          <div class="card-body">
              <div class="table-responsive ">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Curso</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($courses as $course)
                          <tr>
                              <th scope="row">{{$course->id}}</th>
                              <td>{{$course->course}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
