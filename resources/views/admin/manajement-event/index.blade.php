@extends('layouts.components.admin_teamplate')

@section('title', 'Admin manajement event')

@section('content')
    <div class="container mt-3">
        <h2 class="mb-4">Daftar Event</h2>
        <a class="btn btn-primary my-3 p-2" href="{{ route('admin.manajement-event.create') }}">
            <i class="bi bi-plus-lg"></i>
            Create new event
        </a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Event</th>
                    <th>Categori</th>
                    <th>Narasumber</th>
                    <th>Tanggal</th>
                    <th>Total Kapasitas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data -->
                <tr>
                    <td>1</td>
                    <td>Coding wiht html</td>
                    <td>technology</td>
                    <td>Ir bydi tykin</td>
                    <td>19-09-8</td>
                    <td>500</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin menghapusnya?')){ /* aksi hapus */ }"><i
                                class="bi bi-trash"></i> Hapus</a>

                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>fundamental programing</td>
                    <td>technolyg</td>
                    <td>Ir bydi tykin</td>
                    <td>19-09-8</td>
                    <td>200</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin menghapusnya?')){ /* aksi hapus */ }"><i
                                class="bi bi-trash"></i> Hapus</a>

                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>creating with your self</td>
                    <td>self improfment</td>
                    <td>Ir bydi tykin</td>
                    <td>19-09-8</td>
                    <td>300</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin menghapusnya?')){ /* aksi hapus */ }"><i
                                class="bi bi-trash"></i> Hapus</a>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
