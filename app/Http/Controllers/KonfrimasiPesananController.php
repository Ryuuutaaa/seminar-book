<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Seminar;
use Illuminate\Support\Facades\DB;

class KonfrimasiPesananController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['seminar', 'user'])->get();

        return view("admin.kpesanan.index", compact('transactions'));
    }

    public function update(Request $request, $id)
    {
        // Mulai DB transaction
        DB::beginTransaction();

        try {
            // Temukan transaksi berdasarkan ID
            $transaction = Transaction::findOrFail($id);
            $seminar = Seminar::findOrFail($transaction->seminar_id);

            // Update status transaksi
            $transaction->status = $request->input('status');
            $transaction->save();

            // Update jumlah kursi di seminar jika status 'confirmed'
            if ($transaction->status == 'berhasil') {
                $seminar->jumlah_kursi -= $transaction->kursi; // Mengurangi jumlah kursi
                $seminar->save();
            }

            // Commit transaksi jika semuanya berhasil
            DB::commit();

            // Redirect dengan pesan sukses
            return redirect()->route('admin.kpesanan.index')->with('success', 'Transaction status updated successfully.');
        } catch (\Exception $e) {
            // Rollback jika terjadi error
            DB::rollBack();
            return redirect()->route('admin.kpesanan.index')->with('error', 'Something went wrong. Please try again.');
        }
    }
}
