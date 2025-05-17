@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/list.css') }}">
@endsection

@section('content')
<div class="list-content">
    <h2 class="content-title">テストユーザーさんの勤怠</h2>
    <div class="content-select">
    
    </div>
    <table class="content-table">
        <tr class="table-line">
                <th class="table-label">日付</th>
                <th class="table-label">出勤</th>
                <th class="table-label">退勤</th>
                <th class="table-label">休憩</th>
                <th class="table-label">合計</th>
                <th class="table-label">詳細</th>
        </tr>
        <tr class="table-line">
                <td class="table-data">4/1(月)</td>
                <td class="table-data">09：00</td>
                <td class="table-data">18：00</td>
                <td class="table-data">1:00</td>
                <td class="table-data">8:00</td>
                <td class="table-data"><a href="/attendance/id">詳細</a></td>
        </tr>
        <tr class="table-line">
                <td class="table-data">4/2(火)</td>
                <td class="table-data">09：00</td>
                <td class="table-data">18：00</td>
                <td class="table-data">1:00</td>
                <td class="table-data">8:00</td>
                <td class="table-data"><a href="/attendance/id">詳細</a></td>
        </tr>    
    </table>
    <div class="form-button">
        <button type="submit">CSV出力</button>  
    </div>
</div>
@endsection