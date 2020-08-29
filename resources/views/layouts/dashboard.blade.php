@extends('layouts.master')

@section('content1')

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ANNOUNCEMENT SYSTEM</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">TABLE ANNOUNCEMENT</h3>

                <div class="card-tools">
                <a href="announcement/create" align="right" class="btn btn-success">ADD ANNOUNCEMENT</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
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
                      <td>{{$a->created_at}}</td>
                      <td>{{$a->title}}</td>
                      <td>{{$a->class}}</td>
                      <td>{{$a->teacher}}</td>
                      <td>{{$a->subject}}</td>
                      
                      <td><a href="announcement/{{$a->id}}/detail" class="btn btn-primary" type="Button">DETAIL</a>
                     <a class="btn btn-danger" type="Button" href="announcement/{{$a->id}}/delete">DELETE</a>
                     <a class="btn btn-danger" type="Button" href="announcement/{{$a->id}}/edit">EDIT</a>
                    </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>


              </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</body>

@endsection