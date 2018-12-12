<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cygnite LTD</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset("vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset("vendor/datatables/dataTables.bootstrap4.css")}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("css/sb-admin.css")}}" rel="stylesheet">
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Cygnite LTD</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar -->
      <ul class="navbar-nav mr-auto ml-md-0">
       
       
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fa fa-user-circle-o fa-1.8x"></i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nvbarDropdown">
                
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             <i class="fa fa-sign-out"></i> {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/dashboard/index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('blog/create')}}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Create Post</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{url('blog')}}">
              <i class="fas fa-fw fa-eye"></i>
              <span>View Articles</span></a>
          </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('register')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Create Staff</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{url('/dashboard/index')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

      @yield('dashboard')

    </div>
    <!-- /#wrapper -->
  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © Your Website 2018</span>
      </div>
    </div>
  </footer>

</div>
<!-- /.content-wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset("vendor/jquery-easing/jquery.easing.min.js")}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{asset("vendor/chart.js/Chart.min.js")}}"></script>
    <script src="{{asset("vendor/datatables/jquery.dataTables.js")}}"></script>
    <script src="{{asset("vendor/datatables/dataTables.bootstrap4.js")}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset("js/sb-admin.min.js")}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{asset("js/demo/datatables-demo.js")}}"></script>
    <script src="{{asset("js/demo/chart-area-demo.js")}}"></script>

  </body>

</html>
