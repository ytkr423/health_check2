<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        for( $cnt = 1; $cnt <= 20; $cnt++ ) { 
            \DB::table('conditions')->insert([
            'name' => 'テストユーザー' . $cnt,
            'email' => 'test' .$cnt . '@example.com',
            'room_no' =>$cnt . 02,
            'temperature' => 26.5,
            'oxygen' => 90,
            'note' => '備考',
            'user_id' => $cnt,

        ]);
    }
        
        
    }
}
