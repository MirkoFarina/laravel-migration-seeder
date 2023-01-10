<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Index(){

        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
