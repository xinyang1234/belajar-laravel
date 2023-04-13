<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


//di sintaks ini kita bisa melakukan insert, delete data di table database yang sudah kita buat dengan perintah "php artisan db:seed"
class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_profile')->insert(
            [
                'address' => 'Jember',
                'nomor_telepon' => '08XXXXXX',
                'ttl' => '2004-10-08',
                'foto' => 'picture.png'
            ]
            );
        //
    }
}
