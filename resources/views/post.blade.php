
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <H1>Chied </H1>
<form action="/post" method="POST">
    @csrf <input type="text" name="title" placeholder="Post Title">
    <textarea name="text" placeholder="Post Content"></textarea>
    <button type="submit">Submit</button>
</form>
</body>
</html>