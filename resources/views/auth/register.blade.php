<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="wrapper" style="background-image: url('{{ asset('images/gallery-6.jpg') }}');">
        <div class="inner">
            <div class="image-holder">
                <img src="{{ asset('images/logohayaakum.PNG') }}" alt="Logo">
            </div>

            @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>Registration Form</h3>

                <div class="form-wrapper">
                    <input type="text" name="name" placeholder="name" class="form-control" value="{{ old('name') }}">
                    <i class="zmdi zmdi-email"></i>

                </div>

                <div class="form-wrapper">
                    <input type="email" name="email" placeholder="Email Address" class="form-control" value="{{ old('email') }}">
                    <i class="zmdi zmdi-email"></i>
                </div>

                <div class="form-wrapper">
                    <input type="text" name="phone" placeholder="Phone Number" class="form-control" value="{{ old('phone') }}">
                </div>
            
                <div class="form-wrapper">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>

                <div class="form-wrapper">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>

                <button type="submit">Register
               <i class="zmdi zmdi-arrow-right"></i>
             </button>
              <br>

                <div class="already-have-account">
                    <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
