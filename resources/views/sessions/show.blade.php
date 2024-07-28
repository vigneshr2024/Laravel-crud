@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View Session</h1>
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $session->user_id }}" readonly>
        </div>
        <div class="form-group">
            <label for="ip_address">IP Address</label>
            <input type="text" name="ip_address" id="ip_address" class="form-control" value="{{ $session->ip_address }}"
                readonly>
        </div>
        <div class="form-group">
            <label for="user_agent">User Agent</label>
            <textarea name="user_agent" id="user_agent" class="form-control" readonly>{{ $session->user_agent }}</textarea>
        </div>
        <div class="form-group">
            <label for="payload">Payload</label>
            <textarea name="payload" id="payload" class="form-control" readonly>{{ $session->payload }}</textarea>
        </div>
        <div class="form-group">
            <label for="last_activity">Last Activity</label>
            <input type="text" name="last_activity" id="last_activity" class="form-control"
                value="{{ $session->last_activity }}" readonly>
        </div>
        <a href="{{ route('sessions.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
