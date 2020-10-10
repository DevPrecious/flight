<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile($user)
    {
        $user = User::find($user);
        $id = Auth::id();

        return view('profile.profile', [
            'user' => $user,
            'id' => $id,
        ]);
    }

    public function edit($user)
    {
        
        $user = User::find($user);
        
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'email'
        ]);

        auth()->user()->update($data);

        return redirect("/profile/{$user->id}");
    }
}
