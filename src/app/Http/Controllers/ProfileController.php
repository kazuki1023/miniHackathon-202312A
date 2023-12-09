<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Services\LineNotificationService;
use Exception;

class ProfileController extends Controller
{
    protected $lineNotification;

    public function __construct(LineNotificationService $lineNotification)
    {
        $this->lineNotification = $lineNotification;
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function create(): View
    {
        $user = Auth::user();
        $clubId = $user->club_id;
        
        $clubName= DB::table('clubs')->where('id', $clubId)->value('name');

        // サークル情報も返す
        return view('user.create')->with([
            'clubName' => $clubName,
        ]);
    }

    // メールアドレス認証、LINE通知、サークル情報を登録する
    public function storeUser(StoreUserRequest $request)
    {
        try {
            $validatedData = $request->validated();
    
            $validatedData['password'] = Hash::make($validatedData['password']);
    
            $name = $validatedData['name'];
            $email = $validatedData['email'];
            $password = $validatedData['password'];
            $role = 'admin1';
    
            $clubName = $validatedData['club_name'];
            $clubId = DB::table('clubs')->where('name', $clubName)->value('id');
    
            // ユーザー情報を登録する
            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role' => $role,
                'club_id' => $clubId,
            ]);
    
            $currentUserName = Auth::user()->name;
    
            $message = $currentUserName . 'さんが' . $name . 'さんを'. $clubName . 'の管理者に登録しました。';
    
            // LINE通知を送る
            $this->lineNotification->send($message);
    
            return redirect()->route('profile.edit')->with('success', 'ユーザーが正常に追加されました。');
        } catch (Exception $e) {
            return redirect()->route('user.create')->with('error', 'エラーが発生しました: ' . $e->getMessage());
        }
    }
}
