
@extends('common_search')
@section('pagename','医療従事者・ユーザー編集画面')

@section('main')
<div class="container">
  
        <div class="col-md-8">    

                    <form method="POST" action="{{ route('user.edit') }}">
                    @csrf   
                        <input type="hidden" value="{{ $user->id }}" name="id">

                        
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">{{ __('名前') }}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="{{ $user->name }}" name="name">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">{{ __('メール・アドレス') }}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="{{ $user->email }}" name="email">
                    </div>
                        


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">{{ __('部屋番号') }}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="{{ $user->room_no }}" name="room_no">
                    </div>

                        
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">{{ __('所属') }}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="{{ $user->belong_to }}" name="belong_to">
                    </div>

                        
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">{{ __('電話番号') }}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="{{ $user->phone_no }}" name="phone_no">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">{{ __('住所') }}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="{{ $user->address }}" name="address">
                    </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-5">
                                
                                    <button type="submit" class="btn btn-primary" value="submit">
                                        {{ __('登録') }}
                                    </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 offset-md-5">
                                
                                    <button type="submit" class="btn btn-primary" name="delete" value="delete">
                                        {{ __('削除') }}
                                    </button>
                            </div>
                        </div>
                    </form>    
                    
                
            
        </div>
    
</div>
@endsection