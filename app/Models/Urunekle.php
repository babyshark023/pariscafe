<?php

namespace App\Models;

use App\Http\Controllers\UrunekleController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunekle extends Model
{
    use HasFactory;
    protected $table = 'urunekle';
    protected $fillable = [
        'urun_cesit',
        'urun_adi',
        'urun_fiyat',
    ];


}
