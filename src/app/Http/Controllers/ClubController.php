<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;

class ClubController extends Controller
{
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
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password'=> 'required',
            'new_password' => 'required'
        ]);
        $user = new User;
        $user->email = $request->input('email');
        $user->password = $request->input('new_password');
        $user->save();

        return redirect()->route('dashboard');
    }
}
