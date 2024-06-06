<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $disease = Disease::latest()->paginate(10);
        return view('user.admin.dashboard', compact('disease'));
    }
}
