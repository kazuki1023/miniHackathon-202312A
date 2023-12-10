<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class LineNotifyService
{
  public function sendNotification($message)
  {
      $token = env('LINE_NOTIFY_TOKEN');
      $response = Http::withHeaders([
          'Authorization' => 'Bearer ' . $token,
          'Content-Type' => 'application/x-www-form-urlencoded'
      ])->asForm()->post('https://notify-api.line.me/api/notify', [
          'message' => $message
      ]);
      return $response->json();
  }
}
