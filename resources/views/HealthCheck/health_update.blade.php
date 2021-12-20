@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" ><?php echo "{$name}" ?>様更新画面</div>

                <div class="card-body">
                <form method="POST" action="{{ route('condition.store') }}" enctype="multipart/form-data">
    @csrf

   <!-- 日付表示 -->
   <?php
    date_default_timezone_set('Japan');
    echo '<P>',date('Y年m月d日'),'</P>';
    ?>
   <!-- 入力フォーム -->
     <div class="form-group">
         <label for="temperature">午前体温</label>
        <input type="number" class="form-control-file" id="temperature"  step="0.1" name=temperature value="{{$temperature}}">
    </div>

    <div class="form-group">
         <label for="temperature">午後体温</label>
        <input type="number" class="form-control-file" id="temperature"  step="0.1" name=temperature value="{{$temperature}}">
    </div>


    <div class="form-group">
         <label for="oxygen">酸素飽和濃度</label>
        <input type="number" class="form-control-file" id="oxygen"  step="0.01" name=oxygen value="{{$oxygen}}">
    </div>

    <div class="form-group">
         <label for="note">その他体調状態</label>
        <input type="text" class="form-control-file" id="note"  step="0.1" name=note value="{{$note}}">
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