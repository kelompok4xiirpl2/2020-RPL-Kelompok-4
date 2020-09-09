@extends('layouts.studentMaster')

@section('content1')
<div class="card card">
              <div class="card-header">
                <h3 class="card-title"><b>Input Question</b></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" role="form">
                @csrf
                <div class="card-body">

                     <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                     <div class="col-sm-13">
                      
                        
                          
                          <input type="text" disabled="" class="form-control" value="{{$subject->name}}" name="">
                          
                        
                        
                      
                      
                    </div>
                  </div>
                   
                  <label>Question </label>
                  <div class="form-group">
                    <textarea cols="140" rows="5" name="description"></textarea>
                  </div>
                
                <!-- /.card-body -->
                <div class="card-footer-left">
                  <button type="submit" class="btn btn-success btn-md">Submit</button>
                </div>

              </div>

              </form>
</div>

  @endsection