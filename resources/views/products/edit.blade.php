@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h2>Edit Product</h2>

    <form action="{{ route('products.update', $product['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product['name'] }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $product['price'] }}">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $product['quantity'] }}">
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar URL</label>
            <input type="text" name="avatar" id="avatar" class="form-control" value="{{ $product['avatar'] }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
