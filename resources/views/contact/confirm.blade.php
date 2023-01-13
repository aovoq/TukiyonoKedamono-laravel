@extends('layouts.layout')

@section('content')
    <form method="post" action="{{ route('contact.send') }}">
        @csrf

        <label for="email">メールアドレス</label>
        {{ $inputs['email'] }}
        <input type="hidden" name="email" id="email" value="{{ $inputs['email'] }}">

        <label for="email">タイトル</label>
        {{ $inputs['title'] }}
        <input type="hidden" name="title" id="title" value="{{ $inputs['title'] }}">

        <label for="body">お問い合わせ内容</label>
        {!! nl2br(e($inputs['body'])) !!}
        <input type="hidden" name="body" id="body" value="{{ $inputs['body'] }}">

        <button type="submit" name="action" value="back">入力内容修正</button>
        <button type="submit" name="action" value="submit">送信する</button>

    </form>
@endsection
