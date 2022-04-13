<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Асфальт',
            'description' => 'Кросовки для бега по асфальт',
        ]);

        DB::table('categories')->insert([
            'name' => 'LifeStyle',
            'description' => 'Кросовки для повседневной жизни',
        ]);

        DB::table('categories')->insert([
            'name' => 'Трейл',
            'description' => 'Кросовки для бега по пересеченке',
        ]);

        DB::table('categories')->insert([
            'name' => 'С мембраной',
            'description' => 'Кросовки с мембраной',
        ]);

        DB::table('categories')->insert([
            'name' => 'Без мембраны',
            'description' => 'Кросовки без мембраны',
        ]);
    }
}
