<?php

namespace App\Http\Controllers;

use App\Models\Garson;
use Illuminate\Http\Request;

class GarsonController extends Controller
{
    public function garsoncagir(){
        return view('garson');

    }
    public function cagirmasa(Request $request){
        $masa_no= new Garson();
        $masa_no->masano = $request->input('masanumarasi');
        $masa_no->save();



    }
}
