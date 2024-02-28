<div class="site-wrap" id="home-section">

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>



<header class="site-navbar site-navbar-target" role="banner">

  <div class="container">
    <div class="row align-items-center position-relative">

      <div class="col-3">
        <div class="site-logo">
          <a href="index.html"><strong>DriveEasy</strong></a>
        </div>
      </div>

      <div class="col-9  text-right">
        
        <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
          <ul class="site-menu main-menu js-clone-nav ml-auto ">
            <li class="active"><a href="index.html" class="nav-link">Home</a></li>
            <li><a href="listing.html" class="nav-link">Listing</a></li>
            <li><a href="about.html" class="nav-link">About</a></li>
            <li><a href="contact.html" class="nav-link">Contact</a></li>

            @if (Route::has('login'))
                    @auth
                    <li><x-app-layout>
                    </x-app-layout></li>  
                    @else
                      <li><a href="{{url('login')}}" class="nav-link btn btn-primary">Login</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{url('register')}}" class="nav-link  btn btn-primary">Register</a></li>
                        @endif
                    @endauth
            @endif
            
          </ul>
        </nav>
      </div>

     

      
    </div>
  </div>

</header>