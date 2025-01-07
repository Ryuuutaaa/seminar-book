@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm p-4" style="width: 400px;">
            <h3 class="text-center mb-4">Register</h3>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukan nama lengkap kamu" required>
                </div>
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
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </div>
            </form>
            <p class="text-center mt-3">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
@endsection
