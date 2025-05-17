@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">
@endsection

@section('content')
<form class="entry-form" action="/" method="post">
    @csrf
    <p class="form-status">業務外</p>
    <div class="form-date" id="RealdayClockArea"></div>
    <div class="form-time" id="RealtimeClockArea"></div>
    <div class="form-button">
        <button class="button-start" type="submit">出勤</button>
        <button class="button-finsh" type="submit">退勤</button>
        <button class="button-break_start" type="submit">休憩入</button>
        <button class="button-break_finsh" type="submit">休憩戻</button> 
    </div>
    <p class="form-message">今日も一日よろしくお願いします。{{session('message')}}</p>
</form>

<script type="text/javascript">

function setfig(num) {
   var ret;
   if( num < 10 ) { ret = "0" + num; }
   else { ret = num; }
   return ret;
}

function showClock() {

   var nowTime = new Date();
   var weekChars = [ "日", "月", "火", "水", "木", "金", "土" ];

   var nowYear = setfig( nowTime.getFullYear() );
   var nowMonth = setfig( nowTime.getMonth()+ 1 );
   var nowDay = setfig( nowTime.getDate() );
   var nowHour = setfig( nowTime.getHours() );
   var nowMin = setfig( nowTime.getMinutes() );
   var nowSec = setfig( nowTime.getSeconds() );

   var  day = nowYear  + "年" + nowMonth + "月" + nowDay + "日"  + "(" + weekChars[nowTime.getDay()] + ")" ;
   var time = nowHour + ":" + nowMin + ":" + nowSec ;
 
   document.getElementById("RealdayClockArea").innerHTML = day;
   document.getElementById("RealtimeClockArea").innerHTML = time;
}
setInterval('showClock()',1000);

</script>


@endsection