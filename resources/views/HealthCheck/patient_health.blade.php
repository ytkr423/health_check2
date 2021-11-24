<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>患者体調更新</title>
</head>
<body>
    <h1>００様登録画面</h1>
    <form method="POST" action="{{route('')}}">
    @csrf

    <input type="hidden" name=id value="{{$}}">

    <div>
        日付
        <input type="text" name= value="{{$->}}">
    </div>
    <div>
        午前体温
        <input type="text" name= value="{{$->}}">
    </div>
    <div>
        午後体温
        <input type="text" name= value="{{$->}}">
    </div>
    <div>
        酸素飽和濃度
        <input type="text" name= value="{{$->}}">
    </div>
    <div>
        その他体調状態
        <input type="text" name= value="{{$->}}">
    </div>

    <input type="submit" value="更新する">
    </form>
    <form method="POST" action="{{route('',[''=>$->])}}">
        @csrf

        <button type="submit">削除</button>

    </form>

</body>
</html>