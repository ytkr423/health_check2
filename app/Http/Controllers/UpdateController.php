<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\condition;

class UpdateController extends Controller
{
    //体調更新ビューを表示する関数作成
    public function store(Request $request)
    {
        /*$this->validate($request, [
            
        ]);
 
        $request->*/
 
        return redirect('/update');
    }
}
