<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <h1>DataType</h1>
        <h3>String</h3>
        <p>{{$string}}</p>
        <hr />
        <h3>Boolean</h3>
        <p>{{$boolean}}</p>
        <hr />
        <h3>Integer</h3>
        <p>{{$integer}}</p>
        <hr />
        <h3>Object</h3>
        <p>{{$object['content']}} โดย {{$object['author']}}</p>
        <hr />
        <h3>Array</h3>
        <p>
        <ol>
            @foreach($array as $item)
            <li>{{$item['content']}}</li>
            @endforeach
        </ol>
        </p>
        <hr />
    </body>
</body>

</html>