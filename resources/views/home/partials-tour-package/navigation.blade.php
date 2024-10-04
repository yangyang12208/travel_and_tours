<!-----   NAVIGATION ------>
<div class="container-fluid sticky-top">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 px-5">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <span style="color: yellow" class="fs-1 fw-bolder">J</span>
                <span style="color: red" class="fs-1 fw-bolder">V</span>
                <span style="color: blue" class="fs-1 fw-bolder">D</span>
            </a>

            <!-- Button to toggle the navbar in smaller screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                        <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                @auth
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="#contact-us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('tour-package-page') }}">Tour Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('car-rental-page') }}">Car Rentals</a>
                    </li>              
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('hotel-reservation-page') }}">Hotels</a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="#contact-us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('tour-package') }}">Tour Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('car-rental') }}">Car Rentals</a>
                    </li>              
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('hotel-reservation') }}">Hotels</a>
                    </li>
                </ul>
                @endauth

            

                <ul class="navbar-nav ms-auto">
                    
                    @auth
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-primary medium">Welcome 
                                 {{ $details->firstname ?? Auth::user()->firstname }} {{ $details->lastname  ??  Auth::user()->lastname }}!</span>
                            @if($details && $details->user_images)
                            <img class="img-account-profile rounded-circle " height="40"  width="40"  src="{{ asset('profile-pictures/' . $details->user_images) }}" alt="Profile Image" />
                        @else
                        <img class="img-profile rounded-circle"src="{{ asset('img/undraw_profile.svg') }}" height="30" >
                        @endif

                        </a>
                        <!-- Dropdown - User Information -->
                        <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <li><a class="dropdown-item text-muted" href="{{ route('profile-user') }}" >
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                                Profile
                            </a></li>
                            <li><a class="dropdown-item text-muted" href="{{ route('settings') }}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-muted"></i>
                                Settings
                            </a></li>
                            <li><a class="dropdown-item text-muted" href="{{ route('order-history') }}">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-muted"></i>
                                Order
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>

                                <form action="{{ route('logout')}}" method="post">
                                 @csrf
                                    <button type="submit"  style="text-decoration: none; padding: 0;""><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-muted"></i>
                                        Logout</button>
                             
                                </form>
                             
                        </li>
                        </ul>
                    </li>
                  
                    @endauth
                               
           
                    @guest
                             <!-- Login and Register Links -->
                             <li class="nav-item">
                                <a class="nav-link fs-5 text-primary" href="{{ route('login') }} ">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5 text-primary" href="{{ route('register-user') }}">Register</a>
                            </li> 

                    @endguest       
                </ul>                
            </div>
            <!-- Navigation Links -->
            {{-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link fs-5 text-primary" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link fs-5 text-primary" href="">About Us</a></li>
                    <li class="nav-item"><a class="nav-link fs-5 text-primary" href="">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link fs-5 text-primary" href="{{ route('tour-package') }}">Tour Package</a></li>
                    <li class="nav-item"><a class="nav-link fs-5 text-primary" href="{{ route('car-rental') }}">Car Rentals</a></li>

                    <li class="nav-item"><a class="nav-link fs-5 text-primary" href="{{ route('hotel-reservation') }}">Hotels</a></li>
                </ul>

                <!-- Login and Register Links -->
                <ul class="navbar-nav ms-auto">
                    
                    <!-- Login and Register Links -->
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-primary" href="{{ route('login') }} ">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-primary" href="{{ route('register-user') }}">Register</a>
                        </li>
                        
                           <!--------   USER ICON    -------->
                    {{-- <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-primary medium">ADMIN NAME</span>
                            <img class="img-profile rounded-circle"src="img/undraw_profile.svg" height="30" >
                        </a>
                        <!-- Dropdown - User Information -->
                        <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <li><a class="dropdown-item text-muted" href="{{ route('profile-user') }}" >
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                                Profile
                            </a></li>
                            <li><a class="dropdown-item text-muted" href="{{ route('settings') }}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-muted"></i>
                                Settings
                            </a></li>
                            <li><a class="dropdown-item text-muted" href="{{ route('order-history') }}">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-muted"></i>
                                Order
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-muted" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-muted"></i>
                                Logout
                            </a></li>
                        </ul>
                    </li> --}}
                {{-- </ul>
            </div>  --}}
        </nav>
    </div>
</div>
