@extends('layouts.admin')

@section('content')
    <div class="hstack justify-content-between">
        <h2 class="fs-4 text-secondary my-4">Products</h2>
        <div class="hstack gap-2">
            <a href="{{ route('admin.products.create') }}" class="btn btn-outline-success">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Sale date</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price }}$</td>
                    <td>{{ $product->sale_date }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
