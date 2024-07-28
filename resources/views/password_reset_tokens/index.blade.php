@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Password Reset Tokens</h1>
        <a href="{{ route('password_reset_tokens.create') }}" class="btn btn-primary">Add Token</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Token</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tokens as $token)
                    <tr>
                        <td>{{ $token->email }}</td>
                        <td>{{ $token->token }}</td>
                        <td>{{ $token->created_at }}</td>
                        <td>
                            <a href="{{ route('password_reset_tokens.show', $token->email) }}" class="btn btn-info">View</a>
                            <a href="{{ route('password_reset_tokens.edit', $token->email) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('password_reset_tokens.destroy', $token->email) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
