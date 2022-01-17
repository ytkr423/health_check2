@extends('common_search')
@php $page="" @endphp
@section('pagename','体調更新画面')

@section('main')

    <div class="row justify-content">
        <div class="col-md-8">
        
            <div><?php echo "{$name}" ?>様更新画面</div>

                    
            <form method="POST" action="{{ route('condition.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- 日付表示 -->
            <?php
                date_default_timezone_set('Japan');
                echo '<P>',date('Y年m月d日'),'</P>';
                ?>
            <!-- 入力フォーム -->
                <div class="form-group">
                    <label for="temperature_morning">午前体温</label>
                    <input type="number" class="form-control-file" id="temperature_morning"  step="0.1" name=temperature_morning value="{{$temperature_morning}}">
                </div>

                <div class="form-group">
                    <label for="temperature_afternoon">午後体温</label>
                    <input type="number" class="form-control-file" id="temperature_afternoon"  step="0.1" name=temperature_afternoon value="{{$temperature_afternoon}}">
                </div>


                <div class="form-group">
                    <label for="oxygen">酸素飽和濃度</label>
                    <input type="number" class="form-control-file" id="oxygen"  step="0.01" name=oxygen value="{{$oxygen}}">
                </div>

                <div class="form-group">
                    <label for="note">その他体調状態</label>
                    <input type="text" class="form-control-file" id="note"  step="0.1" name=note value="{{$note}}">
                </div>
                <input type="hidden"  name="id" value="{{$id}}">
                <div class="form-group">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('更新') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
