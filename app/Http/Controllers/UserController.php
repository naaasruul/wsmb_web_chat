<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function registerUser(Request $request){


        $cred = $request->validate(
            [
                'username'=>['required','unique:users,username'],
                'password'=>['confirmed','required'],
            ]
            );


        if(User::create([
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'avatar_url'=>''
        ])){
            return redirect()->route('login')->with('status','Registeration Succesful');
        }
        else{
            return back()->withErrors(['registration' => 'There was an issue with registration. Plase try again']);
        }

    }

    public function loginUser(Request $request){
        $cred = $request->validate(
            [
                'username'=>'required',
                'password'=>'required'
            ]
            );

        if(Auth::attempt([
            'username'=>$request->username,
            'password'=>$request->password,
        ])){

            $user = Auth::user();
 
            $user->online = true;
            $user->save();

            $request->session()->regenerate();


           
            return redirect()->route('chat');
        };
        return back()->withErrors(['login' => 'There\'s error. try again']);
    }
}
