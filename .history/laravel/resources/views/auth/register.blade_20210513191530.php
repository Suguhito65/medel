@extends('layouts.app')
@section('title', '新規登録')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        @include('layouts.error')
        <div class="card">
            <div class="card-header bg-dark text-white text-center" style="font-size: 1.5em">{{ __('新規登録') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="">{{ __('名前') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="email" class="">{{ __('メールアドレス') }}</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email">
                    </div>

                    <div class="form-group">
                        <label for="password" class="">{{ __('パスワード') }}</label>
                        <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="">{{ __('パスワード再入力') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4 mt-4" style="border-radius: 1.2em">
                            {{ __('新規登録') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
