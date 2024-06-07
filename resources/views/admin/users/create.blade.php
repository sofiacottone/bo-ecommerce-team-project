@extends('layouts.admin')

@section('content')
    <h2 class="fs-4 text-secondary my-4">Add new user</h2>

    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Full name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger ps-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="client-name" class="form-label">Email</label>
            <input type="text" class="form-control" id="client-name" name="client_name" value="{{ old('client_name') }}">
            @error('client_name')
                <div class="text-danger ps-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" name="level" value="{{ old('level') }}">
            @error('level')
                <div class="text-danger ps-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
            @error('address')
                <div class="text-danger ps-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
            @error('country')
                <div class="text-danger ps-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
