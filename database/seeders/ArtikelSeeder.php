<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            'kode_jenis_artikel' => 'PL',
            'judul' => 'Banteng Merah',
            'isi' => 'Kakek Merah di sini adalah \n
            Jackpot yang bisa kalian peroleh di Higgs Domino. \n
            Jackpot JP kakek merah bisa kamu dapatkan menggunakan \n
            fitur Auto Clicker di Fafafa.. \n
            Fafafa sendiri adalah salah satu slot atau mode \n
            permainan yang tersedia di Higgs Domino.',
                       
        ]

        );
    }
}
