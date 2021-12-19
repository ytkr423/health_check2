@extends('common_search')

@section('pagename','コロナ患者管理システム')
@section('mainname','検索結果一覧')

</div>

    
@section('main')
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
            　<tr>
            　　<td><br></td>
            　　<td><br></td>
                <td><br></td>
                <td><br></td>
            　　<td><br></td>
                <td><br></td>
            　</tr>
            </table>
        </div>
        <div class="mainmenubotton">
                <input type="button" onclick="location.href='sample.html'" value="患者情報編集">
            </div> 
</body>
</html>

@endsection