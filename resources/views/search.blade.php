@extends('common_search')

@section('pagename','コロナ患者管理システム')
@section('mainname','検索結果一覧')

@section('main')
<h8>検索条件を入力してください</h8>
<form action="{{ url('/search')}}" method="get">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>名前</label>
    <input type="text" class="form-control col-md-5" placeholder="検索したい名前を入力してください" name="name" value="{{$keyword_name}}">
  </div> 
        <button class="btn btn-info my-2" type="submit">検索</button>
        
        
    
    </form>  
  <h5>@yield('mainname')</h5>

  
        <div class="table">   
            <table border="4">
            　<tr>
            　　<th>患者ID</th>
            　　<th>患者名</th>
                <th>日付</th>
                <th>体温</th>
                <th>酸素濃度</th>
                <th>その他</th>
            　</tr>
            @if(!empty($condition))
            @foreach($condition as $item)
            　<tr>
            　　<td>{{$item->id}}</td>
            　　<td>{{$item->name}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->temperature}}</td>
            　　<td>{{$item->oxygen}}</td>
                <td>{{$item->note}}</td>
            　</tr>
            @endforeach
            @endif
            </table>
        </div>
        <div class="mainmenubotton">
                <input type="button" onclick="location.href='sample.html'" value="患者情報編集">
            </div> 
</body>
</html>

@endsection