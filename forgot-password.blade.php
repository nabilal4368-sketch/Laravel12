@extends('layouts.guest')

@section('title', 'Forgot Password')

@section('content')
<div class="row min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Password Recovery</h3>
            </div>
            <div class="card-body">
                {{-- Pesan sukses (link reset sudah dikirim) --}}
                @if (session('status'))
                    <div class="alert alert-success mb-3">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="small mb-3 text-muted">
                    Enter your email address and we will send you a link to reset your password.
                </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="form-floating mb-3">
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autofocus
                               placeholder="name@example.com">
                        <label for="email">Email address</label>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <a class="small" href="{{ route('login') }}">Return to login</a>
                        <button type="submit" class="btn btn-primary">Send Reset Link</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small">
                    <a href="{{ route('register') }}">Need an account? Sign up!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
