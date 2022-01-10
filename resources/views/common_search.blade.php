<html lang="ja">
<head>
<!-- <div class="title"> -->
    <title>検索画面</title>
    
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
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">

      <div class="sideinfo">
           <h6>メニュー</h6>
           
        </div> 
        <div class="row">
          <div class="col-9">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link @if($page=='home')active @endif" id="v-pills-home-tab" data-bs-toggle="pill" href="{{ url('/') }}" role="tab" aria-controls="v-pills-home" aria-selected="true">ホーム</a>
              <a class="nav-link @if($page=='form')active @endif" id="v-pills-profile-tab" data-bs-toggle="pill" href="{{ url('/register1') }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">ユーザー登録</a>
              <a class="nav-link @if($page=='search')active @endif" id="v-pills-messages-tab" data-bs-toggle="pill" href="{{ url('/search') }}" role="tab" aria-controls="v-pills-messages" aria-selected="false">検索画面</a>
            </div>
          </div>
  



    </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="name"> @yield('pagename') </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
                    
        </div>
      </div>
    </main>
  </div>
</div>
<div class="main">
  
  @yield('main')
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
  

</body></html>