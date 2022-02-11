<!DOCTYPE html>
<html>
<head>
  @include('includes.DashboardStyle')
 <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Admin Dashboard
  </title>

</head>
<body>
   

     <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" style="margin-top: 30px" href="{{ url('/home') }}">
        <img src="/admin/assets/img/brand/favicon.png" width="40" height="40" class="navbar-brand-img" alt="...">
        <h5 style="font-size: 16px;margin-top: 20px;">{{ Auth::user()->name }}</h5>
        <hr class="my-3">
      </a>
    

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="{{ url('/home') }}">
                <img src="/admin/assets/img/brand/favicon.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="{{ url('/home') }}">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ url('category/index') }}">
              <i class="ni ni-bullet-list-67 text-orange"></i> Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ url('stores/index') }}">
              <i class="ni ni-building text-info"></i> Stores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/rating') }}">
              <i class="ni ni-chart-bar-32 text-yellow"></i> Ratings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
              <i class="ni ni-button-power text-red"></i> LOG OUT
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        
        
      </div>
    </div>
  </nav>



  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        @yield('page-name')
        
        <!-- Form -->
        
        <!-- User -->
        
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    
    @yield('content')
  </div>
         
   
 
        
           
        
   
@include('includes.AppJs')
   
</body>
</html>
