@extends('layout.app')
@section('content')
  <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
              <h2 class="pageheader-title">Todos los Temas </h2>
              <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Temas</a></li>
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
          <h5 class="card-header">Temas</h5>
          <div class="card-body">
              <div class="table-responsive ">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Tema</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($topics as $topic)
                          <tr>
                              <th scope="row">{{$topic->id}}</th>
                              <td>{{$topic->name}}</td>
                              <td>{{$topic->stage->name}}</td>
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
