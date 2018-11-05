<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
        	'title' => str_random(10),
        	'description' => str_random(20),
            'due_date' => Carbon::parse('2000-01-01'),
        	'category_id' => '1',
        	'user_id' => '1',
        ]);
        DB::table('todos')->insert([
        	'title' => str_random(10),
        	'description' => str_random(20),
            'due_date' => Carbon::parse('2000-01-01'),
        	'category_id' => '2',
        	'user_id' => '2',
        ]);
        DB::table('todos')->insert([
        	'title' => str_random(10),
        	'description' => str_random(20),
            'due_date' => Carbon::parse('2000-01-01'),
        	'category_id' => '2',
        	'user_id' => '2',
        ]);
        DB::table('todos')->insert([
        	'title' => str_random(10),
        	'description' => str_random(20),
            'due_date' => Carbon::parse('2000-01-01'),
        	'category_id' => '3',
        	'user_id' => '3',
        ]);
        DB::table('todos')->insert([
        	'title' => str_random(10),
        	'description' => str_random(20),
            'due_date' => Carbon::parse('2000-01-01'),
        	'category_id' => '3',
        	'user_id' => '3',
        ]);
        DB::table('todos')->insert([
        	'title' => str_random(10),
        	'description' => str_random(20),
            'due_date' => Carbon::parse('2000-01-01'),
        	'category_id' => '3',
        	'user_id' => '3',
        ]);
    }
}
