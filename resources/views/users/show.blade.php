@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View User</h1>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" readonly>
        </div>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
