@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/list.css') }}">
@endsection

@section('content')
<div class="list-content">
    <h2 class="content-title">スタッフ一覧の勤怠</h2>
    <div class="content-select">
    
    </div>
    <table class="content-table">
        <tr class="table-line">
                <th class="table-label">名前</th>
                <th class="table-label">メールアドレス</th>
                <th class="table-label">月次勤怠</th>
        </tr>
        
        <tr class="table-line">
                <td class="table-data">テストユーザー</td>
                <td class="table-data">testuser@mail.com</td>
                <td class="table-data"><a href="/admin/attendance/staff/id">詳細</a></td>
        </tr>
 
    </table>
</div>
@endsection