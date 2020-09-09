@extends('layouts.studentMaster')

@section('content1')

        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>TABLE ANNOUNCEMENT</b></h3>

                <div class="card-tools">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>no</th>
                      <th>Date</th>
                      <th>Title Announcement</th>
                      <th>Subject</th>
                      <th>Class</th>
                      <th>Teacher</th>
                      <th><center>ACTION</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($data as $no=>$a)
                 
                    <tr>
                      <td>{{++$no}}</td>
                      <td>{{$a->created_at}}</td>
                      <td>{{$a->title}}</td>
                      <td>{{$a->name}}</td>
                      <td>{{$a->class_name}}</td>
                      <td>{{$a->teacher_name}}</td>
                      <td>
                           <a href="{{URL::to('students/announcement/')}}/{{$a->id}}/detail" class="btn btn-primary btn-sm" type="Button">DETAIL</a> 
                         
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>


            
      </div><!-- /.container-fluid -->
    </section>
@endsection