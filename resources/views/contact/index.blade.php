@extends('layouts.layout')

@section('content')
    <form method="POST" action="{{ route('contact.confirm') }}">
        @csrf

        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <p class="error-message">{{ $errors->first('email') }}</p>
        @endif

        <label for="title">タイトル</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @if ($errors->has('title'))
            <p class="error-message">{{ $errors->first('title') }}</p>
        @endif

        <label for="body">お問い合わせ内容</label>
        <textarea name="body" id="body">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
        @endif

        <button type="submit">
            入力内容確認
        </button>
    </form>
@endsection
