@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sessions</h1>
        <a href="{{ route('sessions.create') }}" class="btn btn-primary">Add Session</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>IP Address</th>
                    <th>User Agent</th>
                    <th>Last Activity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sessions as $session)
                    <tr>
                        <td>{{ $session->id }}</td>
                        <td>{{ $session->user_id }}</td>
                        <td>{{ $session->ip_address }}</td>
                        <td>{{ $session->user_agent }}</td>
                        <td>{{ $session->last_activity }}</td>
                        <td>
                            <a href="{{ route('sessions.show', $session->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('sessions.edit', $session->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('sessions.destroy', $session->id) }}" method="POST"
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
