@extends('layouts.components.admin_teamplate')

@section('title', 'Admin manajement event')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Buat Event Baru</h2>
        <form>
            <!-- Nama Event -->
            <div class="mb-3">
                <label for="eventName" class="form-label">Nama Event</label>
                <input type="text" class="form-control" id="eventName" placeholder="Masukkan Nama Event" required>
            </div>

            <!-- Kategori (Dropdown) -->
            <div class="mb-3">
                <label for="eventCategory" class="form-label">Kategori</label>
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
                <label for="speaker" class="form-label">Narasumber</label>
                <input type="text" class="form-control" id="speaker" placeholder="Masukkan Nama Narasumber" required>
            </div>

            <!-- Tanggal -->
            <div class="mb-3">
                <label for="eventDate" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="eventDate" required>
            </div>

            <!-- Poster Event -->
            <div class="mb-3">
                <label for="eventPoster" class="form-label">Poster Event</label>
                <input type="file" class="form-control" id="eventPoster" accept="image/*" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Buat Event</button>
        </form>
    </div>


@endsection
