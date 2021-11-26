<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Fiction'
        ]);

        DB::table('categories')->insert([
            'category' => 'Science'
        ]);

        DB::table('categories')->insert([
            'category' => 'Self Development'
        ]);

        DB::table('categories')->insert([
            'category' => 'Finance'
        ]);

        DB::table('categories')->insert([
            'category' => 'Science Fiction'
        ]);

        DB::table('categories')->insert([
            'category' => 'Adventure'
        ]);

        DB::table('categories')->insert([
            'category' => 'Psychological'
        ]);

        DB::table('categories')->insert([
            'category' => 'Documentary'
        ]);

        DB::table('categories')->insert([
            'category' => 'Romance'
        ]);

        DB::table('categories')->insert([
            'category' => 'Horror'
        ]);
    }
}
