<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlagDaysController extends Controller
{
    public function index(Request $request)
    {
        $floor_inf = DB::table('floor_inf')->join('flag_inf', 'flag_inf.floor_id', '=', 'floor_inf.id')->get();
        return view('flagdays', [
            'floor_inf' => $floor_inf,
        ]);
    }
}
