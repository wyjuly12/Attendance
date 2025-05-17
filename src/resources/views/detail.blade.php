@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
@endsection

@section('content')
<form class="detail-form" action="/" method="post">
    @csrf
    <h2 class="form-title">勤怠詳細</h2>
    <table class="form-table">
        <tr class="form-line">
            <th class="form-label">名前</th>
            <td class="form-data">
                <div class="data-box">
                    
                
                <input type="text" name="" id="" readonly>
                </div>
            </td>
        </tr>
        <tr class="form-line">
            <th class="form-label">日付</th>
            <td class="form-data">
            <div class="data-box">
                    <input type="text" name="" id="" readonly>
                    <input type="text" name="" id="" readonly>
                </div>
            </td>
        </tr>
        <tr class="form-line">
            <th class="form-label">出勤・退勤</th>
            <td class="form-data">
                <div class="data-box__time">
                    <input type="time" name="" id="">
                    <span>～</span>
                    <input type="time" name="" id="">
                </div>
        </tr>
        <tr class="form-line">
            <th class="form-label">休憩</th>
            <td class="form-data"> 
                <div class="data-box__time">
                    <input type="time" name="" id="">
                    <span>～</span>
                    <input type="time" name="" id="">
                </div>
            </td>
        </tr>
        <tr class="form-line">
            <th class="form-label">備考</th>
            <td class="form-data"><textarea  name="" id="" cols="20" rows="2"></textarea></td>
        </tr>
    </table>
    <div class="form-button">
        <button type="submit">修正</button>
    </div>
</form>
@endsection