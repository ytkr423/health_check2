@extends('common_search')
@section('pagename','医療従事者・ユーザー登録画面')
@section('main')
@php $page="form" @endphp
<div class="container">
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
       
        <div class="form-group">
            <label for="name" class="col-md-4 col-form-label ">{{ __('名前') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-md-4 col-form-label">{{ __('メール・アドレス') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-md-4 col-form-label">{{ __('パスワード') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 col-form-label">{{ __('パスワード確認') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group">
            <label for="belong_to" class="col-md-4 col-form-label">{{ __('所属') }}</label>

            <div class="col-md-6">
                <input id="belong_to" type="text" class="form-control" name="belong_to"  required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group">
            <label for="phone" class="col-md-4 col-form-label">{{ __('電話番号') }}</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone_no"  >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-4">
                
                    <button type="submit" class="btn btn-primary">
                        {{ __('登録') }}
                    </button>
                

            </div>
        </div>
    </form>
</div>

@endsection
