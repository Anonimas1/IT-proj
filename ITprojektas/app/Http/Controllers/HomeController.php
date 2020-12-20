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
    public function lost()
    {
        $animals = Animal::all()->where('state', 1);
        return view('home.index', compact('animals'));
    }
    public function found()
    {
        $animals = Animal::all()->where('state', 2);
        return view('home.index', compact('animals'));
    }
}
