<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('profiles.index', compact('user'));
    }

    public function update(UpdateProfile $request)
    {
        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) return back()->with('failed', 'Incorrect password!');

        if ($request->hasFile('avatar')) {
            Storage::delete($user->avatar_url);
            $user->avatar_url = uploadFile($request->file('avatar'), 'users-avatar');
        }

        $user->full_name = $request->full_name;
        if ($request->new_password) $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Profile updated!');
    }

    public function friends()
    {
        return view('profiles.friends');
    }
    public function transactions()
    {
        $transactions = Auth::user()->transactions;

        return view('profiles.transactions', compact('transactions'));
    }
}
