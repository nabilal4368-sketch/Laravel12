@extends('layouts.guest')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Name --}}
                        <div class="form-floating mb-3">
                            <input id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required
                                   placeholder="Your Name" />
                            <label for="name">Name</label>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="form-floating mb-3">
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required
                                   placeholder="name@example.com" />
                            <label for="email">Email address</label>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="form-floating mb-3">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required
                                   placeholder="Create a password" />
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div class="form-floating mb-3">
                            <input id="password_confirmation" type="password"
                                   class="form-control"
                                   name="password_confirmation" required
                                   placeholder="Confirm your password" />
                            <label for="password_confirmation">Confirm Password</label>
                        </div>

                        {{-- Submit --}}
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Create Account
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small">
                        <a href="{{ route('login') }}">Have an account? Go to login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection