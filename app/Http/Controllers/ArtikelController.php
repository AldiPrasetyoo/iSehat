<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'kategori1' => 'nullable|string|max:255',
            'kategori2' => 'nullable|string|max:255',
        ]);

        Artikel::create($validatedData);
        return back()->with('success', 'Artikel berhasil disimpan.');
    }
}
