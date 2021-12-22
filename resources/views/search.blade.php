@extends('common_search')

@section('pagename','コロナ患者管理システム')
@section('mainname','検索結果一覧')

@section('main')
<label>検索条件選択</label>
<form action="{{ url('/search')}}" method="get">
  {{ csrf_field()}}
  {{method_field('get')}}
  <p>
            <select name="patient_name">
                <option value="患者名">患者名</option>
                <option value="患者ID">患者ID</option>
                <option value="日付">日付</option>
            </select>
                
        </p>
  <div class="form-group">
    
    <h8>検索条件を入力してください</h8>
    <input type="text" class="form-control col-md-5" placeholder="検索したい名前を入力してください" name="key_word" value="{{$keyword_name}}">
    <button class="btn btn-info my-2" type="submit">検索</button>
  </div> 
  

        


    
    </form>  
  <h5>
  <span class="background-skyblue">@yield('mainname')</span>
  </h5>

  
        <div class="table">   
            <table border="4">
            　<tr>
            　　<th>患者ID</th>
            　　<th>患者名</th>
                <th>日付</th>
                <th>午前体温</th>
                <th>午後体温</th>
                <th>酸素濃度</th>
                <th>その他</th>
            　</tr>
            @if(!empty($condition))
            @foreach($condition as $item)
            　<tr>
            　　<td>{{$item->id}}</td>
            　　<td>{{$item->name}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->temperature_morning}}</td>
                <td>{{$item->temperature_afternoon}}</td>
            　　<td>{{$item->oxygen}}</td>
                <td>{{$item->note}}</td>
                <td><a href="/update/{{$item->id}}" class="btn btn-primary btn-sm">編集</a></td>
            　</tr>
            @endforeach
            @endif
            </table>
        </div>
    
       
            
</body>
</html>

@endsection