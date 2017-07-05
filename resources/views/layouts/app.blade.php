<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/app.css">
        <style>
        body {
            background: #e2e2e2;
        }
        
        header {
            min-height: 150px;
            background: #666;
            padding: 20px;
            margin-bottom: 15px;
        }
        
        .footer-content {
            padding-top: 10px;
        }
        
        .header-title,
        .header-sub {
            color: #e2e2e2;
        }
        
        .header-sub {
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 3px 0;
        }
        
        .content {
            background: #fff;
            padding: 20px;
            margin-bottom: 10px;
        }
        </style>
    </head>

    <body>
        <!-- include Header layout -->
        @include('layouts.header')
        <!-- setup to display dynamic page content here -->
        <div class="main-content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <!-- include Footer layout -->
        @include('layouts.footer')
        <!-- Bootstrap JavaScript -->
        <script src="/js/app.js"></script>
    </body>

</html>
