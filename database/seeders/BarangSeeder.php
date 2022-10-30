<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
        [
            'Nama_Barang' => 'Buah Naga Merah Full Jackpot',
            'Deskripsi' => 'Buah naga merupakan makhluk hidup yang tinggal
                            di bumi bukan mars',
            'Harga'    => 'Rp.12.000',
            'Stok'     => '99999999',

        ],
        [   'Nama_Barang' => 'HP EliteBook 820 G1',
            'Deskripsi' => '
                            ✅ Processor : Intel Core Ci5-4300U
            
                            ✅ Ram : 4Gb Anti Lemot
            
                            ✅ HDD 500Gb Full Speed
            
                            ✅ Display : 12 inch widescreen
                            
                            ✅ Unit Laptop Handal Dan Stylish
                                                                                   
                            KELENGKAPAN :
                            
                            ✅ UNIT LAPTOP
                            
                            ✅ CHARGER ORI
                            
                            ✅ TAS BARU
                                                                                    
                            SANGAT RECOMENDED UNTUK :
                            
                            Editing Vector Desain Grafis Corel Photoshop, Sekolah Online/Daring Dan Sebagai Media Penunjang Usaha Olshop Anda
                            
                            Fast Respon Via Admin',
            'Harga'    => 'Rp.19.000.000',
            'Stok'     => '21',
        ]
        
        ]);
    }
}
