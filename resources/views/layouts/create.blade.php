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
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">class</label>
                    <input name="class" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter class">
                  </div>
                   
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input name="subject" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Subject">
                  </div>

                   
                  <div class="form-group">
                    <label for="exampleInputEmail1">Teacher</label>
                    <input name="teacher" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name Teacher">
                  </div>
                  <div class="form-group">
                    <textarea cols="140" rows="30" name="description"></textarea>
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

  @endsection