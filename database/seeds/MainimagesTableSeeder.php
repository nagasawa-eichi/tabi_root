<?php

use Illuminate\Database\Seeder;

class MainimagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mainimages')->insert([
            'root_id' => 1,
            'image_main'=>'mainimages/NC8k0RaIOWaVu62uFUx2wPN0qiv5f521nRj93YAC.png',
        ]);
        DB::table('mainimages')->insert([
            'root_id' => 2,
            'image_main'=>'mainimages/JY5770LSIsLEjUdOjEIor3GySWuVDhzU8rrAWHZM.png',
        ]);
        DB::table('mainimages')->insert([
            'root_id' => 3,
            'image_main'=>'mainimages/vVmUK03pRiQSBPOeXA2gOnI0Uh7rPLCCeaM6FtWL.png',
        ]);
    }
}
