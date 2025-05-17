@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endsection

@section('content')
<form class="login-form" action="/login" method="post">
    @csrf
    <h2 class="form-title">ログイン</h2>    
    <div class="form-input">
        <label for="">メールアドレス</label>
        <input type="email" name="email" id="" value="{{ old('email') }}">
        @error('email')
            <p class="error-message">{{ $errors->first('email') }}</p>
        @enderror
    </div>
    <div class="form-input">
        <label for="">パスワード</label>
        <input type="password" name="password" id="" value="{{ old('password') }}">
        @error('password')
            <p class="error-message">{{ $errors->first('email') }}</p>
        @enderror
    </div> 
    <div class="form-button">
         <button type="submit">ログインする</button>
    </div>
    <p class="form-link"><a href="/register">会員登録はこちら</a></p>
</form>
@endsection