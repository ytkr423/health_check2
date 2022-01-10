@extends('common_search')
@php $page="" @endphp
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">{{ __('患者情報編集画面') }}</div>

                <div class="card-body">
                    
                        @csrf

                    <form method="POST" action="{{ route('condition.update') }}">    
                        <div class="form-group row">
                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                            <div class="col-md-6">
                                {{ $user->name }} 
                            </div>    
                        </div>

                        <div class="form-group row">
                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('部屋番号') }}</label>

                            <div class="col-md-6">
                                {{ $user->room_no }}
                            </div>    
                        </div>

                        
                        <div class="form-group row">
                            <label for="temperature" class="col-md-4 col-form-label text-md-right">{{ __('体温') }}</label>

                            <div class="col-md-6">
                                <input id="temperature" type="tel" class="form-control @error('temperature') is-invalid @enderror"  name="temperature"  required autocomplete="temperature">

                                
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="oxygen" class="col-md-4 col-form-label text-md-right">{{ __('酸素濃度') }}</label>

                            <div class="col-md-6">
                                <input id="oxygen" type="tel" class="form-control @error('oxygen') is-invalid @enderror"  name="oxygen"  required autocomplete="oxygen">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="note" class="col-md-4 col-form-label text-md-right">{{ __('備考') }}</label>

                            <div class="col-md-6">
                            <textarea rows="10" cols="40"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('登録') }}
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
