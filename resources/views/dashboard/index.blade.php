<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workspace</title>
    <link rel="stylesheet" href="{{URL::asset('css/dashStyle/homeStyle.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/dashStyle/addroom.css')}}">
    <link rel="stylesheet" href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css')}}">
    <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}" charset="utf-8"></script>
     
  </head>
  
  
  <body>

    
    <!--Navbar area start-->
    <nav>
      <input type="checkbox" id="check">
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Dash<span>board</span></h3>
      </div>
      <div class="right_area">
        <a class="logout_btn" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="btn btn-outline-danger">
              {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf 
        </form> 
      </div>
   
    </nav>
    <!--Navbar area end-->
    
    <!--sidebar start-->
    <div class="container-page">
      <div class="sidebar">
        
          <div class="profile_info">
            <img src="{{URL::asset('css/dashStyle/profimage.jpg')}}" class="profile_image" alt="profile image">
            <h4>Cupa Workspace</h4>
          </div>
          <a href="{{route('home')}}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
          <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
          <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
          <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
          <a href="{{route('addroom')}}"><i class="fas fa-th"></i><span>Add Room</span></a>
          <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
          <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> 
      </div>
      <!-- Center Content start-->
      <div id="layoutSidenav_content">
        
          @yield('content')
          
        
          <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
      </div>
      <!-- Center Content end-->

    </div>
    
    <!--sidebar end-->

    
  </body>
</html>
      