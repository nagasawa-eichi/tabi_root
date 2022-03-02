<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'root_id' => 2,
            'destination_name' => '博多',
            'root_comment' => '博多の夜景',
            'destination_link' => 'https://yokanavi.com/feature/29316/',
        ]);
    }
}
