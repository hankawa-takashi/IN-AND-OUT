<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="/js/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>@yield('title')</title>
</head>
<body class="main">
<h1 class="my-3 ml-3">@yield('h1')</h1>

@if (session('err_msg'))
<div class="row">
    <div class="col-md-3">
        <p class="alert alert-success">{{ session('err_msg') }}</p>
    </div>
</div>
@endif

@if (session('suc_msg'))
<div class="row">
    <div class="col-md-3">
        <p class="alert alert-success">{{ session('suc_msg') }}</p>
    </div>
</div>
@endif

@yield('content')
</body>   
</html>
