<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $users = User::where("status", "=", "active")->where("role_id", "=", 2)->get();
        return view('admin.peserta.index', compact('users'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required',
        ]);


        $user = User::find($id);
        $update = $user->update([
            'status' => $request->status
        ]);
        if ($update) {
            return redirect()->route('admin.peserta.index')
                ->with('success', 'Status berhasil diperbarui.');
        }

        return redirect()->route('admin.peserta.index')
            ->with('error', 'Status gaagal diperbarui.');
    }
}
