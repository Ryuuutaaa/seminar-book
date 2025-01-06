@extends('layouts.components.admin_teamplate')

@section('title', 'Admin Dashboard')

@section('content') <!-- Header Cards -->
    <div class="container mt-3">
        <h2 class="mb-4">Daftar Peserta</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data -->
                <tr>
                    <td>1</td>
                    <td>Andi Pratama</td>
                    <td>andi@example.com</td>
                    <td>081234567890</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin menonaktifkan peserta ini?')){ /* aksi nonaktifkan */ }">Nonaktifkan</a>

                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rina Sari</td>
                    <td>rina@example.com</td>
                    <td>082345678901</td>
                    <td><span class="badge bg-danger">Nonactive</span></td>
                    <td>

                        <a href="#" class="btn btn-success btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin mengaktifkan peserta ini?')){ /* aksi aktifkan */ }">Aktifkan</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Joko Widodo</td>
                    <td>joko@example.com</td>
                    <td>083456789012</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm"
                            onclick="if(confirm('Apakah kamu yakin ingin menonaktifkan peserta ini?')){ /* aksi nonaktifkan */ }">Nonaktifkan</a>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection
