@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Session</h1>
        <form action="{{ route('sessions.update', $session->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $session->user_id }}"
                    required>
            </div>
            <div class="form-group">
                <label for="ip_address">IP Address</label>
                <input type="text" name="ip_address" id="ip_address" class="form-control"
                    value="{{ $session->ip_address }}">
            </div>
            <div class="form-group">
                <label for="user_agent">User Agent</label>
                <textarea name="user_agent" id="user_agent" class="form-control">{{ $session->user_agent }}</textarea>
            </div>
            <div class="form-group">
                <label for="payload">Payload</label>
                <textarea name="payload" id="payload" class="form-control" required>{{ $session->payload }}</textarea>
            </div>
            <div class="form-group">
                <label for="last_activity">Last Activity</label>
                <input type="text" name="last_activity" id="last_activity" class="form-control"
                    value="{{ $session->last_activity }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
