@extends('layouts.master')
@section('content1')
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Input Announcement</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{URL::to('admin/announcement/create')}}" role="form">
                @csrf
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title Announcement</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                     <div class="col-sm-13">
                      <select class="form-control" name="class_id" id="basic-select">
                        @if ($class->count())
                          @foreach($class as $list)
                          <option value="{{$list->id}}" {{$class_id == $list->id ? 'selected="selected"' : ''}}>{{$list->class_name}}</option>
                          @endforeach
                          @endif
                        
                      </select>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                     <div class="col-sm-13">
                      <select class="form-control" name="subject_id" id="basic-select">
                        @if ($subject->count())
                          @foreach($subject as $list)
                          <option value="{{$list->id}}" {{$subject_id == $list->id ? 'selected="selected"' : ''}}>{{$list->name}}</option>
                          @endforeach
                          @endif
                        
                      </select>
                      
                    </div>
                  </div>
                   
                   <div class="form-group">
                    <label for="exampleInputEmail1">Teacher</label>
                     <div class="col-sm-13">
                      <select class="form-control" name="teacher_id" id="basic-select">
                        @if ($teacher->count())
                          @foreach($teacher as $list)
                          <option value="{{$list->id}}" {{$teacher_id == $list->id ? 'selected="selected"' : ''}}>{{$list->teacher_name}}</option>
                          @endforeach
                          @endif
                        
                      </select>
                      
                    </div>
                  </div>

                   
                  
                  <div class="form-group">
                    <textarea cols="140" rows="5" name="description"></textarea>
                  </div>
                 
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>

  @endsection