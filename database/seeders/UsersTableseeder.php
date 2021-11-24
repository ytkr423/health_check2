<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者
        \App\Models::create([
            'name'=>'管理者X',
            'email'=>'owner@email.com',
            'password'=>bcrypt('xxxxxxxx'),
            'role'=>'owner'
        ]);

        // 患者さん
        \App\Models::create([
            'name'=>'患者様X',
            'email'=>'customer@email.com',
            'password'=>bcrypt('yyyyyyyy'),
            'role'=>'customer'
        ]);
    }
}
