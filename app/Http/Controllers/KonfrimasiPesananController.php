<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfrimasiPesananController extends Controller
{
    public function index()
    {
        return view("admin.kpesanan.index");
    }
}
