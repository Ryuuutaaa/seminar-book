@extends('layouts.components.admin_teamplate')

@section('title', 'Admin Dashboard')

@section('content') <!-- Header Cards -->
    <div class="container mt-3">
        <h2 class="mb-4">Daftar Kategori</h2>
        <a class="btn btn-primary my-3 p-2" href="{{ route('admin.manajement-category.create') }}">
            <i class="bi bi-plus-lg"></i>
            Create new Category
        </a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data -->
                <tr>
                    <td>1</td>
                    <td>Musik</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin menghapusnya?')){ /* aksi hapus */ }"><i
                                class="bi bi-trash"></i> Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Teknologi</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin menghapusnya?')){ /* aksi hapus */ }"><i
                                class="bi bi-trash"></i> Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Workshop</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin menghapusnya?')){ /* aksi hapus */ }"><i
                                class="bi bi-trash"></i> Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection
