<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            'book_id' => 1,
            'author' => 'Handoko',
            'publisher' => 'Erlang Corp',
            'year' => 2005,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 2,
            'author' => 'Robert Kiyosaki',
            'publisher' => 'Times Publishing',
            'year' => 2015,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 3,
            'author' => 'Dale Carniege',
            'publisher' => 'Pocket Books',
            'year' => 1936,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 4,
            'author' => 'Ramadhan',
            'publisher' => 'MB Books',
            'year' => 2007,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 5,
            'author' => 'Alfred Mill',
            'publisher' => 'Google Books',
            'year' => 2020,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 6,
            'author' => 'Robert T Kiyosaki',
            'publisher' => 'Warner Books',
            'year' => 1997,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 7,
            'author' => 'Benjamin Graham',
            'publisher' => 'Harper & Brothers',
            'year' => 1949,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 8,
            'author' => 'Adam Wellington',
            'publisher' => 'Warner Books',
            'year' => 2010,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 9,
            'author' => 'J.K. Rowling',
            'publisher' => 'Bloomsbury Publishing',
            'year' => 1997,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);

        DB::table('details')->insert([
            'book_id' => 10,
            'author' => 'J.K. Rowling',
            'publisher' => 'Bloomsbury Publishing',
            'year' => 2001,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem autem tempora quasi totam iste, vitae sapiente consequuntur nulla nisi pariatur quia veritatis consectetur laborum iure, atque voluptatibus cupiditate unde ad.'
        ]);
    }
}
