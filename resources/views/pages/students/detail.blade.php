@extends('layouts.studentMaster')
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
               <b><h5> Title Announcement : {{$data->title}}<br>
                       Subject            : {{$data->name}}<br>
                       Teacher Name       : {{$data->teacher_name}}<br><br><br></b></h5>
                       {{$data->description}}


                <br><br><br><br><br><br><br><br><br><br>

                  <div class="card-footer">
                  <a href="/students/question/{{$data->name}}" class="btn btn-primary">Ask Question</a>
                </div>
                
                

              </div><!-- /.card-body -->
            </div>


@endsection
