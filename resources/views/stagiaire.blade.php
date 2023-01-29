<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><i style="color:rebeccapurple">bonjour {{$nom}}</i></h1>
    @foreach ($note as $n)
    <ul>
    <li>{{$n}}</li>
    </ul>
    @endforeach
    <h1>hello user <span style="color:red">number:</span><span style="color:aqua">{{$id}}</span></h1>
</body>
</html>