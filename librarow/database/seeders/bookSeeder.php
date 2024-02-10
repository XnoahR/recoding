<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('book')->insert([
            'title' => 'December',
            'author' => 'Neck Deep',
            'available' => '4',
            'cover' => '648908c086017.jpg',
            'category' => 'biography',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('book')->insert([
            'title' => 'Wake Me Up When September Ends',
            'author' => 'Green Day',
            'available' => '10',
            'cover' => '6489086b46d89.jpg',
            'category' => 'biography',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('book')->insert([
            'title' => 'Bored to Death',
            'author' => 'Blink 182',
            'available' => '7',
            'cover' => '6489083003283.jpg',
            'category' => 'horror',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('book')->insert([
            'title' => 'Together For the Kids',
            'author' => 'Blink 182',
            'available' => '4',
            'cover' => '6489083629f7b.jpg',
            'category' => 'drama',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
