@extends('layouts.components.admin_teamplate')

@section('title', 'Admin manajement event')

@section('content')
    <div class="container mt-4">
        <div class="card p-3">
            <h2 class="mb-4">Edit Event </h2>
            <form>
                <!-- Nama Event -->
                <div class="mb-3">
                    <label for="eventName" class="form-label fw-bold">Nama Event</label>
                    <input type="text" class="form-control" id="eventName" placeholder="Masukkan Nama Event" required>
                </div>

                <!-- Kategori (Dropdown) -->
                <div class="mb-3">
                    <label for="eventCategory" class="form-label fw-bold">Kategori</label>
                    <select class="form-select" id="eventCategory" required>
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="Musik">Musik</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Workshop">Workshop</option>
                        <option value="Seminar">Seminar</option>
                    </select>
                </div>

                <!-- Narasumber -->
                <div class="mb-3">
                    <label for="speaker" class="form-label fw-bold">Narasumber</label>
                    <input type="text" class="form-control" id="speaker" placeholder="Masukkan Nama Narasumber"
                        required>
                </div>

                <!-- Tanggal -->
                <div class="mb-3">
                    <label for="eventDate" class="form-label fw-bold">Tanggal</label>
                    <input type="date" class="form-control" id="eventDate" required>
                </div>

                <!-- kapasiti -->
                <div class="mb-3">
                    <label for="eventKapasitas" class="form-label fw-bold">Kapasitas</label>
                    <input type="number" class="form-control" id="eventDate" placeholder="masukan kapasitas event"
                        required>
                </div>

                <!-- Poster Event -->
                <div class="mb-3">
                    <label for="eventPoster" class="form-label fw-bold">Poster Event</label>
                    <input type="file" class="form-control" id="eventPoster" accept="image/*" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary"
                    onclick="if(confirm('Apakah yakin ingin mengubah data?')){}">Edit Event</button>
            </form>
        </div>

    </div>


@endsection
