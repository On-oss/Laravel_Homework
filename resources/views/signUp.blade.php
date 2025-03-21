<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <link rel="stylesheet" href="{{ asset('css/signUp.css') }}">
    <!-- <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { width: 50%; margin: auto; padding: 20px; border: 1px solid #ccc; background: #f3f3f3; }
        input, button { width: 100%; padding: 10px; margin: 5px 0; }
        .result { margin-top: 20px; background: #ddd; padding: 10px; }
    </style> -->
</head>
<body>
    <div class="container">
        <h1>Sign Up Form</h1>
        <form action="/signup" method="POST">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Nhập tên" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="number" name="age" placeholder="Nhập tuổi" value="{{ old('age') }}">
                @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="text" name="date" placeholder="Nhập ngày tháng" value="{{ old('date') }}">
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="text" name="phone" placeholder="Nhập số điện thoại" value="{{ old('phone') }}">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="text" name="web" placeholder="Nhập website" value="{{ old('web') }}">
                @error('web')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="text" name="address" placeholder="Nhập địa chỉ" value="{{ old('address') }}">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">OK</button>
        </form>

        <h2>Thông tin của User: </h2>
        <!-- Dùng vòng foreach để in thông tin -->
        @if(session()->has('users'))
            <h2>Danh sách User đã nhập:</h2>
            <ul>
                @foreach(session('users') as $user)
                    <li>
                        <strong>Tên:</strong> {{ $user['name'] }} |
                        <strong>Tuổi:</strong> {{ $user['age'] }} |
                        <strong>Ngày:</strong> {{ $user['date'] }} |
                        <strong>Phone:</strong> {{ $user['phone'] }} |
                        <strong>Website:</strong> {{ $user['web'] }} |
                        <strong>Địa chỉ:</strong> {{ $user['address'] }}
                    </li>
                @endforeach
            </ul>
        @endif


        <!-- Dùng isset kiểm tra user có tồn tại hay khôngkhông -->
        @if(isset($user))
                <p>Tên: {{ $user['name'] }}</p>
                <p>Tuổi: {{ $user['age'] }}</p>  
                <p>Ngày: {{ $user['date'] }}</p>  
                <p>Phone: {{ $user['phone'] }}</p>  
                <p>Website: {{ $user['web'] }} </p> 
                <p>Địa chỉ: {{ $user['address'] }}</p> 
        @endif


        <form action="/clear-session" method="POST">
            @csrf
            <button type="submit">Xóa User</button>
        </form>

    </div>
</body>
</html>

