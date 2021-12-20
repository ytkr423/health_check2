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
    public function update($user_id)
    {
        $user = User::find($user_id);
        $condition = Condition::find($user_id);

        return view('HealthCheck.health_update',[
            'name' =>$user->name,
            'temperature' =>$condition->temperature,
            'oxygen'=>$condition->oxygen,
            'note' =>$condition->note,

        ]);

    }
}
