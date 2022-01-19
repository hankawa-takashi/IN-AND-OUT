@extends('layouts.app')
 
@section('content')
 
<!-- タスク一覧表示 -->
@if (count($floor_inf) > 0)

<div class="outer">
        <a href=""> <div class="iconGear"><div></div></div></a>
</div>

<div class=logout>
    <a href ="">ログアウト</a>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        Current Tasks
    </div>
 
    <div class="panel-body">
        <table class="table table-striped floor_inf-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>IN_AND_OUT</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($floor_inf as $f)
                <tr>
                    <!-- タスク名 -->
                    <td class="table-text">
                        <div>{{ $f->floor_id }}:{{ $f->floor_name }}</div>
                    </td>
 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection