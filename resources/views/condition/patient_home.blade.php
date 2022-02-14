<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>体調登録画面</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="/css/kanrisystem.css" rel="stylesheet">
    <style type="text/css">
      .font-small {
        font-size: 0.5rem;
      }
</style>
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
</head>
<body>
<a id="skippy" class="sr-only sr-only-focusable" href="#content">
  <div class="container">
    <span class="skiplink-text">Skip to main content</span>
  </div>
</a>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
x
           
        </div> 
  



    </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <div class="btn-toolbar mb-2 mb-md-0">
                    
        </div>
      </div>
    </main>
  </div>
</div>
<div class="main">
<div class="col-md-8">
  
  <form method="GET" action="">    
      @csrf
      
      <!-- 日付表示 -->
      <div class="row text-md-right">
      <?php
          date_default_timezone_set('Japan');
          echo '<P>',date('Y年m月d日'),'</P>';
      ?>
      </div>
      <!-- 入力フォーム -->
      <div class="form-group row">
          <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

          <div class="col-md-6">
              
          </div>    
      </div>

      <div class="form-group row">
          <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('部屋番号') }}</label>

          <div class="col-md-6">
              
          </div>    
      </div>

      
      <div class="form-group row">
          <label for="am_temperature" class="col-md-4 col-form-label text-md-right">{{ __('午前体温') }}</label>

          <div class="col-md-6">
              <input id="am_temperature" type="tel" class="form-control @error('temperature') is-invalid @enderror"  name="temperature_morning"  required autocomplete="am_temperature">
             
          </div>
      </div>

      <div class="form-group row">
          <label for="pm_temperature" class="col-md-4 col-form-label text-md-right">{{ __('午後体温') }}</label>

          <div class="col-md-6">
              <input id="pm_temperature" type="tel" class="form-control @error('temperature') is-invalid @enderror"  name="temperature_afternoon"  required autocomplete="pm_temperature">

              
          </div>
      </div>

      
      <div class="form-group row">
          <label for="oxygen" class="col-md-4 col-form-label text-md-right">{{ __('酸素濃度') }}</label>

          <div class="col-md-6">
              <input id="oxygen" type="tel" class="form-control @error('oxygen') is-invalid @enderror"  name="oxygen"  required autocomplete="oxygen">

              
          </div>
      </div>

      <div class="form-group row">
          <label for="note" class="col-md-4 col-form-label text-md-right">{{ __('備考') }}</label>

          <div class="col-md-6">
          <textarea rows="10" cols="40" name="note"></textarea>
          </div>
      </div>
      <input type="hidden" name="id" value="">

      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              
        <button type="submit" class="btn btn-primary">
                    {{ __('登録') }}
        </button>
              

          </div>
      </div>
  </form>
              
</div>

  
  
</div>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false,
      }
    }
  });
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script><script src="/docs/4.3/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.3/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.3/assets/js/src/application.js"></script>
<script src="/docs/4.3/assets/js/src/search.js"></script>
<script src="/docs/4.3/assets/js/src/ie-emulation-modes-warning.js"></script>
    
</body>
</html>