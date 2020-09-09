@extends('layouts.master')
@section('content1')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Announcement</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{URL::to('admin/announcement/edit')}}" role="form">
                @csrf
                @foreach($data as $a)
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title Announcement</label>
                    <input value="{{$a->title}}" name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                  </div>

                    
                  
                  <input type="hidden" name="id" value="{{$a->id}}">
                   
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
                    <textarea  cols="140" rows="5" name="description">{{$a->description}}</textarea>
                  </div>
                 
                <!-- /.card-body -->
                @endforeach
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </form>
            </div>

  @endsection