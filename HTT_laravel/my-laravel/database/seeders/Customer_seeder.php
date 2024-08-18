<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Customer_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'phone' => Str::random(10),
            // 'created_at ' => now(),
            // 'updated_at ' => now(),

        ]);
    }
}
