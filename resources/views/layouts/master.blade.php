<!DOCTYPE html>
<html>


@include('layouts.admins.head')
@include('layouts.admins.navbar')

@include('layouts.admins.sidebar')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
@yield('content1')

             </div>
              </div>
               </div>
                </div>
            </body>



@include('layouts.admins.js')

</html>
