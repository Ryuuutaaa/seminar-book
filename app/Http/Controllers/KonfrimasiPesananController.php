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
        DB::beginTransaction();

        try {
            $transaction = Transaction::findOrFail($id);
            $seminar = Seminar::findOrFail($transaction->seminar_id);

            // Update status transaksi
            $transaction->status = $request->input('status');
            $transaction->save();

            if ($transaction->status == 'berhasil') {
                $seminar->jumlah_kursi -= $transaction->kursi;
                $seminar->save();
            }

            DB::commit();

            return redirect()->route('admin.konfrimasiPesanan.index')->with('success', 'Transaction status updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.konfrimasiPesanan.index')->with('error', 'Something went wrong. Please try again.');
        }
    }
}
