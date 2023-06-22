<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urunisim;
class UrunisimController extends Controller
{
    public function Sepetfonk(Request $request)
    {
        $urun = new Urunisim();
        $urun->urun_adi = $request->input('urun_adi');
        $urun->save();
        return redirect()->back()->with('success', 'Veriler başarıyla kaydedildi.');
    }

    public function show()
    {
        $veriler = Urunisim::select('urun_adi')->get();
        return view('sepet', compact('veriler'));

    }
}
