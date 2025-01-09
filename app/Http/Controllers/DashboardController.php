<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        if ($user->role_id == 1) {
            // Redirect ke halaman admin jika role_id adalah 1
            return redirect()->route('admin.index');
        } elseif ($user->role_id == 2) {
            // Redirect ke halaman peserta jika role_id adalah 2
            return redirect()->route('peserta.index');
        }

        // Jika role_id tidak sesuai, tampilkan halaman Unauthorized
        return abort(403, 'Unauthorized access.');
    }

    public function indexAdmin()
    {
        // Hanya bisa diakses oleh admin (role_id 1)
        $user = Auth::user();
        if ($user->role_id !== 1) {
            return abort(403, 'Unauthorized access.');
        }

        return view('admin.index');
    }

    public function indexPeserta()
    {
        // Hanya bisa diakses oleh peserta (role_id 2)
        $user = Auth::user();
        if ($user->role_id !== 2) {
            return abort(403, 'Unauthorized access.');
        }

        return view('peserta.index');
    }
}
