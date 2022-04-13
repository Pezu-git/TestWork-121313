<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Asics Fuji Trabuko',
            'price' => 14000,
            'description' => 'Asics Fuji Trabuko',
        ]);

        DB::table('products')->insert([
            'name' => 'Asics',
            'price' => 5000,
            'description' => 'Asics black-red',
        ]);

        DB::table('products')->insert([
            'name' => 'Mizuno Wave Rider 24',
            'price' => 11000,
            'description' => 'Mizuno Wave Rider 24',
        ]);

        DB::table('products')->insert([
            'name' => 'Hoka Torrent 2',
            'price' => 11000,
            'description' => 'Hoka Torrent 2',
        ]);

        DB::table('products')->insert([
            'name' => 'Suacony Mad River',
            'price' => 4500,
            'description' => 'Suacony Mad River',
        ]);

        DB::table('products')->insert([
            'name' => 'Nike Pegasus Trail GTX',
            'price' => 12000,
            'description' => 'Nike Pegasus Trail GTX',
        ]);

        DB::table('products')->insert([
            'name' => 'Under Armour',
            'price' => 12000,
            'description' => 'Under Armour',
        ]);

        DB::table('products')->insert([
            'name' => 'New Balance 574',
            'price' => 4000,
            'description' => 'New Balance 574',
        ]);
    }
}
