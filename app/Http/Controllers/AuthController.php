<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function loginView(){
    	$data['title']='Login From';

    	return view('frontend.login',$data);

    }
    public function login(Request $request){

    	$request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
    	//dd($request->all());
    	try{
    		 Auth::attempt([
            'email'    => $request->email,
             'password' => $request->password,
         ]);
    	

    	return  redirect()->route('user.profile')->with('success','Login succesfully');

    	}catch(Exception $e){
         return  redirect()->back()->with('error','Email or password may invalid');
    	}
    }

    public function profile(){
       $data['title']='profile';
       $data['user'] = Auth::user();
       //dd($data['user']);

       return view('frontend.user_dashboard',$data);

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')
          
            ->with('success', 'successfully logout');
    }

}
