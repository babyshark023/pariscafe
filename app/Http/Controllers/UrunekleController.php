<?php

namespace App\Http\Controllers;

use App\Models\Urunekle;
use Illuminate\Http\Request;

class UrunekleController extends Controller
{
    public function ekle(Request $request)
    {
        $request->validate([
            'urun_adi' => 'required',
            'urun_cesit' => 'required',
            'urun_fiyat' => 'required',
        ]);

            $urun = new Urunekle();
            $urun->urun_cesit = $request->input('urun_cesit');
            $urun->urun_adi = $request->input('urun_adi');
            $urun->urun_fiyat = $request->input('urun_fiyat');
            $urun->save();
            return redirect()->back()->with('success', 'Veriler başarıyla kaydedildi.');


    }

}
