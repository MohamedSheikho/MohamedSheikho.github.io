<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __consruct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
////        return view('home');
//    }

    public function homeeeee(){
        return view('homee.homeeeee');
    }
    public function newPassword(){
        return view('homee.newPassword');
    }



    public function About_us()
    {
        return view('homee.aboutUs');
    }  public function contactUs()
    {
        return view('homee.contactUs');
    }
    public function admin(){
        return view('homee.admin');
    }
    protected function validatePassword(array $data)
    {
        return Validator::make($data, [
            'newPassword' => 'required|min:6',
        ]);
    }
    public function changePassword(Request $request){
        $errors = '';
        $validate = self::validatePassword($request->all());
        if(!$validate->fails()) {
            $userData = User::find(auth()->user()->id);//dd($userData);
            if (Hash::check($request->oldPassword, auth()->user()->password)) {
                $userData = User::find(auth()->user()->id);
                $userData->password = Hash::make($request->newPassword);
                $userData->save();
            } else {
                //return view('homee.newPassword')->withErrors('old password is incorrect');
                dd('old password is incorrect');
            }
        }
        else{
            //return view('homee.newPassword')->withErrors('password must be 6 charecters');
            dd('password must be 6 charecters');
        }
        return view('homee.newPassword');
    }
}
