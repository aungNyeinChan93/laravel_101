<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();    // factory use
        \App\Models\Post::factory(10)->create();    // factory use

        $this->call([
            Customer_seeder::class,
            Post_seeder::class,
            test_seeder::class,
        ]);
    }
}
