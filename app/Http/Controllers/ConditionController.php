<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;
use App\Models\User;


class ConditionController extends Controller
{
    public function create($user_id)
    {
        $user = User::find($user_id);
        return view('HealthCheck.health_register',[
            'name' =>$user->name,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'temperature' => 'required',
            'oxygen' => 'required',
            'note' => 'required',
        ]);

        $inputs = $request->all();
        $condition = new Condition() ;
        $condition->fill($inputs)->save();
    
        return redirect("home");
    }

}
