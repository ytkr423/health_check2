@extends('common_search')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('登録完了しました。') }}</div>

                <div class="card-body">
                    
                        @csrf

                        <label for=""><a href="{{ route('home') }}"> <input type="button"  value="戻る" name="buck"> </a></label>
                                

                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection