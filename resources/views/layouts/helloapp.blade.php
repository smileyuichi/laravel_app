<html>
<head>
    <title>@yield('title')</title>
    <style>
    body {font-size:16px; color:#999; margin:5px;}
    h1 { font-size:50px; text-align:right; color:#f6f6f6; margin:-20px 0 -30px 0; letter-spacing:-4px; }
    ul{font-size:12pt;}
    hr{margin:25px 100px; border-top:1px dashed #ddd;}
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>