<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Admin\NotificationController;
use Illuminate\Http\Request;
use App\Notifications\VerifyRegistration;
use App\School;
use App\Nonschool;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function register(Request $request) 
    {
        $userType = $request->usertype;
        $this->validate($request, [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required|unique:users',
                'password' => 'min:8|required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'min:8'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->category = $request->category;
        $user->userType = $request->usertype;
        if($userType=="school")
        {
            $user->area = $request->area;
            $user->type = $request->type;
            $title = 'New School Registered';$message = 'Name: '.$request->name.'& Email: '.$request->email;$type = 'success';
        }else if($userType=="donor"){
            $title = 'New Donor Registered';$message = 'Name: '.$request->name.'& Email: '.$request->email;$type = 'success';
        }else{
            $title = 'New User Registered';$message = 'Name: '.$request->name.'& Email: '.$request->email;$type = 'success';
        }     
        $user->remember_token = time() . rand(1000, 2000);
        $user->password = Hash::make($request->password);
        $user->save();




        if($userType=="school")
        {
            $school = new School;
            $school->user_id  = $user->id;
            $school->save();
        }else{
            $nonschool = new Nonschool;
            $nonschool->user_id  = $user->id;
            $nonschool->save();
        } 
        
        $user->notify(new VerifyRegistration($user));
        NotificationController::saveNotification($title,$message,$type);
        session()->flash('success', 'A verification code has been sent to '.$request->email);
        return redirect()->back(); 

    }
}
