<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .submit-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('admin/movies/store') }}">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>映画タイトル</th>
                    <th>画像URL</th>
                    <th>公開年</th>
                    <th>上映中かどうか</th>
                    <th>概要</th>
                    <th>登録日時</th>
                    <th>更新日時</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>自動採番</td>
                    <td><input type="text" name="title" required></td>
                    <td><input type="text" name="image_url"></td>
                    <td><input type="number" name="published_year" required></td>
                    <td>
                        <select name="is_showing">
                            <option value="1">上映中</option>
                            <option value="0">上映予定</option>
                        </select>
                    </td>
                    <td><textarea name="description" rows="3"></textarea></td>
                    <td>自動設定</td>
                    <td>自動設定</td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="submit-btn">登録する</button>
    </form>
</body>
</html>