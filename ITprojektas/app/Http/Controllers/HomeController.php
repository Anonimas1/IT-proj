<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class HomeController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('home.index', compact('animals'));
    }
}
