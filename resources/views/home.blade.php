@extends('common')

@section('pagename','コロナ患者管理システム')
@section('mainname','患者一覧')
@section('main')
@php $page="home" @endphp
    
      
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
            @foreach ($conditions as $condition)
                <tr>
                    <!-- タスク名 -->
                    <td class="">
                        <div>{{ $condition->id }}</div>
                    </td>
                        <td>
                            <div>{{ $condition->name }}</div>
                        </td>
                        <td>
                            <div>{{ $condition->created_at }}</div>
                        </td>
                        <td class="">
                            <div>{{ $condition->temperature_morning }}</div>

                    </td>
                    <td class="">
                            <div>{{ $condition->temperature_afternoon }}</div>

                    </td>
 
                    <td>
                        <div>{{$condition->oxygen}}</div>
                    </td>
                    <td>
                        <div>{{$condition->note}}</div>
                    </td>
                    

                </tr>
                @endforeach
                


            
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

        

@endsection
