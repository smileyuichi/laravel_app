<html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16px; color:#999;}
    h1 { font-size:100px; text-align:right; color:#eee; margin:-20px 0 -30px 0; letter-spacing:-4px; }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>{{$msg}}</p>
    <form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
    </form>
</body>
</html>