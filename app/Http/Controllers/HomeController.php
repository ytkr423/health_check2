<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Condition;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
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
    public function index()
    {
        return view('home');
    }

    /**
     * 患者ホーム画面表示
     * @param Request $request
     * @return Response
     */
    public function home()
    {
        return view('condition.patient_home');
    }


    /**
     * 医療関係者登録画面表示
     *
     * @param Request $request
     * @return Response
     */
    public function register()
    {
        return view('registration.health personnel');
    }

    /**
     * 医療関係者をデータベースに登録
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        // var_dump($requestData);
        // exit; 
        $user = new User();
        $user->name=$requestData['name'];
        $user->email=$requestData['email'];
        $user->room_no='n/a';
        $user->password = Hash::make($requestData['password']);
        $user->belong_to=$requestData['belong_to'];
        $user->phone_no=$requestData['phone_no'];
        $user->address='n/a';
        $user->role='';
        $user->save();
        return redirect()->route('user.completed');
        
    }

    /**
     * 登録完了画面表示
     *
     * @param Request $request
     * @return Response
     */
    public function completed(Request $request)
    {
<<<<<<< HEAD
        // dd($request);
=======
>>>>>>> 2c73bf455b264eda2b2adda29230fcda23b90008
        return view('registration.completed');
    }

    /**
     * 医療関係者をデータベースに登録
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        //dd($request);
        $requestData = $request->all();
        //var_dump($requestData);
        //exit; 
        $condition = new Condition();
        $condition->temperature_afternoon=$requestData['temperature_afternoon'];
        $condition->temperature_morning=$requestData['temperature_morning'];
        $condition->oxygen=$requestData['oxygen'];
        $condition->note=$requestData['note'];
        $condition->user_id=$requestData['id'];
        $condition->save();
        return redirect()->route('user.completed');
        
    }

    public function func(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return view('registration.patient',['user'=>$user]);
            

    }

    public function user_edit(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return view('registration.user_edit',['user'=>$user]);
    }

    public function edit(Request $request)
    {
        $methodname = $request->input('delete');
        if( strcmp($methodname , 'delete') == 0){
            \Log::info('destroy');
            HomeController::destroy($request);
            return redirect()->route('user.completed');
        } else {
            $requestData = $request->all();
            $id = $requestData['id'];
            $user =  User::find($id);
            $user->name=$requestData['name'];
            $user->email=$requestData['email'];
            $user->room_no=$requestData['room_no'];
            $user->belong_to=$requestData['belong_to'];
            $user->phone_no=$requestData['phone_no'];
            $user->address=$requestData['address'];
            $user->save();
            return redirect()->route('user.completed');
        }
    }
    public function delete (Request $request)
    {
        User::find($request->id)->delete();
        return redirect('/user');
    }
    public function signin (Request $request)
    {
        return view('user.signin');
    }

    public function postSignin(Request $request)
  {
        $this->validate($request,[
        'email' => 'email|required',
        'password' => 'required|min:4'
        ]);
        
        
        return redirect()->search();
        }
<<<<<<< HEAD

        public function store_patient(Request $request)
        {
                $this->validate($request,[
                'user_id' => 'required',
                'name' => 'required',
                'email' => 'required',
                'room_no' => 'required',
                'oxygen' => 'required',
                'temperature_morning' => 'required',
                'temperature_afternoon' => 'required',

            ]);
    
            $inputs = $request->all();
            $id = $inputs['id'];
            $patient=new Patient;
            $patient->user_id=$request->input('user_id');
    
            $patient->name=$request->input('name');
            $patient->email=$request->input('email');
            $patient->room_no=$request->input('room_no');
            $patient->oxygen=$request->input('oxygen');
            $patient->temperature_morning=$request->input('temperature_morning');
            $patient->temperature_afternoon=$request->input('temperature_afternoon');

            $patient->save();
        

=======
        public function condition_register (Request $request)
        {
            return view('user.signin');
        }
>>>>>>> 2c73bf455b264eda2b2adda29230fcda23b90008

    
        }
}