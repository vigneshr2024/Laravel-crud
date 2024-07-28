@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View Password Reset Token</h1>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $token->email }}" readonly>
        </div>
        <div class="form-group">
            <label for="token">Token</label>
            <input type="text" name="token" id="token" class="form-control" value="{{ $token->token }}" readonly>
        </div>
        <div class="form-group">
            <label for="created_at">Created At</label>
            <input type="text" name="created_at" id="created_at" class="form-control" value="{{ $token->created_at }}"
                readonly>
        </div>
        <a href="{{ route('password_reset_tokens.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
