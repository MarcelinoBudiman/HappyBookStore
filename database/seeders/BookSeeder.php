<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'category_id' => 2,
            'title' => 'Web Engineering 101'
        ]);

        DB::table('books')->insert([
            'category_id' => 3,
            'title' => 'How To Be Rich'
        ]);

        DB::table('books')->insert([
            'category_id' =>3,
            'title' => 'How To Win Friends'
        ]);

        DB::table('books')->insert([
            'category_id' => 2,
            'title' => 'Android Studio With Kotlin'
        ]);

        DB::table('books')->insert([
            'category_id' => 4,
            'title' => 'Finance 101'
        ]);

        DB::table('books')->insert([
            'category_id' => 3,
            'title' => 'Rich Dad Poor Dad'
        ]);

        DB::table('books')->insert([
            'category_id' => 4,
            'title' => 'The Intelligent Investor'
        ]);

        DB::table('books')->insert([
            'category_id' => 1,
            'title' => 'Red Scarf'
        ]);

        DB::table('books')->insert([
            'category_id' => 5,
            'title' => 'Harry Potter: The Wizard Of Oz'
        ]);

        DB::table('books')->insert([
            'category_id' => 6,
            'title' => 'Fantastic Beasts'
        ]);
    }
}
