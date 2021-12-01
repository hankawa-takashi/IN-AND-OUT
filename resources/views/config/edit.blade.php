@extends('layout')
@section('title', 'フラグ編集画面')
@section('h1', 'フラグ編集')
@section('content')

<div class="row">
    <form action="{{ route('exeUpdate',['id' => $flag->id]) }}" method="post">
    @csrf
        <div class="entry">
            <div class="col-md-2">
                <input type="text" class="form-control" name="floor_name" value="{{ $flag->floor_name }}">
            </div>
            <div class="col btn2">
                <input type="submit" name="btn" class="btn btn-outline-primary btn1" value="保存">
            </div>
        </div>
    </form>
    <div>
        <form action="{{ route('configs') }}" method="get">
            <input type="submit" class="btn btn-outline-dark btn3" value="戻る">
        </form>
    </div>
</div>

@endsection