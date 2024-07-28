@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Password Reset Token</h1>
        <form action="{{ route('password_reset_tokens.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="token">Token</label>
                <input type="text" name="token" id="token" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
