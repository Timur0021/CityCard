<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CityCard</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/image/logo/icons8-автомобиль-50.png') }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/image/logo/icons8-автомобиль-50.png') }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/image/logo/icons8-автомобиль-50.png') }}"/>
    @vite(['resources/sass/component/loginregister.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="{{ asset('assets/image/pictures/grayom-Z6PH4kSs-V8-unsplash.jpg') }}" alt="">
                <div class="text">
                    <span class="text-1">Every new friend is a <br> new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
            <div class="text">
              <span class="text-1">Complete miles of journey <br> with one step</span>
              <span class="text-2">Let's get started</span>
            </div>
          </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                        <form action="{{ route('client.login.post') }}" method="POST">
                            @csrf
                            @if (Session::get('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="number" class="form-control form-control-lg" placeholder="Card Number" value="{{ old('number') }}"/>
                                </div>
                                <span>
                                    @error('number')
                                        <div class="d-block text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </span>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="tel" name="password" class="form-control form-control-lg" placeholder="Phone Number" value="{{ old('password') }}"/>
                                </div>
                                @error('password')
                                    <div class="d-block text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="text">
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="button input-box">
                                    <input type="submit" value="Sumbit">
                                </div>
                                <div class="text sign-up-text">Don't have an account?
                                    <a href="{{ route('client.register') }}">Sigup now</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
