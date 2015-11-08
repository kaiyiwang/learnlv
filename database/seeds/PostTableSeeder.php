<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['title' => 'seeder title1', 'body' => 'seeder hello。world.'],
            ['title' => 'seeder title2', 'body' => 'seeder hello。world.'],
            ['title' => 'seeder title3', 'body' => 'seeder hello。world.'],
            ['title' => 'seeder title4', 'body' => 'seeder hello。world.'],
            ['title' => 'seeder title5', 'body' => 'seeder hello。world.'],
            ['title' => 'seeder title6', 'body' => 'seeder hello。world.'],

            ]);
    }
}
