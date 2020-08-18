@extends('layouts.master')

@section('content1')

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sistem Pengumuman</h1> 
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
                <h3 class="card-title">Table Pengumuman</h3>

                <div class="card-tools">
                <a href="announcement/create" align="right" class="btn btn-success">Tambah</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>Tanggal</th>
                      <th>Judul Pengumuman</th>
                      <th>nama guru</th>
                      <th>mata pelajaran</th>
                     
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; ?>
                    @foreach($data as $a)
                    <?php $no++ ?>
                    <tr>
                      <td>{{$a->created_at}}</td>
                      <td>{{$a->title}}</td>
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
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
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