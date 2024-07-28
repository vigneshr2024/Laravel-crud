@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Password Reset Token</h1>
        <form action="{{ route('password_reset_tokens.update', $token->email) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $token->email }}" required>
            </div>
            <div class="form-group">
                <label for="token">Token</label>
                <input type="text" name="token" id="token" class="form-control" value="{{ $token->token }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
