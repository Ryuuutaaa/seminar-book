<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $seminars = Seminar::with('category')->get();
        return view("welcome", compact("seminars"));
    }
}
