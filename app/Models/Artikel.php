<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'artikel';

     protected $fillable = [
        'judul',
        'isi',
        'kategori1',
        'kategori2',
    ];
}