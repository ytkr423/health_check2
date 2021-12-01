<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;

class ConditionController extends Controller
{
    public function create()
    {
        return view('HealthCheck.health_update');
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
