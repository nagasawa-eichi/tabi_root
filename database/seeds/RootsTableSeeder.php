<?php

use Illuminate\Database\Seeder;

class RootsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
        DB::table('roots')->insert([
            'name' => '福岡県',
            'comment' => '福岡県の観光地',
            'editer_genre' => 'pro',
            'prefecture' => '福岡県',
        ]);
        DB::table('roots')->insert([
            'name' => '佐賀県',
            'comment' => '佐賀県の観光地',
            'editer_genre' => 'young',
            'prefecture' => '佐賀県',
        ]);
        DB::table('roots')->insert([
            'name' => '長崎県',
            'comment' => '長崎県の観光地',
            'editer_genre' => 'pro',
            'prefecture' => '長崎県',
        ]);
   }
}