<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /**
     * dashboard view
     */
    public function dashboard(){
        return view('dashboard', [
            'items' => Mobil::all()
        ]);
    }
}
