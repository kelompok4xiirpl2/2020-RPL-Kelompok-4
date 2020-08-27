@extends('layouts.master')

@section('content1')

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">MANAGE CLASSES</h1> 
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
                <h3 class="card-title">TABLE CLASSES</h3>

                <div class="card-tools">
                <a href="class/create" align="right" class="btn btn-success">ADD CLASS</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                     
                      <th>ID</th>
                      <th>Name Class</th>
                      <th>Majors</th>
                     
                      <th><center>ACTION</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; ?>
                    @foreach($data as $a)
                    <?php $no++ ?>
                    <tr>
                    
                      <td>{{$a->id}}</td>
                      <td>{{$a->class_name}}</td>
                      <td>{{$a->majors}}</td>
                      
                      <td>
                     <a class="btn btn-danger" type="Button" href="class/{{$a->id}}/delete">DELETE</a>
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