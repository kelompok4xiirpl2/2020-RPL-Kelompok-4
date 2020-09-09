@extends('layouts.studentMaster')

@section('content1')

        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>TABLE ANNOUNCEMENT</b></h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>no</th>
                      <th>Date</th>
                      <th>Title Announcement</th>
                      <th>Class</th>
                      <th>Teacher</th>
                      <th>Subject</th>
                      <th><center>ACTION</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; ?>
                    @foreach($data as $a)
                    <?php $no++ ?>
                    <tr>
                      <td>{{$a->id}}</td>
                      <td>{{$a->created_at}}</td>
                      <td>{{$a->title}}</td>
                      <td>{{$a->class_name}}</td>
                      <td>{{$a->teacher}}</td>
                      <td>{{$a->subject}}</td>
                      <td>
                        
                      <a href="announcement/{{$a->id}}/detail" class="btn btn-primary btn-sm" type="Button">DETAIL</a> 
                           
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