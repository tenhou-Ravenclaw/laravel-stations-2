<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <ul>
    @foreach ($movies as $movie)
        <li>ID: {{ $movie->id }}</li>
        <li>映画タイトル: {{ $movie->title }}</li>
        <li>画像URL: {{ $movie->image_url }}</li>
        <td>{{ $movie->published_year }}</td>
        <td>{{ $movie->is_showing ? '上映中' : '上映終了' }}</td>
        <td>{{ $movie->description }}</td>
        <li>登録日時: {{ $movie->created_at }}</li>
        <li>更新日時: {{ $movie->updated_at }}</li>
    @endforeach
    </ul>
</body>
</html>