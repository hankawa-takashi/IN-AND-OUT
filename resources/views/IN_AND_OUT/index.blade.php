@extends('layouts.app')
 
@section('content')
<link href="{{asset('/css/app.css')}}" rel="stylesheet">
<!-- タスク一覧表示 -->
@if (count($floor_inf) > 0)

<div class="outer">
        <a href=""> <div class="iconGear"><div></div></div></a>
</div>

<div class=logout>
    <a href ="">ログアウト</a>
</div>

<div class="panel panel-default">
 

<h1>IN_AND_OUT</h1>
    <div class="panel-body">
        <table class="table table-striped floor_inf-table">
 
            <!-- テーブルヘッダ -->
            <!-- <thead>
                <th>IN_AND_OUT</th>
                <th>&nbsp;</th>
            </thead> -->


            <!-- テーブル本体 -->
            <tbody>
               
                <tr>
                @foreach ($floor_inf as $f)
                    <!-- タスク名 -->
                    <td class="table-text">
                        <input type="button" value="{{ $f->floor_name }}" style="background-color:#00ff00;width:200px;height:100px;">
                    </td>
                    @endforeach
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection