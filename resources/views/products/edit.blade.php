@extends('layout')
@section('content')
<div class="container mt-4">
    <h1>Edit Product</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">Back</a>
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price (RM)</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea name="details" id="details" class="form-control">{{ $product->details }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Publish</label>
            <div>
                <label>
                    <input type="radio" name="publish" value="1" {{ $product->publish ? 'checked' : '' }} required> Yes
                </label>
                <label>
                    <input type="radio" name="publish" value="0" {{ !$product->publish ? 'checked' : '' }} required> No
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
