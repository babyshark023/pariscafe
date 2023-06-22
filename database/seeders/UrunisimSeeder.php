<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Urunisim;


class UrunisimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        DB::table('urunisim')->insert([
            'urun_adi' => 'Kremalı Makaron',
        ]);
        DB::table('urunisim')->insert([
            'urun_adi' => 'latte',
        ]);
    }
}
