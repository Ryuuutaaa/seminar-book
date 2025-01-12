<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Seminar;
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
}
