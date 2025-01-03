@extends('layout')
@section('content')
<div class="container mt-4">
    <h1>Add New Product</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">Back</a>
    <form action="{{ route('products.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price (RM)</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea name="details" id="details" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Publish</label>
            <div>
                <label><input type="radio" name="publish" value="1" required> Yes</label>
                <label><input type="radio" name="publish" value="0" required> No</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
