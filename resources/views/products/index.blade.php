@extends('layouts.app')

@section('title', 'Product List')

@section('content')
    <h2>Product List</h2>

    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Create Product</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>
                        @if(isset($product['avatar']) && filter_var($product['avatar'], FILTER_VALIDATE_URL))
                            <img src="{{ $product['avatar'] }}" alt="Avatar" width="50" height="50" class="rounded">
                        @else
                            <img src="https://via.placeholder.com/50" alt="No Image" width="50" height="50">
                        @endif
                    </td>

                    <td>{{ $product['name'] }}</td>
                    <td>{{ number_format($product['price'] ?? 0, 2) }} $</td>
                    <td>{{ $product['quantity'] ?? 0 }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
