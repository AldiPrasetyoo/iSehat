<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|string|in:user,admin,dokter',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
            'password' => Hash::make($request->password),
        ]);
        return back()->with('success', 'Data berhasil disimpan.');
    }
}
