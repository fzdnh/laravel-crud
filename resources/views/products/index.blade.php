@extends('layout')
@section('content')
<div class="container mt-4">
    <h1>Laravel</h1>

    <!-- Create New Product Button -->
    <a href="{{ route('products.create') }}" class="btn btn-success float-end">Create New Product</a>

    <!-- Search Form -->
    <form action="{{ route('products.index') }}" method="GET" class="mt-3 d-flex">
        <div class="input-group" style="width: 300px; padding-right: 10px;">
            <input type="text" name="search" class="form-control" placeholder="Search by product name" value="{{ request()->search }}" style="padding: 5px;">
            <button class="btn btn-primary" type="submit" style="padding: 5px 15px;">Search</button>
        </div>
    </form>

    <!-- Products Table -->
    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price (RM)</th>
                <th>Details</th>
                <th>Publish</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->details }}</td>
                <td>{{ $product->publish ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
