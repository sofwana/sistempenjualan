<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $fillable = [
        'nm_pelanggan', 'alamat', 'telepon', 'email'
    ];
}