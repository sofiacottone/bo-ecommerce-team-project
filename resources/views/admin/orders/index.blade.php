@extends('layouts.admin')

@section('content')
    <div class="hstack justify-content-between">
        <h2 class="fs-4 text-secondary my-4">Orders</h2>
        <div class="hstack gap-2">
            <a href="{{ route('admin.orders.create') }}" class="btn btn-outline-success">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Final price</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->final_price }}$</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
