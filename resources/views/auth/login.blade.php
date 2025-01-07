@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm p-4" style="width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Masukan Email kammu" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukan password kamu" required>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
            </form>
            <p class="text-center mt-3">Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>
@endsection
