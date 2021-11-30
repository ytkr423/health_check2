<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //1人目の管理者ユーザー
        \DB::table('users')->insert ([
            'name' => '管理者1',
            'email' => '111@example.com',
            'password' => Hash::make('test1111'),
            'belong_to' => 1,
            'phone_no' => 9087265351,
            'address' =>'N/A',
            'room_no' =>'N/A',
            'role' =>'kanrisha'
        ]);
    

        //2人目の管理者ユーザー
        \DB::table('users')->insert([
            'name' => '管理者2',
            'email' => '222@example.com',
            'password' => Hash::make('test2222'),
            'belong_to' => 2,
            'phone_no' => 9087265352,
            'address' =>'N/A',
            'room_no' =>'N/A',
            'role' =>'kanrisha'
        ]);
        
        
    }
}
