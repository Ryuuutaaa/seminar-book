<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Seminar;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view("peserta.history.index");
    }

    public function booking(string $id)
    {
        $seminar = Seminar::find($id);
        $categories = Category::all();
        return view("peserta.history.booking", compact("seminar", "categories"));
    }

    public function confirmBooking(Request $request, string $id)
    {
        $seminar = Seminar::findOrFail($id);


        $request->validate([
            'booking_kursi' => 'required|integer|min:1|max:' . $seminar->jumlah_kursi,
        ]);

        $jumlahKursi = $request->input('booking_kursi');

        if ($seminar->jumlah_kursi < $jumlahKursi) {
            return back()->with('error', 'Jumlah kursi yang dipesan melebihi kapasitas.');
        }

        $seminar->jumlah_kursi -= $jumlahKursi;
        $seminar->save();

        Transaction::create([
            'user_id' => auth()->id(),
            'seminar_id' => $seminar->id,
            'kursi' => $jumlahKursi,
            'status' => 'pending',
        ]);

        return redirect()->route('peserta.history.index')->with('success', 'Booking berhasil dikonfirmasi.');
    }
}
