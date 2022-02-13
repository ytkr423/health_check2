@extends('layouts/app')
@section('pagename','体調登録画面')
@php $page="" @endphp


@section('main')

    
<div class="col-md-8">
  
    <form method="POST" action="{{ route('condition.update') }}">    
        @csrf
        
        <!-- 日付表示 -->
        <div class="row text-md-right">
        <?php
            date_default_timezone_set('Japan');
            echo '<P>',date('Y年m月d日'),'</P>';
        ?>
        </div>
        <!-- 入力フォーム -->
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
            <label for="am_temperature" class="col-md-4 col-form-label text-md-right">{{ __('午前体温') }}</label>

            <div class="col-md-6">
                <input id="am_temperature" type="tel" class="form-control @error('temperature') is-invalid @enderror"  name="temperature_morning"  required autocomplete="am_temperature">
                {{ $user->temperature_morning}}
            </div>
        </div>

        <div class="form-group row">
            <label for="pm_temperature" class="col-md-4 col-form-label text-md-right">{{ __('午後体温') }}</label>

            <div class="col-md-6">
                <input id="pm_temperature" type="tel" class="form-control @error('temperature') is-invalid @enderror"  name="temperature_afternoon"  required autocomplete="pm_temperature">

                
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
            <textarea rows="10" cols="40" name="note"></textarea>
            </div>
        </div>
        <input type="hidden" name="id" value={{ $user->id }}>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                
                    <button type="submit" class="btn btn-primary">
                        {{ __('登録') }}
                    </button>
                

            </div>
        </div>
    </form>
                
</div>
    
@endsection
