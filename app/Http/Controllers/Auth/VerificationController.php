<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\User;
use Auth;
class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//        $this->middleware('signed')->only('verify');
//        $this->middleware('throttle:6,1')->only('verify', 'resend');
//    }
    public function verify($token)
    {
        $user = User::where('remember_token', $token)->first();
        if (!is_null($user)) 
        {
            $user->email_verified_at = now();
            $user->remember_token = NULL;
            
            if($user->userType=="school")
            {
                session()->flash('warning', 'You registered successfully, wait for the admin approval !!');
            }else{
                $user->status = 1;
                session()->flash('success', 'You are registered successfully !! Login Now'); 
            }
            $user->save();
        }else {
            session()->flash('errors', 'Sorry !! Your token is not matched !!');
        }
        return redirect()->route('login');
    }
}
