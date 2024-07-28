<?php

namespace App\Http\Controllers;

use App\Models\PasswordResetToken;
use Illuminate\Http\Request;

class PasswordResetTokenController extends Controller
{
    public function index()
    {
        $tokens = PasswordResetToken::all();
        return view('password_reset_tokens.index', compact('tokens'));
    }

    public function create()
    {
        return view('password_reset_tokens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:password_reset_tokens',
            'token' => 'required',
        ]);
        $tokens = $request->all();
        unset($tokens['_token']);
        $token = new PasswordResetToken();
        $token->email = $request->email;
        $token->token = $request->token;
        $token->save();
        return redirect()->route('password_reset_tokens.index');
    }

    public function show(PasswordResetToken $token)
    {
        return view('password_reset_tokens.show', compact('token'));
    }

    public function edit(PasswordResetToken $token)
    {
        return view('password_reset_tokens.edit', compact('token'));
    }

    public function update(Request $request, PasswordResetToken $token)
    {
        $request->validate([
            'email' => 'required|email|unique:password_reset_tokens',
            'token' => 'required',
        ]);
        $tokens = $request->all();
        unset($tokens['_token']);
        $token->email = $request->email;
        $token->token = $request->token;
        $token->save();
        return redirect()->route('password_reset_tokens.index');
    }

    public function destroy(PasswordResetToken $token)
    {
        $token->delete();
        return redirect()->route('password_reset_tokens.index');
    }
}
