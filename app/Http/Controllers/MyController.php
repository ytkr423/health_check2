<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\condition;
class MyController extends Controller{

    public function index(Request $request){
        $view = view('home');
        $users = User::orderBy('created_at', 'asc')->get();
        $conditions = condition::orderBy('created_at', 'asc')->get();

        return view('home', [
            'users' => $users,
            'conditions' => $conditions,
        
        ]); 
    }
}