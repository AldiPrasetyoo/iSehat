<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    public function show($name)
    {
        $resep = Resep::where('name', $name)->first();
        return view('user.pasien.fitur.resep.resepMakanan', compact('resep'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'makanan' => 'required|string|max:255',
            'disease_id' => 'nullable|integer|max:20',
            'bahanPembuatan' => 'required|string|max:255',
            'caraPembuatan' => 'required|string|max:255',
        ]);

        $resep = Resep::create([
            'name' => $validatedData['makanan'],
            'disease_id' => $validatedData['disease_id'],
            'bahanPembuatan' => $validatedData['bahanPembuatan'],
            'caraPembuatan' => $validatedData['caraPembuatan'],
        ]);
        return back()->with('success', 'Resep berhasil disimpan.');
    }
}
