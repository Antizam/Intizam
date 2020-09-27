<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\students;
use Hash;

use Illuminate\Pagination\LengthAwarePaginator;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, Request $request)
    {
        $users = User::find($id);
        $users = DB::table('students')->where('user_id', $users->id)->paginate(6);

        return view('student.index', ['students' => $users])
            ->with('i');

        /*
        $users = User::find($id);
        $users->load(['students' => function ($q){
        $q->orderBy('created_at', 'desc')->paginate(6);
        }]);
        return view('student.index', compact('users'))
        ->with('i', ($request->input('page', 1) - 1) * 5);

       
       $user = User::find($id);

        foreach ($user->students as $student) {
            return view('index', compact('student'));
          
        
        }
        $students = Students::first();
        $students = $students->user->std_id;
        dd($students);
        /*$users = User::all();
        return view('index', compact('users'));
        
        $users = User::find(1);
        $students = $users->students()
            ->orderBy('std_name', 'asc')
            ->get();
            */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $rules = [
            'std_id' => 'required|digits:10|unique:students,std_id',
            'std_name' => 'required|string|max:255',
            'std_email' => 'required|email|unique:students,std_email',
            'std_password' => 'required|min:8',
        ];
        $warning = [
            "std_id.required" => "The Student ID is required ",
            "std_id.unique" => "This ID is already store in the school",
            "std_id.digits" => "The ID should be only 10 digits ",

            "std_name.required" => "The Student Name is required ",

            "std_email.required" => "The Student Email is required ",
            "std_email.unique" => "This email is already store in the school",
            "std_email.email" => "This email must be a valid email address,check the syntax !",

            "std_password.required" => "The Students password is required",
            "std_password.min" => "The Students password should be at least 8 character"
        ];
        $validatedData = $request->validate($rules, $warning);

        $new_Students = new Students();


        $info = $request->all();
        $new_Students->user_id = $id;
        $info['std_password'] = Hash::make($info['std_password']);
        $new_Students->fill($info);
        $new_Students->save();

        $request->session()->flash('success', 'Your profile has been updated');
        return redirect()->route('student.index', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($std_id, Request $request)
    {
        $student = Students::find($std_id);
        return view("student.edit", compact("student"));
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
    public function destroy($std_id, Request $request)
    {
        students::find($std_id)->delete();

        $request->session()->flash('success', ' a student deleted successfully');
        return redirect()->back();
    }
}
