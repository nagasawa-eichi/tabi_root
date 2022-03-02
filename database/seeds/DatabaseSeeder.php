<?php

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
        $this->call(MainimagesTableSeeder::class);
        $this->call(RootsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
