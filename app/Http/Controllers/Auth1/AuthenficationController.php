<?php

namespace App\Http\Controllers\Auth1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageCreated;

class AuthenficationController extends Controller
{
     /**
     * register view  
     * @params NA
     * @return view
     */
    public function create(){
        return view('Auth.register');
    }
    
    /**
     * Register user 
     * @params request
     * @return response
     */

    public function Register(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('_home-path');
    }

    /**
     * Login page  
     * @params NA
     * @return view
     */
    public function login(){
        return view('Auth.login');
    }
    /**
     * user Login  
     * @params request
     * @return response 
     */
    public function loginValidate(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|confirmed|min:8'
        ]);

        $user=User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                return back()->with('success','Success ! your are logged in');
            }
            return back()->with('failed','Failded invalid email');
        }
    }

    /**
     * Forgot password  
     * @params NA
     * @return view
     */
    public function forgotPassword(){
        return view('Auth.forgot-password');
    }

    /**
     * validate token for forgot password   
     * @params token
     * @return view
     */
    public function forgotPasswordValidate($token){
        $user=User::where('rememeber_token',$token)->where('email_verified_at',0)->first();
        if($user){
            $email=$user->email;
            return view('Auth.reset-password',compact('email'));
        }
        return redirect()->route('forgot-password')->with('failed','password reset link is expired');

    }

    /**
     * Rest password 
     * @params request
     * @return response
     */
    public function resetPassword(Request $request){
        $this->validate($request,[
            'email'=>'required|email'
        ]);

        $user=User::where('email',$request->email)->first();
        if(!$user){
            return back()->with('failed','Failed email is not registered.');
        }
        $token= Str::random(60);
        $user['token']=$token;
        $user['email_verified_at']=0;
        $user->save();
        Mail::to($request->email)->send(new ContactMessageCreated($user->name),$token);
        if(Mail::failures() !=0){
            return back()->with('success','Success password reset link has been sent to your email');
        }
        return back()->with('Failed','Failed there is some issue with email provider');
    }

    /**
     * Change password  
     * @params request
     * @return response
     */
    public function updatePassword(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:8',
            'confirm_password'=>'requires|same:password'
        ]);

        $user= User::where('email',$request->email)->first();
        if($user){
            $user['email_verified_at']=0;
            $user['remember_token']='';
            $user['password']=Hash::make($request->password);
            $user->save();
            return redirect()->route('login')->with('success','Success password has been change');
        }
        return redirect()->route('forgot-password')->with('failed','Failed something went wrong');
    }

}
