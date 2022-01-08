<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->createUser('fajaaro', 'Fajar Hamdani', 'fajar123', 'admin');
        $this->createUser('marwin', 'Marwin', 'marwin123', 'member');
        $this->createUser('marwin', 'Member 1', 'member123', 'member');
        $this->createUser('marwin', 'Member 2', 'member123', 'member');
        $this->createUser('marwin', 'Member 3', 'member123', 'member');
    }

    private function createUser($username, $fullName, $password, $role)
    {
        $user = new User();
        $user->username = $username;
        $user->full_name = $fullName;
        $user->password = Hash::make($password);
        $user->role = $role;
        $user->save();
    }
}
