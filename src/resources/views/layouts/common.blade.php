<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
    @yield('css')
    <title>Document</title>

</head>

<header class="common-header">
    <div class="header-logo">
        <img src="{{ asset('/logo/logo.png') }}" alt="logo">
    </div>
    <div class="header-menu">
        <ul><a href="/entry">勤怠</a></ul>
        <ul><a href="/list">勤怠一覧</a></ul>
        <ul><a href="/request">申請一覧</a></ul>
        <ul><a href="/logout">ログアウト</a></ul>
    </div>
    <div class="header-menu">
        <ul><a href="/admin/attendance/list">勤怠一覧</a></ul>
        <ul><a href="/admin/staff/list">スタッフ一覧</a></ul>
        <ul><a href="/stamp_correction_request/list">申請一覧</a></ul>
        <ul><a href="/logout">ログアウト</a></ul>
    </div>
</header>

<body class="common-body">
@yield('content')
</body>
</html>