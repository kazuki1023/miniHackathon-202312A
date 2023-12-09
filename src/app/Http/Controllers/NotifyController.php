<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NotifyController extends Controller
{
    public function index()
    {
        return view('notify.index');
    }

    public function send(Request $request)
    {
        $token = env('LINE_NOTIFY_TOKEN');
        $message = "新しい管理者が追加されました。";

        Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->asForm()->post('https://notify-api.line.me/api/notify', [
            'message' => $message
        ]);

        return redirect()->back()->with('status', '通知が送信されました。');
    }
}
