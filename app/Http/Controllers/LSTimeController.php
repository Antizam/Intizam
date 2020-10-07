<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class LSTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, Request $request)
    {

        $user = User::find($id);
        if ($user) {
            return view('lstime.index')->withUser($user);
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
                return view('lstime.edit')->withUser($user);
            } else {
                $request->session()->flash('error', 'Whoops ,Something went wrong !');
                return redirect()->route('lstime.index');
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
/*
        $rules = [
                   'sun' => ['date_format:H:i', 'required'],
                    'mon' => ['date_format:H:i', 'required'],
                    'tue' => ['date_format:H:i', 'required'],
                    'wed' => ['date_format:H:i', 'required'],
                    'thu' => ['date_format:H:i', 'required'],
        ];
        $warning = [

            "sun.required" => "The Sunday leaving time is required",
            "sun.date_format" => "The Sunday leaving time should be only as this format hh:ii"
        ];
        $validatedData = $request->validate($rules, $warning);
    
                $user->sun = $request['sun'];
                $user->mon = $request['mon'];
                $user->tue = $request['tue'];
                $user->wed = $request['wed'];
                $user->thu = $request['thu'];

                $user->save();
                $request->session()->flash('success', 'Your Leaving Schedule been updated');

                return redirect()->back();
        */
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->sun === $request['sun']) {
                $validate = $request->validate([

                    'sun' => ['date_format:H:i', 'required'],
                  
                ]);
            }
            if (Auth::user()->mon === $request['mon']) {
                $validate = $request->validate([
                
                    'mon' => ['date_format:H:i', 'required'],
                    
                ]);
            }
            if (Auth::user()->tue === $request['tue']) {
                $validate = $request->validate([
                 
                    'tue' => ['date_format:H:i', 'required'],
                   
                ]);
            }
            if (Auth::user()->wed === $request['wed']) {
                $validate = $request->validate([
                   
                    'wed' => ['date_format:H:i', 'required'],
                    
                ]);
            }
            if (Auth::user()->thu === $request['thu']) {
                $validate = $request->validate([
                   
                    'thu' => ['date_format:H:i', 'required'],
                ]);
            } else {
                $validate = $request->validate([
                    'sun' => ['date_format:H:i', 'required'],
                    'mon' => ['date_format:H:i', 'required'],
                    'tue' => ['date_format:H:i', 'required'],
                    'wed' => ['date_format:H:i', 'required'],
                    'thu' => ['date_format:H:i', 'required'],

                ]);
            }

            if ($validate) {
                $user->sun = $request['sun'];
                $user->mon = $request['mon'];
                $user->tue = $request['tue'];
                $user->wed = $request['wed'];
                $user->thu = $request['thu'];

                $user->save();
                $request->session()->flash('success', 'Your Leaving Schedule been updated');

                return redirect()->back();
            } else {
                $request->session()->flash('error', 'Whoops ,Something went wrong !');
            }
        } else {
            $request->session()->flash('error', 'Whoops ,Something went wrong !');
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
}
