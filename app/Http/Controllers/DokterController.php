<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('user.dokter.home');
    }

    public function profil()
    {
        return view('user.dokter.profil');
    }
}
