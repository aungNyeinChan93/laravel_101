<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Layout blade </h1>
    <div class="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="product">Product</a></li>
            <li><a href="about">About</a></li>
        </ul>
    </div>
    @yield("content")
</body>
</html>
