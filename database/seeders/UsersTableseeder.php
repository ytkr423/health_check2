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
<<<<<<< HEAD
        // 管理者
        \App\Models::create([
            'name'=>'管理者X',
            'email'=>'owner@email.com',
            'password'=>bcrypt('xxxxxxxx'),
            'role'=>'owner'
=======
        
        //1人目の管理者ユーザー
        \DB::table('users')->insert ([
            'name' => '管理者1',
            'email' => '111@example.com',
            'password' => Hash::make('test1111'),
            'belong_to' => 1,
            'phone_no' => 9087265351,
            'address' =>'N/A',
            'room_no' =>'N/A'
>>>>>>> a7a5edb5759474d6f19ec7b6e8bbd44f29b56018
        ]);
    

<<<<<<< HEAD
        // 患者さん
        \App\Models::create([
            'name'=>'患者様X',
            'email'=>'customer@email.com',
            'password'=>bcrypt('yyyyyyyy'),
            'role'=>'customer'
=======
        //2人目の管理者ユーザー
        \DB::table('users')->insert([
            'name' => '管理者2',
            'email' => '222@example.com',
            'password' => Hash::make('test2222'),
            'belong_to' => 2,
            'phone_no' => 9087265352,
            'address' =>'N/A',
            'room_no' =>'N/A'
>>>>>>> a7a5edb5759474d6f19ec7b6e8bbd44f29b56018
        ]);
        
        
    }
}
