@extends('layouts.studentMaster')

@section('content1')

        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>MY QUESTIONS</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>NO</th>
                      
                      <th>SUBJECT</th>
                      <th>QUESTION</th>
                     
                      <th><center>ACTION</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($data as $no=>$a)
                    
                    <tr>
                      <td>{{$no+1}}</td>
                     
                      <td>{{$a->subject}}</td>
                      <td>{{$a->question}}</td>
                      <td>


                       <a href="/students/myquestion/{{$a->id}}/delete" class="btn btn-danger btn-md" type="Button">DELETE</a>  
                       
       @if($a->answer==null)
       @else
                      <a href="/students/question/{{$a->id}}/viewanswer" class="btn btn-success btn-md" type="Button">VIEW ANSWER</a>
                      @endif                         
                    

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