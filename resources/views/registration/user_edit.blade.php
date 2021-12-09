@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">{{ __('ユーザー情報編集画面') }}</div>

                <div class="card-body">
                    
                        @csrf

                    <form method="POST" action="{{ route('user.edit') }}">   
                        <div class="form-group row">
                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                            <div class="col-md-6">
                            <input type="text" value="{{ $user->name }}" name="name">
                            </div>    
                        </div>

                        <div class="form-group row">
                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('メール・アドレス') }}</label>

                            <div class="col-md-6">
                                <input type="text" value="{{ $user->email }}" name="email">
                            </div>    
                        </div>

                        
                        <div class="form-group row">
                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('部屋番号') }}</label>

                            <div class="col-md-6">
                                <input type="text" value="{{ $user->room_no }}" name="room_no">
                            </div>    
                        </div>


                        <div class="form-group row">
                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('所属') }}</label>

                            <div class="col-md-6">
                                <input type="text" value="{{ $user->belong_to }}" name="belong_to">
                            </div>    
                        </div>

                        <div class="form-group row">
                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>

                            <div class="col-md-6">
                                <input type="text" value="{{ $user->phone_no }}" name="phone_no">
                            </div>    
                        </div>

                        <div class="form-group row">
                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('住所') }}</label>

                            <div class="col-md-6">
                                <input type="text" value="{{ $user->address }}" name="address">
                            </div>    
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('登録') }}
                                    </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('削除') }}
                                    </button>
                            </div>
                        </div>
                    </form>    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection