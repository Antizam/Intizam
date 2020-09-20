<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id, Request $request)
    {
        $user = User::find($id);

        if ($user) {
            return view('user.profile')->withUser($user);
        } else {
            $request->session()->flash('danger', ' This profile does not exist');
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
    public function edit(Request $request)
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                $request->session()->flash('error', 'Whoops ,Something went wrong !');
                return redirect()->route('user.profile');
            }
        } else {
            $request->session()->flash('error', 'This page only for authenticated users !');
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
    public function update(Request $request, User $user)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']) {

                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'phone_number' => 'required|digits:10', 'unique:users,phone_number,'.$user->id,
                    'city' => 'required', 'string', 'min:2', 'max:30',
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            }
            if (Auth::user()->city === $request['city']) {

                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'phone_number' => 'required|digits:10', 'unique:users,phone_number,'.$user->id,
                    'city' => 'required', 'string', 'min:2', 'max:30',
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            }
            if (Auth::user()->neighborhood === $request['neighborhood']) {

                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'phone_number' => 'required|digits:10', 'unique:users,phone_number,'.$user->id,
                    'city' => 'required', 'string', 'min:2', 'max:30',
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            }
            if (Auth::user()->email === $request['phone_number']) {
                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'phone_number' => 'required|digits:10', 'unique:users,phone_number,'.$user->id,
                    'city' => 'required', 'string', 'min:2', 'max:30',
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            }
            if (Auth::user()->email === $request['name']) {
                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'phone_number' => 'required|digits:10', 'unique:users,phone_number,'.$user->id,
                    'city' => 'required', 'string', 'min:2', 'max:30',
                    'neighborhood' => 'required', 'string', 'min:2', 'max:30'
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required', 'string', 'min:8',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'phone_number' => 'required|digits:10', 'unique:users,phone_number,'.$user->id,
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
                $request->session()->flash('success', 'Your profile has been updated');

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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function passwordEdit()
    {
        return view('user.password');
    }

    public function passwordUpdate()
    {
        //
    }

    public function changePassword(Request $request)
    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");
    }
}
