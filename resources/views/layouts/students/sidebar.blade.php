 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <!--  <a href="index3.html" class="brand-link">
      <img src="/dashboard/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">@if(auth()->user()->level==1) FORM ADMIN @else FORM SISWA @endif </span>
    </a>
 -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dashboard/dist/img/mahaputra.JFIF" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SMKS MAHAPUTRA</a>
        </div>
      </div>

      <center><p style="color: white;">{{Auth::user()->name}}</p></center>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                OPTIONS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

             
          <li class="nav-item">
                <a href="{{URL::to('students/announcement')}}" class="nav-link {{Request::path()==='students/announcement'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Announcement Lists</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/myquestion" class="nav-link {{Request::path()==='myquestion'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Question</p>
                </a>
              </li>
              
               
      
            </ul>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 