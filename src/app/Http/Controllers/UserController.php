<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    public function index(UserService $userService)
    {
        $user = Auth::user();
        $role = $user->role;

        $managers = $userService->getManagers($user);
        return view('dashboard', compact('managers', 'role'));
    }

}
