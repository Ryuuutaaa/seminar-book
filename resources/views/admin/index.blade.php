@extends('layouts.components.admin_teamplate')

@section('title', 'Admin Dashboard')

@section('content') <!-- Header Cards -->
    <header class="container mt-4">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-4">Dashboard</h2>
                <p class="text-secondary fw-semibold">dashboard </p>
            </div>

            <div class="col-md-6">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Event</h5>
                        <p class="card-text fs-4">10</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Peserta</h5>
                        <p class="card-text fs-4">90</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection
