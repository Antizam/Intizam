<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $user = User::find($id);

        if ($user) {
            return view('user.profile')->withUser($user);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']) {

                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required', 'email', 'max:255','unique:users',
                    'phone_number' => 'required', 'string', 'min:10', 'max:1', 'unique:users',
                    'city' => 'required', 'string', 'min:2', 'max:30', 
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            }
            if (Auth::user()->city === $request['city']) {

                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required', 'email', 'max:255','unique:users',
                    'phone_number' => 'required', 'string', 'min:10', 'max:1', 'unique:users',
                    'city' => 'required', 'string', 'min:2', 'max:30', 
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            }
            if (Auth::user()->neighborhood === $request['neighborhood']) {

                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required', 'email', 'max:255','unique:users',
                    'phone_number' => 'required', 'string', 'min:10', 'max:1', 'unique:users',
                    'city' => 'required', 'string', 'min:2', 'max:30', 
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            }
            if (Auth::user()->email === $request['phone_number']) {
                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required', 'email', 'max:255','unique:users',
                    'phone_number' => 'required', 'string', 'min:10', 'max:1', 'unique:users',
                    'city' => 'required', 'string', 'min:2', 'max:30', 
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required', 'email', 'max:255','unique:users',
                    'phone_number' => 'required', 'string', 'min:10', 'max:1', 'unique:users',
                    'city' => 'required', 'string', 'min:2', 'max:30', 
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            }

            if ($validate) {
                $user->name = $request['name'];
                $user->email = $request['email'];
                $user->phone_number = $request['phone_number'];
                $user->city = $request['city'];
                $user->neighborhood = $request['neighborhood'];

                $user->save();
                $request->session()->flash('success', 'Your detalis is update');

                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function passwordEdit()
    {
        //
    }

    public function passwordUpdate()
    {
        //
    }
}
