<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use App\Models\Friend;
use App\Models\User;
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
        $user = Auth::user();
        $incomingFriends = $user->friends('incoming_friend');
        $acceptedFriends = $user->friends('accepted_friend');
        $pendingFriends = $user->friends('pending_friend');

        return view('profiles.friends', compact('user', 'incomingFriends', 'acceptedFriends', 'pendingFriends'));
    }

    public function addFriend(Request $request)
    {
        $userTwo = User::where('username', $request->username)->first();

        if (!$userTwo) return back()->with('failed', 'User not found!');

        $friend = Friend::where([
            ['user_one_id', Auth::id()],
            ['user_two_id', $userTwo->id],
        ])->first();
        if (!$friend) {
            $friend = Friend::where([
                ['user_one_id', $userTwo->id],
                ['user_two_id', Auth::id()],
            ])->first();
        }

        if ($friend) {
            $listName;

            if ($friend->status == 'accepted') $listName = 'friend list';
            if ($friend->status == 'pending') $listName = 'friend request';

            return back()->with('failed', 'Failed! ' . $request->username . ' is already on your ' . $listName . '.');
        }

        $friend = new Friend();
        $friend->user_one_id = Auth::id();
        $friend->user_two_id = $userTwo->id;
        $friend->status = 'pending';
        $friend->save();

        return back()->with('success', 'Success request add friend!');
    }

    public function updateFriend(Request $request)
    {
        $friend = Friend::find($request->id);
        $friend->status = $request->status;
        $friend->save();

        if ($friend->status == 'rejected' || $friend->status == 'cancel') $friend->delete();

        return back()->with('success', 'Success!');
    }

    public function transactions()
    {
        $transactions = Auth::user()->transactions;

        return view('profiles.transactions', compact('transactions'));
    }
}
