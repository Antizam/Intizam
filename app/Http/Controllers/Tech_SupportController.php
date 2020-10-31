<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\tech_supports;
use App\techSupports;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class tech_supportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('techSupport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        /*
        $id = Auth::id();
        $email = \Auth::user()->email;
        
        $this->validate($request,
         [
           'title' => 'required',
           'description' => 'required',
        ]
     );

       $error = techSupports::create([
           'title' => $request->title,
           'description' => $request->description,
      ]);

      $error->support_id = $id;
      $error->save();
      $request->session()->flash('success', 'Your profile has been updated');
      */
      $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required',
    ];
    $warning = [
        "title.required" => "The Title is required ",
        "description.required" => "The description of the Problem is required "

    ];
    $validatedData = $request->validate($rules, $warning);

      $id = Auth::id();
      $email = \Auth::user()->email;

      $new_tech_support = new techSupports();

      $new_report= $request->all();
      $new_tech_support->support_id = $id;
      $new_tech_support->email = $email;

      $new_tech_support->fill($new_report);
      $new_tech_support->save();

      $request->session()->flash('success', 'The Problem Report has been sent to the Administrator');
      return redirect()->back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
