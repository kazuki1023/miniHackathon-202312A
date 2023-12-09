<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class LineNotificationService
{
  public function send($message)
  {
    $token = env('LINE_NOTIFY_TOKEN');

    Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->asForm()->post('https://notify-api.line.me/api/notify', [
        'message' => $message
    ]);

    return redirect()->back()->with('status', '通知が送信されました。');
  }
}

