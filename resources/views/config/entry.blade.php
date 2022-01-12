@extends('layout')
@section('title', 'フラグ追加画面')
@section('h1', 'フラグ追加')
@section('content')

@if ($errors->any())
    <div class="row">
        <div class="col-md-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<div class="row">
    <form action="{{ route('exeEntry') }}" method="post">
    @csrf
        <div class="entry">
            <div class="col-md-2">
                <input type="text" class="form-control" name="floor_name" placeholder="フラグ名を入力して下さい。">
            </div>
            <div class="col btn2">
                <input type="submit" name="btn" class="btn btn-outline-primary btn1" value="追加">
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
