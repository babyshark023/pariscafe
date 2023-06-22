<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunisim extends Model
{
    use HasFactory;
    protected $table = 'urunisim';
    protected $fillable = [
        'urun_adi'
    ];

}
