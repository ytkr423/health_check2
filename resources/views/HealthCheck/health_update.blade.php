@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">様更新画面</div>

                <div class="card-body">
                <form method="POST" action="{{ route('condition.store') }}" enctype="multipart/form-data">
    @csrf

   <!-- 日付表示 -->

     <div class="form-group">
         <label for="temperature">体温</label>
        <input type="number" class="form-control-file" id="temperature"  step="0.1" name=temperature value="">
    </div>

    <div class="form-group">
         <label for="oxygen">酸素飽和濃度</label>
        <input type="number" class="form-control-file" id="oxygen"  step="0.01" name=oxygen value="">
    </div>

    <div class="form-group">
         <label for="note">その他体調状態</label>
        <input type="text" class="form-control-file" id="note"  step="0.1" name=note value="">
    </div>

    <div class="form-group">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('更新') }}
        </button>
    </div>
    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
