<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garson extends Model
{
    use HasFactory;
    protected $table='garson';
    protected $fillable=[
       'masano'
    ];
}
