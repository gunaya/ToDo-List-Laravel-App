<?php

use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'cat_name' => 'personal',
        ]);;
        DB::table('categories')->insert([
        	'cat_name' => 'work',
        ]);;
        DB::table('categories')->insert([
        	'cat_name' => 'school',
        ]);;
    }
}
