<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\LineNotifyService;

class AdminController extends Controller
{

    protected $lineNotify;

    public function __construct(LineNotifyService $lineNotify)
    {
        $this->lineNotify = $lineNotify;
    }
    public function index()
    {
        return view('admin.addclub');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'clubname' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8', 
        ]);
        $response = $this->lineNotify->sendNotification($request->name . "さんが" . $request->clubname . "の代表になりました。");
        dd($response);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 1
        ]);

        $user->save();

        $club = Club::create([
            'name' => $request->clubname,
        ]);
        $club->save();

        return view('admin.addclub')->with('success', 'ユーザーが登録されました。');
    }

}
