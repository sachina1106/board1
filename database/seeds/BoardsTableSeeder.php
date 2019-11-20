<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('boards')->insert([
            [
                'name' => 'はな',
                'age' => 10,
                'comment' => 'だいたい家にいます',
            ],
            [
                'name' => 'もも',
                'age' => 10,
                'comment' => 'ご飯のとき以外帰ってきません',
            ],
        ]);
    }
}