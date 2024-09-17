<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllrer
{
    public function isi()
    {
    
        // Mengirim variabel ke view 'home'
        return view('home');
    }
}
