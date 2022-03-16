<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('videos')->insert(
            [
                [
                'judul' => 'Nam tincidunt consectetur',
                'gambar' => 'asset/img/tn-01.jpg'
            ],[
                'judul' => 'Praesent posuere rhoncus',
                'gambar' => 'asset/img/tn-02.jpg'
            ],[
                'judul' => 'Turpis massa aliquam',
                'gambar' => 'asset/img/tn-03.jpg'
            ],[
                'judul' => 'Nam tincidunt consectetur',
                'gambar' => 'asset/img/tn-04.jpg'
            ],[
                'judul' => 'Praesent posuere rhoncus',
                'gambar' => 'asset/img/tn-05.jpg'
            ],[
                'judul' => 'Turpis massa aliquam',
                'gambar' => 'asset/img/tn-06.jpg'
            ]
            ]);
    }
}