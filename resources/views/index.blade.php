<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Data</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Data from API</h1>

    @if(isset($data) && is_array($data))
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['body'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Không có dữ liệu để hiển thị.</p>
    @endif
</body>
</html>
