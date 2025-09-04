@extends('layouts.guest')

@section('content')
<div class="row min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-12 col-md-10 col-lg-8 col-xl-8">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <div class="row">
                    {{-- kalau mau tetap ada gambar di sebelah kiri --}}
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    
                    {{-- form login --}}
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>

                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="form-group mb-3">
                                    <input type="email" name="email" 
                                           class="form-control form-control-user"
                                           placeholder="Enter Email Address..."
                                           required autofocus>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <input type="password" name="password" 
                                           class="form-control form-control-user"
                                           placeholder="Password" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                        <label class="custom-control-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block mb-3">
                                    Login
                                </button>

                                <a href="#" class="btn btn-google btn-user btn-block mb-2">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a>
                            </form>
                            
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('register') }}">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection
