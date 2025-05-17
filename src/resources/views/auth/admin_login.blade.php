@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endsection

@section('content')
<form class="login-form" action="/admin/login" method="post">
    @csrf
    <h2 class="form-title">管理者ログイン</h2>    
    <div class="form-input">
        <label for="">メールアドレス</label>
        <input type="email" name="email" id="" value="{{ old('') }}">
        @error('')
            <p class="error-message"></p>
        @enderror
    </div>
    <div class="form-input">
        <label for="">パスワード</label>
        <input type="password" name="password" id="" value="{{ old('') }}">
        @error('')
            <p class="error-message"></p>
        @enderror
    </div> 
    <div class="form-button">
         <button type="submit">管理者ログインする</button>
    </div>
</form>
@endsection