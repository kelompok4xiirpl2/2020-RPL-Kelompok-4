@extends('layouts.master')

@section('content1')

        

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">TABLE QUESTIONS</h3>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                     
                      <th>Nama</th>
                      <th>Class</th>
                      <th>Subject</th>
                      <th>question</th>
                     
                      <th><center>ACTION</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; ?>
                    @foreach($tuestion as $a)
                    <?php $no++ ?>
                    <tr>
                      
                      <td>{{$a->name}}</td>
                      <td>{{$a->class_name}}</td>
                      <td>{{$a->subject}}</td>
                      <td>{{$a->question}}</td>
                      
                      <td><a href="/question/{{$a->id}}/answer" class="btn btn-primary" type="Button">ANSWER</a>
                        <a href="/question/{{$a->id}}/answer" class="btn btn-primary" type="Button">View Abswer</a>
                      <a href="/question/{{$a->id}}/delete" class="btn btn-primary" type="Button">DELETE</a>

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