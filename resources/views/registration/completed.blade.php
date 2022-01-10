@extends('common_search')
@section('pagename','登録完了しました。')
@php $page="form" @endphp

@section('main')

                        @csrf

                        <div class="form-group">
                            <div class="col-md-4 offset-md-3">
                                
                                   <a href="{{ url('/') }}"> 
                                       <button href="" class="btn btn-primary" value="submit">
                                        {{ __('戻る') }}
                                        </button>
                                    </a>
                        
                            </div>
                        </div>
 
                        <label for=""></label>
                                
@endsection
