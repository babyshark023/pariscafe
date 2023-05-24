<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;




class MenuController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'urun_foto'=>'required',
            'tatlı_icecek'=>'required',
            'urun_ad'=>'required',
            'urun_fiyat'=>'required',
        ]);
    }

    $data=new Menu();
    $data->urun_foto=$request->urun_foto;
    $data->tatlı_icecek=$request->tatlı_icecek;
    $data->urun_ad=$request->urun_ad;
    $data->urun_fiyat=$request->urun_fiyat;

if($request->hasFile('urun_foto')) {




$imageName=Str::slug($request->id).'.'.$request->urun_foto->getClientOriginalExtension();

$request->urun_foto->move(public_path('urun_images'),$imageName);
$data->urun_image = 'urun_images/'.$imageName;

}
$data->save();
return redirect()->roote('anasayfa');
}
