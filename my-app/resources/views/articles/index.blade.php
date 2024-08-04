<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>

<body>
    <li><a href="/product">Product List</a></li>
    <h1>Articles List</h1>
    <ul>
        @foreach ($articles as $key => $list)
            <li>{{$key ." => ".$list->title}}</li>
        @endforeach
    </ul>
</body>

</html>
