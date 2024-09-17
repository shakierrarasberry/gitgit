<?php

use App\Http\Controllers\CobaGit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllrer;

Route::get('/hello', function () {
    return 1+1;
});

Route::get('/homee',[HomeControllrer::class,'isi']);