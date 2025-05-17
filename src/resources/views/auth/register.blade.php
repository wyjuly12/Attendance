@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
@endsection

@section('content')
<form class="register-form" action="/register" method="post">
    @csrf
    <h2 class="form-title">会員登録</h2>
    <div class="form-input">
        <label for="">名前</label>
        <input type="text" name="name" id="" value="{{ old('name') }}">
        @error('name')
            <p class="error-message">{{$errors->first('name')}}</p>
        @enderror
    </div>
    <div class="form-input">
        <label for="">メールアドレス</label>
        <input type="email" name="email" id="" value="{{ old('email') }}">
        @error('email')
            <p class="error-message">{{$errors->first('email')}}</p>
        @enderror
    </div>
    <div class="form-input">
        <label for="">パスワード</label>
        <input type="password" name="password" id="" value="">
        @error('')
            <p class="error-message">{{$errors->first('password')}}</p>
        @enderror
    </div> 
    <div class="form-input">
        <label for="">パスワード確認</label>
        <input type="password" name="password_confirmation" id="" value="">
        @error('password')
            <p class="error-message">{{$errors->first('password')}}</p>
        @enderror
    </div>
    <div class="form-button">
        <button type="submit">登録する</button>
    </div>
    <p class="form-link"><a href="/login">ログインはこちら</a></p>
</form>
@endsection