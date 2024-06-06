<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Artikel;

class HomeController extends Controller
{
    public function index(): View
    {
        $artikel = Artikel::latest()->paginate(10);
        return view('user.home', compact('artikel'));
    }
}
