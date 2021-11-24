@extends('layout')
@section('title', '設定一覧画面')
@section('h1', '設定')
@section('content')

<div class="col-5 ml-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>フラグ名</th>
                <th>
                    <form method="get" action="{{ route('EntryPage') }}">
                        @csrf
                        <input type="submit" class="btn btn-outline-primary" value="追加">
                    </form>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($flags as $flag)
                <tr>
                    <td class="floor_name">{{  $flag->floor_name }}</td>
                    <td class="button">
                        <form action="{{ route('EditPage',['id' => $flag->id]) }}" method="GET">
                            <input type="submit" class="btn btn-outline-success btn1" value="編集">
                        </form>
                        <form action="{{ route('exeDelete',['id' => $flag->id]) }}" method="post" onSubmit="return checkDelete()">
                            @csrf
                            <input type="submit" class="btn btn-outline-danger btn1" value="削除">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<button class="btn btn-outline-dark">ホームに戻る</button>

<script>
function checkDelete(){
    if(window.confirm('削除してよろしいですか？')){
        return true;
    }else{
        return false;
    }
}
</script>

@endsection

