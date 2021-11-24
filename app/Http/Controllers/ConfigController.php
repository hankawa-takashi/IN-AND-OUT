<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends Controller
{   
    /**
     * フラグ設定一覧画面を表示
     * 
     * @param Request $request
     * @return Response
    */
    public function flagList(Request $request)
    {
        // $flags = Config::orderBy('created_at', 'asc')->get();

        $flags = Config::all();
        
        if (empty($flags)){ 
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('configs')); 
        }

        return view('config.list', [
            'flags' => $flags,
        ]);
    }

    // フラグ追加画面
    public function EntryPage(Request $request)
    {
        return view('config.entry');
    }

    /**
     * フラグ登録
     * 
     * @param Request $request
     * @return Response
    */

    public function exeEntry(Request $request)
    {
        $this->validate($request,[
            'floor_name' => 'required|max:255',
        ]);

        $floor_name = $request->floor_name;

        $data = [
            'user_id' => 1,
            'floor_name' => $floor_name,
        ];

        Config::insert($data);
        \Session::flash('suc_msg', '追加しました。');

        return redirect(route('exeEntry'));
    }

    /**
     * フラグ編集画面
     * 
     * @param int $id
     * @return Response
    */
    public function EditPage( $id )
    {
        $flag = Config::find($id);

        if (is_null($flag)){ 
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('configs')); 
        }

        return view('config.edit', ['flag' => $flag]);
    }

    /**
     * フラグ更新
     * 
     * @param Request $request
     * @return Response
    */

    public function exeUpdate( Request $request )
    {
        $inputs = $request->all(); 

        $flag = Config::find($inputs['id']);

        $flag->floor_name = $request -> floor_name;

        $flag->save();
        \Session::flash('suc_msg', '保存しました。');

        return view('config.edit', ['flag' => $flag]);

    }

    /**
     * フラグ削除
     * 
     * @param int $id
     * @return Response
    */
    public function exeDelete( $id )
    {
        if (empty($id)){ 
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('configs')); 
        }
        try{
            Config::destroy($id);
        }catch(\throwable $e){
            abort(500);
        }

        \Session::flash('err_msg', '削除しました。');

        return redirect(route('configs'));
    }

}
