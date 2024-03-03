<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    protected $fillable = [
        'pemilik',
        'nomorHp',
        'name',
        'tipe',
        'kursi',
        'mesin',
        'bahanBakar',
        'transmisi',
        'tahun',
        'harga',
        'gambar'
    ];

    // public function image(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => asset('/storage/catalogue/' . $value)
    //     );
    // }
}
