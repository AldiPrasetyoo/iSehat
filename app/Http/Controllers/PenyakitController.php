<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PenyakitController extends Controller
{
    public function index(): View
    {
        $disease = Disease::latest()->paginate(10);
        return view('user.pasien.fitur.resep.penyakit', compact('disease'));
    }

    public function show($name)
    {
        $disease = Disease::where('name', $name)->first();
        if(!$disease){
            abort(404,'Error');
        }
        $resep = Resep::where('disease_id',$disease->id)->get();
        return view('user.pasien.fitur.resep.resepSehat', compact('disease', 'resep'));
    }
}
