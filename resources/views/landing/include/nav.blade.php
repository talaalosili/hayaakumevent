@if (isset($home))
    <nav class="fh5co-nav" role="navigation">
        <div id="page">
            <div class="container">

                <div class="row" style="display: flex; align-items: center; justify-content: space-between;">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"> <img src="{{ asset('images/logohayaakum-removebg-preview.png') }}"
                                alt="Logo" style="width: 12rem; height: 12rem;">

                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="{{ route('land.index') }}">Home</a></li>

                            <li class="has-dropdown">
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li><a href="{{ route('contactland.index') }}">Contact</a></li>
                            <!-- Login and Register links moved here, behind the "Home" and "Services" items -->
                        </ul>
                    </div>
                    @if (Route::has('login'))


                        @auth

                            <a href="{{ route('profile.edit', auth()->user()->id) }}"
                                class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">
                                {{ __('My Profile') }}
                            </a>
                            <!-- Logout Button -->
                            <a href="{{ route('logout') }}" class="tn btn-outline-light rounded-pill me-3 py-2 px-4 m-4"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Log
                                in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Register</a>
                            @endif
                        @endauth

                    @endif
                </div>
            </div>
        </div>
    </nav>
@else
    <nav class="fh5co-nav with-bg" role="navigation">
        <div id="page">
            <div class="container">

                <div class="row" style="display: flex; align-items: center; justify-content: space-between;">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"> <img src="{{ asset('images/logohayaakum-removebg-preview.png') }}"
                                alt="Logo" style="width: 12rem; height: 12rem;">

                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="{{ route('land.index') }}">Home</a></li>

                            <li class="has-dropdown">
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li><a href="{{ route('contactland.index') }}">Contact</a></li>
                            <!-- Login and Register links moved here, behind the "Home" and "Services" items -->
                        </ul>
                    </div>
                    @if (Route::has('login'))


                        @auth

                            <a href="{{ route('profile.edit', auth()->user()->id) }}"
                                class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">
                                {{ __('My Profile') }}
                            </a>
                            <!-- Logout Button -->
                            <a href="{{ route('logout') }}" class="tn btn-outline-light rounded-pill me-3 py-2 px-4 m-4"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Log
                                in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Register</a>
                            @endif
                        @endauth

                    @endif
                </div>
            </div>
        </div>
    </nav>
@endif
