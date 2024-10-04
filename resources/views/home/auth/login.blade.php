<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!---- AOS ---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <title> Login | JVD</title>
</head>
<body>

 <!------   NAVIGATION ------>
 <div class="container-fluid  sticky-top ">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 px-3" >
            <!-- Logo -->
            <a class="navbar-brand" href="#">
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

                <!-- Login and Register Links -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('login') }} ">Login</a>
               
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-primary" href="{{ route('register-user') }}">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

    <!----------------------- Main Container -------------------------->
     <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
           <div class="featured-image mb-3">
            <img src="images/undraw_augmented_reality_re_f0qd.svg" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
       </div> 
    <!-------------------- ------ Right Box ---------------------------->
               

       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2><span class="text-primary">Login</span> your account</h2>            
                  
                </div>
                
                @error('failed')         
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            text: '{{ $message }}',
                            confirmButtonText: 'Try Again'
                        });
                    });
                </script>
                @enderror
                <!-- Error Handling -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            @if ($errors->has('email'))
                                // Show email error first
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Email Error',
                                    text: '{{ $errors->first('email') }}',
                                    confirmButtonText: 'Try Again'
                                });
                            @elseif ($errors->has('password'))
                                // Only show password error if there's no email error
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Password Error',
                                    text: '{{ $errors->first('password') }}',
                                    confirmButtonText: 'Try Again'
                                });
                            @endif
                        });
                    </script>
            <!-- Error Handling -->
                <form action="{{ route('user-login') }}" id="login-form" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="email"  value="{{ old('email') }}"class="form-control form-control-lg bg-light fs-6" placeholder="Email address">              
                    </div>    
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                    </div>
                    <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                </div>
                      </form>
                      <div class="input-group mb-3">
                        <small>Don't have account? <a href="{{route('register-user') }}">Create Account</a></small>
                     </div>
                {{-- <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                </div>
                <div class="row">
                    <small>Don't have account? <a href="{{route('register-user') }}">Create Account</a></small>
                </div> --}}
      
          </div>
       </div> 
      </div>
    </div>

    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



  
    

</body>
</html>