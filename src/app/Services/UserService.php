<?php
namespace App\Services;
use App\Models\User;

class UserService
{
    public function getManagers($user)
    {
        if ($user->role == 1) {
            return User::where('club_id', $user->club_id)->get();
        } elseif ($user->role == 2) {
            return User::with('club')->get();
        }
    }
}
