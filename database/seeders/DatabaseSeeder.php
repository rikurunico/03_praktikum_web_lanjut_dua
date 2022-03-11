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
                'gambar' => 'tn-01.jpg'
            ],[
                'judul' => 'Praesent posuere rhoncus',
                'gambar' => 'tn-02.jpg'
            ],[
                'judul' => 'Turpis massa aliquam',
                'gambar' => 'tn-03.jpg'
            ],[
                'judul' => 'Nam tincidunt consectetur',
                'gambar' => 'tn-04.jpg'
            ],[
                'judul' => 'Praesent posuere rhoncus',
                'gambar' => 'tn-05.jpg'
            ],[
                'judul' => 'Turpis massa aliquam',
                'gambar' => 'tn-06.jpg'
            ]
            ]);
    }
}