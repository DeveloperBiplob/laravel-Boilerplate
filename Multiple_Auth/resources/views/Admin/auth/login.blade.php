@extends('Backend.Layouts.backend_primary')
@section('title', 'Admin Login')
@section('Primary-content')
    <div class="register-page" style="min-height: 586.391px;">
    <div class="login-box">
        <div class="card">
        <div class="card-body login-card-body">
            <form action="{{ route('admin.login') }}" method="post">
                @csrf
            <div class="input-group mb-3 mt-2">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
                </div>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
                </div>
            </div>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
             @enderror
            <div class="row">
                <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                    Remember Me
                    </label>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
            </form>
            <p class="mb-0">
            Reset Password <a href="{{ route('admin.password.request') }}" class="text-center">Clink</a>
            </p>
        </div>
        <!-- /.login-card-body -->
        </div>
    </div>
    </div>
@endsection
