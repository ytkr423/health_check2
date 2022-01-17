<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Condition;
class MyController extends Controller{

    public function index(Request $request){
    
        //$view = view('home');
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
        // dd($request->all());
        $condition = null;
        $keyword_name = null;
        if(!empty($request->key_word)){
            $keyword_name = $request->key_word;
            if ( $request->patient_name == "患者名") {
                $query = Condition::query();
                $condition = $query->where('name','like',$keyword_name."%")->get();
                
            }
            if ($request->patient_name == "患者ID"){
                $query = Condition::query();
                $condition = $query->where('user_id','=',$keyword_name)->get();
            }
            if ($request->patient_name == "日付"){
                $query = Condition::query();
                $condition = $query->where('created_at','=',$keyword_name)->get();
            }

                
           // }


            // $condition = $query->where('name','like',"%$keyword_name%")->get();
        }

        
        // dd($condition);
        return view('/search')->with([
            'condition' => $condition,
            'keyword_name' => $keyword_name,
            
        ]); 
    }

}