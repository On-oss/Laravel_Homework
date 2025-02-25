@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <h2>Create New Product</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control">
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar URL</label>
            <input type="text" name="avatar" id="avatar" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
