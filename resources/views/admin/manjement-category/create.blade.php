@extends('layouts.components.admin_teamplate')

@section('title', 'Admin Dashboard')

@section('content') <!-- Header Cards -->
    <div class="container mt-5">
        <div class="card p-3">
            <h2 class="mb-4">Tambah Kategori Baru</h2>
            <form>
                <!-- Nama Kategori -->
                <div class="mb-3">
                    <label for="categoryName" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="categoryName" placeholder="Masukkan Nama Kategori" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Tambah Kategori</button>
            </form>
        </div>
    </div>


@endsection
