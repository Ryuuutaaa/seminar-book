<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Seminar;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class KonfrimasiPesananController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['seminar', 'user'])->orderBy('created_at', 'desc')->get();

        return view("admin.kpesanan.index", compact('transactions'));
    }


    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $transaction = Transaction::findOrFail($id);
            $seminar = Seminar::findOrFail($transaction->seminar_id);

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

    public function exportPdf()
    {
        $transactions = DB::table('transaction')
            ->join('seminars', 'transaction.seminar_id', '=', 'seminars.id')
            ->join('categories', 'seminars.kategori_id', '=', 'categories.id')
            ->selectRaw('
        seminars.nama_seminar, 
        categories.kategori, 
        seminars.narasumber, 
        SUM(transaction.kursi) as total_kursi
    ')
            ->where('transaction.status', 'berhasil')
            ->groupBy('transaction.seminar_id', 'seminars.nama_seminar', 'categories.kategori', 'seminars.narasumber')
            ->get();



        $pdf = Pdf::loadView('admin.kpesanan.report-pdf', compact('transactions'));

        return $pdf->download('laporan_transaksi.pdf');
    }
}
