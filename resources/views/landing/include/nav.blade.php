<nav class="fh5co-nav" role="navigation">
  <div id="page">
    <div class="container">
 
    <div class="row" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="col-xs-2">
          <div id="fh5co-logo">    <img src="{{ asset('images/logohayaakum-removebg-preview.png') }}" alt="Logo" style="width: 12rem; height: 12rem;">

        </div>
        </div>
        <div class="col-xs-10 text-right menu-1">
          <ul>
            <li class="active"><a href="landing.home">Home</a></li>
          
            <li class="has-dropdown">
              <a href="gallery.html">Gallery</a>
            </li>
            <li><a href="{{ route('contactland.index') }}">Contact</a></li>
            <!-- Login and Register links moved here, behind the "Home" and "Services" items -->
          </ul>
        </div>
        @if (Route::has('login'))
               
		    
                  @auth
 <!-- Logout Button -->
 <a href="{{ route('logout') }}" 
		           class="tn btn-outline-light rounded-pill me-3 py-2 px-4 m-4" 
		           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		            Logout
		        </a>

		        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		            @csrf
		        </form>                  @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Log in</a>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Register</a>
                    @endif
                  @endauth
               
              @endif
      </div>
    </div>
  </div>
</nav>

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(assets/images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="display-t">
          <div class="display-tc animate-box" data-animate-effect="fadeIn">
            <h1>Memorable Moments</h1>
            <h2>Creating unforgettable moments for your most beautiful occasions</h2>
            <p><a href="#" class="btn btn-default btn-sm">Booking Now</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
