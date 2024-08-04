<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <li><a href="/articles">Articles List</a></li>
    <h1>Product Page</h1>
    <ul>
        @foreach ($product as $key => $p)
            <li>{{$key . " => " . $p->product}}</li>
        @endforeach
    </ul>
</body>

</html>
