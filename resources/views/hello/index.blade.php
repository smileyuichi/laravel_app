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
    @isset ($msg)
    <p>こんにちは、{{$msg}}さん。</p>
    @else
    <p>何か書いて下さい。</p>
    @endisset
    <p>&#064;foreachディレクティブの例</p>
    <ol>
        @foreach($array as $item)
        <li>{{$item}}</li>
        @endforeach
    </ol>
    <p>&#064;foreachディレクティブの例</p>
        @foreach($array as $item)
        @if($loop->first)
        <p>※データ一覧</p><ul>
        @endif
        <li>No,{{$loop->iteration}}.{{$item}}</li>
        @if($loop->last)
        </ul><p>_＿ここまで</p>
        @endif
        @endforeach
    
    <form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
    </form>
</body>
</html>