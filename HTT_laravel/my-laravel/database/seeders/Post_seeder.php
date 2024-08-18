<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Post_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'description' => Str::random(10),
            // 'created_at ' => now(),
            // 'updated_at ' => now(),
        ]); 
    }
}
