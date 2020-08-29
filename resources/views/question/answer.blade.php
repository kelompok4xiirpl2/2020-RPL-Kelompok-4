@extends('layouts.master')
@section('content1')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Answer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" role="form">
                @csrf
                <div class="card-body">
                   <div class="form-group">
                   
                  </div>
                  <div class="form-group">
                    <textarea cols="140" rows="30" name="answer"></textarea>
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

  @endsection