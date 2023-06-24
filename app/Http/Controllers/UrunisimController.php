<?php

namespace App\Http\Controllers;

use App\Models\Urunekle;
use Illuminate\Http\Request;
use App\Models\Urunisim;
class UrunisimController extends Controller
{
    public function Sepetfonk(Request $request)
    {
        $urun = new Urunekle();
        $urun->urun_adi = $request->input('urun_adi');
        $urun->urun_cesit = $request->input('urun_cesit');
        $urun->urun_fiyat = $request->input('urun_fiyat');
        $urun->save();
        return redirect()->back()->with('success', 'Veriler başarıyla kaydedildi.');
    }

    public function show()
    {
        $veriler = Urunekle::all();
        $total=Urunekle::sum('urun_fiyat');

        return view('sepet', ['veriler' => $veriler , 'total' => $total]);

    }
}
