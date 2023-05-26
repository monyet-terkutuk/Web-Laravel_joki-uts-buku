<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            'judul' => 'Nightmare',
            'pengarang' => 'Avenged Sevenfold',
            'genre' => 'Nightmare',
            'penerbit' => 'Metal',
            'tgl_terbit' => date('Y-m-d'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('buku')->insert([
            'judul' => 'Nightmare',
            'pengarang' => 'Avenged Sevenfold',
            'genre' => 'Nightmare',
            'penerbit' => 'Metal',
            'tgl_terbit' => date('Y-m-d'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('buku')->insert([
            'judul' => 'Nightmare',
            'pengarang' => 'Avenged Sevenfold',
            'genre' => 'Nightmare',
            'penerbit' => 'Metal',
            'tgl_terbit' => date('Y-m-d'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('buku')->insert([
            'judul' => 'Nightmare',
            'pengarang' => 'Avenged Sevenfold',
            'genre' => 'Nightmare',
            'penerbit' => 'Metal',
            'tgl_terbit' => date('Y-m-d'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

    }
}
