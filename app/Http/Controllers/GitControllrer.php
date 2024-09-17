<?php

namespace App\Http\Controllers;


class CobaGit extends Controller
{
    public function isi()
    {
        // Variabel yang akan dikirim
        $message = "about us!";
        $p = "webssite ini di buat dengan tujuan agar mempermudah kalian dalam belajar bahasa ingrs dari dasar,di design se simpel mungkin agar tidak membingungkan pengguna";
        $h1 ="berikut adalah beberapa kelebihan website kami";
        $names = ['mudah di gunakan', 'free', 'fitur lengkap'];

        // Mengirim variabel ke view 'home'
        return view('about_us');
    }
}