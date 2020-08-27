@extends('layouts.master')
@section('content1')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Announcement</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" role="form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title Announcement</label>
                    <input value="{{$data->title}}" name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>

                   
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input value="{{$data->subject}}" name="subject" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Subject">
                  </div>

                   
                  <div class="form-group">
                    <label for="exampleInputEmail1">Teacher</label>
                    <input value="{{$data->teacher}}" name="teacher" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name Teacher">
                  </div>
                  <div class="form-group">
                    <textarea value="" cols="140" rows="30" name="description">{{$data->description}}</textarea>
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{URL::previous()}}" class="btn btn-danger">BACK</a>
                </div>
              </form>
            </div>

  @endsection