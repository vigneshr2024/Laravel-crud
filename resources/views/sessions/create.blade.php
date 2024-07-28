@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Session</h1>
        <form action="{{ route('sessions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" id="user_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ip_address">IP Address</label>
                <input type="text" name="ip_address" id="ip_address" class="form-control">
            </div>
            <div class="form-group">
                <label for="user_agent">User Agent</label>
                <textarea name="user_agent" id="user_agent" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="payload">Payload</label>
                <textarea name="payload" id="payload" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="last_activity">Last Activity</label>
                <input type="text" name="last_activity" id="last_activity" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
