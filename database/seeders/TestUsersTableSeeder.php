<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        //20件のテストユーザーを登録する 
        for( $cnt = 1; $cnt <= 20; $cnt++ ) { 
            \DB::table('users')->insert([
                'name' => 'テストユーザー' . $cnt,
                'email' => 'test' .$cnt . '@example.com',
                'room_no' =>$cnt . 02,
                'password' => Hash::make('testtest'),
                'address' => '東京都' .$cnt,
                'belong_to' => 'N/A',
                'phone_no' => 'N/A',
                'role' => 'kanjya',
                
            ]);
        }
        
    }
}
