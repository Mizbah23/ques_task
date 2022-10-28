<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Area;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Setting;
use Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        
    }
    public function showLoginForm()
    {
        $data = array();
        $data['title'] = 'Login Panel';

        return view('auth.login',$data);
    }
    public function login(Request $request)
    {
//        $this->validate($request,['email' => 'required','password' => 'required| min:8']);
//        $user = User::where('email', $request->email)->first();
//        if(!is_null($user))
//        {   
//           if(!Hash::check($request->password, $user->password))
//           {
//               // dd($user);
//               session()->flash('error', 'Your Password is wrong !!');
//               return redirect()->route('login');
//           }else{
//                if ($user->hasVerifiedEmail()) 
//                {
//                  
//                    if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
//
////                        return redirect()->route('home');
//                        return redirect()->back();
//                    }
//                   
//                } else {
//                    session()->flash('error', 'You have not verified your email ');
////                    $user->notify(new VerifyRegistration($user));
//                    return redirect()->route('login');
//                }
//            }
//        }else{
//           session()->flash('error', 'Please Register first !!');
//           return redirect()->route('login');
//        }
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password,'status'=>1],$request->remember))
        {
            $info = User::where('id',Auth::guard('web')->user()->id)->first();
            if($info)
            {
                $menu_array = preg_split("/,/", $info->mper);
                foreach ($menu_array as $menu_per) 
                {
                    Session::put($menu_per,$menu_per);              
                }
                $work_array = preg_split("/,/", $info->wper);
                foreach ($work_array as $work_per) 
                {
                    Session::put($work_per,$work_per);              
                }
            }
            return redirect()->intended(route('dashboard'));
           
        }
        session()->flash('error','Something went wrong!!!');
        return redirect()->back()->withInput($request->only('email','remember'));
        
        
        
        
    }
    public function logout() 
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
