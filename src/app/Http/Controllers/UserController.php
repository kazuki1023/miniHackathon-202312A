<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role = $user->role;

        if ($role == 1) {
            // 管理者1の場合、同じサークルの管理者のみを取得
            $managers = User::where('club_id', $user->club_id)->get();
        } elseif ($role == 2) {
            // 管理者2の場合、全ての管理者を取得
            $managers = User::all();
        }

        return view('dashboard', compact('managers', 'role'));
    }

}
