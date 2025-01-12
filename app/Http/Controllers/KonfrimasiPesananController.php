<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class KonfrimasiPesananController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['seminar', 'user'])->get();

        return view("admin.kpesanan.index", compact('transactions'));
    }
}
