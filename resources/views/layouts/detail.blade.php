@extends('layouts.master')
@section('content1')


<div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  ANNOUNCEMENT
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
               <b><h5> Judul          :  {{$data->title}}<br>
                Mata Pelajaran :  {{$data->subject}}<br>
                Nama Guru      :  {{$data->teacher}}<br><br><br></b></h5>
                {{$data->description}}
                <br><br><br><br><br><br><br><br><br><br>

                <a href="{{URL::previous()}}" class="btn btn-danger">BACK</a>

              </div><!-- /.card-body -->
            </div>


@endsection
