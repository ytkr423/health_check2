<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Condition;



class UpdateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update($id)
    {
        $user = User::where('id',$id)->first();
        $condition = Condition::find($id);
        // dd($user);
        return view('HealthCheck.health_update',[
            'id' =>$condition->id,
            'name' =>$user->name,
            'temperature_morning' =>$condition->temperature_morning,
            'temperature_afternoon'=>$condition->temperature_afternoon,
            'oxygen'=>$condition->oxygen,
            'note' =>$condition->note,

        ]);

    }
}
