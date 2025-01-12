<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role_id == 1) {
            return redirect()->route('admin.index');
        } elseif ($user->role_id == 2) {
            return redirect()->route('peserta.index');
        }

        return abort(403, 'Unauthorized access.');
    }

    public function indexAdmin()
    {
        $user = Auth::user();
        if ($user->role_id !== 1) {
            return abort(403, 'Unauthorized access.');
        }

        $seminars = Seminar::with('category')->get();

        return view('admin.index', compact("seminars"));
    }


    public function indexPeserta()
    {
        $user = Auth::user();
        if ($user->role_id !== 2) {
            return abort(403, 'Unauthorized access.');
        }

        $seminars = Seminar::with('category')->get();

        return view('peserta.index', compact("seminars"));
    }
}
