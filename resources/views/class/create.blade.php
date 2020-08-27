@extends('layouts.master')
@section('content1')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" role="form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name Class</label>
                    <input name="class_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Class">
                  </div>

                   
                  <div class="form-group">
                    <label for="exampleInputEmail1">Majors</label>
                    <input name="majors" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Majors">
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

  @endsection