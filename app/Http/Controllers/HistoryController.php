<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view("peserta.history.index");
    }

    public function booking()
    {
        return view("peserta.history.booking");
    }
}
