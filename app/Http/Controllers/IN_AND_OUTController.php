<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\FloorInf;

class IN_AND_OUTController extends Controller
{
    //コントローラーの処理
    /** 
    * @param Request $request
    * @return Response
    */
    public function index(Request $request)
    {
        $floor_inf = DB::table('floor_inf')->get();
        return view('IN_AND_OUT.index', [
            'floor_inf' => $floor_inf,
        ]);
    }
}
