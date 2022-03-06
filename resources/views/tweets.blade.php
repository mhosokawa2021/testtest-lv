<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ぼやいったー | 日々のぼやきを投稿しよう</title>

        <!-- Material Design for Bootstrap 読み込み 開始 -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
        <link rel="stylesheet" href="/css/mdb.min.css" />
        <script type="text/javascript" src="/js/mdb.min.js" defer></script>
        <!-- Material Design for Bootstrap 読み込み 終了 -->

    </head>
    <body class="font-sans antialiased bg-light">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                    <!-- ぼやき表示用のカード 開始 -->
                    @foreach($tweets as $tweet)
                         <div class="card card-body shadow-2 mb-2">
                             <div class="d-flex justify-content-between">
                                 <p>
                                     <span class="font-weight-bold mr-2">サンプル名</span>
                                     <span style="font-size: 0.8rem;">{{ $tweet->created_at }}</span>
                                 </p>
                             </div>
                             <p class="card-text">
                                 {{ $tweet->message }}
                             </p>
                         </div>
                    @endforeach
            </div>
        </div>
    </div>
    </body>
</html>