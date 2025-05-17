@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/request.css') }}">
@endsection

@section('content')
<div class="request-content">
<h2 class="content-title">申請一覧</h2>
    <div class="content-select">
        <span>承認待ち</span>
        <span>承認済み</span>
    </div>
    <table class="content-table">
    <tr class="table-line">
        <th class="table-label">状態</th>
        <th class="table-label">名前</th>
        <th class="table-label">対象日時</th>
        <th class="table-label">申請理由</th>
        <th class="table-label">申請日時</th>
        <th class="table-label">詳細</th>
    </tr>
    <tr class="table-line">
        <td class="table-data">申請待ち</td>
        <td class="table-data">吉田裕紀</td>
        <td class="table-data">2025年4月1日(月)</td>
        <td class="table-data">残業</td>
        <td class="table-data">2025年4月1日(月)</td>        
        <td class="table-data"><a href="/stamp_correction_request/approve/attendance_correct_request">詳細</a></td>
    </tr>
    </table>
</div>

@endsection