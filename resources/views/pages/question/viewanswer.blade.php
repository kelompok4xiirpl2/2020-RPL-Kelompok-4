
@if(auth()->user()->role_id==1)


@extends('layouts.master')

else 

@extends('layouts.studentMaster')

@endif
@section('content1')
<div class="card card-primary">
  <div class="card-header">
                <h3 class="card-title">VIEW ANSWER</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
          {{$data->answer}}
          </div>
            </div>
          

  @endsection