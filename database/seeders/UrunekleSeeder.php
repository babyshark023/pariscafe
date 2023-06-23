<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Urunekle;


class UrunekleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('urunekle')->insert([
            'urun_cesit'=>'Tatlı',
            'urun_adi' => 'Kremalı Çilekli Makaron Kek',
            'urun_fiyat'=>'79.90'
        ]);
        DB::table('urunekle')->insert([
            'urun_cesit'=>'Tatlı',
            'urun_adi' => 'Makaron Çeşitleri',
            'urun_fiyat'=>'38.90'
        ]);
        DB::table('urunekle')->insert([
            'urun_cesit'=>'Tatlı',
            'urun_adi' => 'Muhallebi',
            'urun_fiyat'=>'79.90'
        ]);
        DB::table('urunekle')->insert([
            'urun_cesit'=>'İçecek',
            'urun_adi' => 'Filtre Kahve',
            'urun_fiyat'=>'56.90'
        ]);
        DB::table('urunekle')->insert([
            'urun_cesit'=>'İçecek',
            'urun_adi' => 'Bitki Çayı',
            'urun_fiyat'=>'48.90'
        ]);
        DB::table('urunekle')->insert([
            'urun_cesit'=>'İçecek',
            'urun_adi' => 'Latte',
            'urun_fiyat'=>'57.90'
        ]);

    }
}
