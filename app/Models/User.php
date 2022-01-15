<?php

namespace App\Models;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'full_name',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function inRole($role) {
        return $this->role == $role;
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function friends($status = null)
    {   
        if ($status == 'incoming_friend') {
            $lists = Friend::where([
                ['status', 'pending'],
                ['user_two_id', $this->id]
            ])->latest()->pluck('user_one_id')->toArray();

            return User::whereIn('users.id', $lists)->join('friends', 'users.id', '=', 'friends.user_one_id')->select('users.*', 'friends.id as list_friend_id')->latest()->get();
        } else if ($status == 'accepted_friend') {
            $listsOne = Friend::where([
                ['status', 'accepted'],
                ['user_two_id', $this->id]
            ])->latest()->pluck('user_one_id')->toArray();            

            $listsTwo = Friend::where([
                ['status', 'accepted'],
                ['user_one_id', $this->id]
            ])->latest()->pluck('user_two_id')->toArray();

            $lists = array_merge($listsOne, $listsTwo);            

            return User::whereIn('id', $lists)->latest()->get();
        } else if ($status == 'pending_friend') {
            $lists = Friend::where([
                ['status', 'pending'],
                ['user_one_id', $this->id]
            ])->latest()->pluck('user_two_id')->toArray();

            return User::whereIn('users.id', $lists)->join('friends', 'users.id', '=', 'friends.user_two_id')->select('users.*', 'friends.id as list_friend_id')->latest()->get();            
        }
    }
}
