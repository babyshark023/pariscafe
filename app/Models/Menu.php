<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table='menu';
    protected $fillable=[
            'urun_foto'
            'tatlı_icecek'
            'urun_ad'
            'urun_fiyat'

    ]
}
