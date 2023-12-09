<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function create()
    {
        return view('club.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|max:200',
            'supplement' => 'max:200',
        ]);
        // 画像フォームでリクエストした画像を取得
        $img = $request->file('image');
        // storage > public > img配下に画像が保存される
        $path = $img->store('img','custom');


        $quiz1 = new Question;
        // $quiz1 = Question::create($validated);
        $quiz1->content = $request->input('content');
        // フォームでtype=”file”としているので、file()でリクエストされたファイル情報を取得します
        $quiz1->image = $path;
        $quiz1->supplement = $request->input('supplement');
        $quiz1->quiz_id = $request->input('quiz_id');

        $quiz1->save();

        return redirect()->route('auth.quiz1');
    }
}
