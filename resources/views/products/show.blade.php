@extends('layout')
@section('content')
<div class="container mt-4">
    <h1>Show Product</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">Back</a>
    <div class="mt-4">
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Price:</strong> RM {{ $product->price }}</p>
        <p><strong>Details:</strong> {{ $product->details }}</p>
        <p><strong>Publish:</strong> {{ $product->publish ? 'Yes' : 'No' }}</p>
    </div>
</div>
@endsection
