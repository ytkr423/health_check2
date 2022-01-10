  <!DOCTYPE html>
  <html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ログイン画面</title>
  </head>
  <body>
  <div class="row">
  <div class="col-md-4 col-md-offset-4">
  <h1>患者ログイン</h1>
  @if(count($errors) >0)
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  </div>
  @endif
  <form action="" method="post">
  <div class="form-group">
  <label for="email">E-Mail</label>
  <input type="text" id="email" name="email" class="form-control">
  </div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="password" id="password" name="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">ログイン</button>
  {{ csrf_field() }}
  </form>
  </div>
  </div>    
  </body>
  </html>
