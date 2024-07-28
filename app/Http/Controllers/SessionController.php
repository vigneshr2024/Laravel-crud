<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function index()
    {
        $sessions = Session::all();
        return view('sessions.index', compact('sessions'));
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:sessions',
            'user_id' => 'nullable|exists:users,id',
            'last_activity' => 'required|integer',
        ]);
        $sessions = $request->all();
        unset($sessions['_token']);
        $session = new Session();
        $session->user_id = $request->user_id;
        $session->ip_address = $request->ip();
        $session->user_agent = $request->user_agent;
        $session->payload = $request->payload;
        $session->last_activity = $request->last_activity;
        $session->save();
        return redirect()->route('sessions.index');;
    }

    public function show(Session $session)
    {
        return view('sessions.show', compact('session'));
    }

    public function edit(Session $session)
    {
        return view('sessions.edit', compact('session'));
    }

    public function update(Request $request, Session $session)
    {
        $request->validate([
            'id' => 'required|unique:sessions',
            'user_id' => 'nullable|exists:users,id',
            'last_activity' => 'required|integer',
        ]);
        $sessions = $request->all();
        unset($sessions['_token']);
        $session->user_id = $request->user_id;
        $session->ip_address = $request->ip();
        $session->user_agent = $request->user_agent;
        $session->payload = $request->payload;
        $session->last_activity = $request->last_activity;
        $session->save();
        return redirect()->route('sessions.index');;
    }

    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('sessions.index');
    }
}
