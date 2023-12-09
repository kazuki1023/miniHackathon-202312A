<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    public function index($club_id)
    {

        $users=User::where('club_id',$club_id)->get();
        return view('club.index',compact('users'));
    }

    public function create()
    {
        return view('club.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password'=> 'required',
    //         'club' => 'required',
    //     ]);
    //     // 登録するもの : $request:User -> name, email, password / Club -> name
    //     // Club -> id / User -> club_id はidを取得してから登録する

    //     $club = new Club;
    //     $user = new User;
        
    //     // 最後のidを取得する
    //     $id = lastInsertID();
    //     $club->id = $request->;
    //     $club->name = $request->input('password');

    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->password = $request->input('password');
    //     // フォームでtype=”file”としているので、file()でリクエストされたファイル情報を取得します
    //     $club->image = $path;
    //     $quiz1->supplement = $request->input('supplement');
    //     $quiz1->quiz_id = $request->input('quiz_id');

    //     $quiz1->save();

    //     return redirect()->route('auth.quiz1');
    // }
}
