<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'resepmakanan';

     protected $fillable = [
        'name',
        'disease_id',
        'bahanPembuatan',
        'caraPembuatan',
    ];
}