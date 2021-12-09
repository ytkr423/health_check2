<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Condition;
class MyController extends Controller{

    public function index(Request $request){
    
        $view = view('home');
        $users = User::orderBy('created_at', 'asc')->get();
        $conditions = Condition::orderBy('created_at', 'asc')->get();

        return view('home', [
            'users' => $users,
            'conditions' => $conditions,
        
        ]); 
    }

    // public function search(Request $request){
    
    //     $conditions = condition::orderBy('created_at', 'asc')->get();

    //     return view('home', [
    //         'users' => $users,
    //         'conditions' => $conditions,
    public function search(Request $request) {
        $condition = null;
        $keyword_name = null;
        if(!empty($request->name)){
            $keyword_name = $request->name;
            $query = Condition::query();
            $condition = $query->where('name','=',$keyword_name)->get();
            // $condition = $query->where('name','like',"%$keyword_name%")->get();
        }
        
        // dd($condition);
        return view('/search')->with([
            'condition' => $condition,
            'keyword_name' => $keyword_name,
            
        ]); 
    }

}