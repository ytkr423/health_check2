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
            'temperature_morning' => 'required',
            'temperature_afternoon' => 'required',
            'oxygen' => 'required',
            'note' => 'required',
        ]);
       
        $inputs = $request->all();
        $id = $inputs['id'];
        $condition =Condition::find($id);
        $condition->temperature_morning=$inputs['temperature_morning'];
        $condition->temperature_afternoon=$inputs['temperature_afternoon'];
        $condition->oxygen=$inputs['oxygen'];
        $condition->note=$inputs['note'];
        $condition->save();
        return redirect()->route('user.completed');
    }
    public function delete (Request $request)
    {
        // dd($request->id);
        Condition::find($request->id)->delete();
        return redirect('/search');
    }

}
