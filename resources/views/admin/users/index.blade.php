@extends('layouts.admin')

@section('content')
    <div class="hstack justify-content-between">
        <h2 class="fs-4 text-secondary my-4">Users</h2>
        <div class="hstack gap-2">
            <a href="{{ route('admin.users.create') }}" class="btn btn-outline-success">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
