<?php

namespace App\Http\Controllers;

use App\Probleme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ["problemes" => Probleme::all()]);
    }
}
