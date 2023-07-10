@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/user/login.css') }}">

@section('content')
<section>
<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{ route('login') }}" method="POST">
                        @csrf <!-- Include CSRF token field -->
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info">
                                <span>Remember me</span>
                                <span><input id="remember-me" name="remember_me" type="checkbox"></span>
                            </label><br>
                            <br>
                            
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                        </div>
                        <div id="register-link" class="text-right">
                            
                            <a href="#" class="text-info">Register here</a>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  
  
           
  <script>
        
        var headerSearch = document.getElementById('header-search');
        var headerBottomMenu = document.querySelector('.header-bottom-menu');
        var sliderSection = document.querySelector('.slider');
        var sliderSectionHeight = sliderSection.offsetHeight;
        var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
      
        window.addEventListener('scroll', function() {
          scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollPosition > sliderSectionHeight * 0.5) {
              headerBottomMenu.classList.add('show');
              headerSearch.classList.add('show');
            } else {
              headerBottomMenu.classList.remove('show');
              headerSearch.classList.remove('show');
            }
         
        });
        </script>
@endsection

@push('scripts')
    <script src="{{ asset('') }}"></script>
@endpush