<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsUpdateTableSeeder extends Seeder
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
            \DB::table('conditions')->where('id',$cnt)->update([
            'temperature_morning' => 26.5,
            'temperature_afternoon' =>36.5,
        ]);
    }
        
        
    }
}
