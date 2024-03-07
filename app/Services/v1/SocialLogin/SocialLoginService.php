<?php

namespace App\Services\v1\SocialLogin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginService
{
    private $platform;
    private $platformId;

    public function __construct($platform, $platformId)
    {
        $this->platform = $platform;
        $this->platformId = $platformId;
    }

    public function redirectTo()
    {
        $user = Socialite::driver($this->platform)->user();

        $finduser = User::where($this->platformId, $user->id)->first();

        if ($finduser) {
            Auth::login($finduser);

            $result = [
                'status' => 200,
                'message' => "Success",
            ];

            return $result;
        } else {
            $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'email' => $user->email,
                    $this->platformId => $user->id,
                    'password' => encrypt($user->name . $user->id)
            ]);

            Auth::login($newUser);

            $result = [
                'status' => 200,
                'message' => "Success",
            ];

            return $result;
        }
    }
}