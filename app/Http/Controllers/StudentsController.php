<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\students;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
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
        $users = DB::table('students')->orderBy('created_at', 'desc')->where('user_id', $users->id)->paginate(6);

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
        ];
        $warning = [
            "std_id.required" => "The Student ID is required ",
            "std_id.unique" => "This ID is already store in the school",
            "std_id.digits" => "The ID should be only 10 digits ",

            "std_name.required" => "The Student Name is required ",

            "std_email.required" => "The Student Email is required ",
            "std_email.unique" => "This email is already store in the school",
            "std_email.email" => "This email must be a valid email address,check the syntax !"

        ];
        $validatedData = $request->validate($rules, $warning);

        $new_Students = new Students();

        $std_password = Str::random(8);

        $std_info = $request->all();
        $new_Students->user_id = $id;

        $std_info['std_password'] = Crypt::encryptString($std_password);

        $new_Students->fill($std_info);
        $new_Students->save();

        $request->session()->flash('success', 'a new student has been added');
        return redirect()->route('student.index', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($std_id, Request $request, Students $student)
    {
        $student = Students::find($std_id);

        $std_password_decrypt = Crypt::decryptString($student->std_password);
        $student->std_password = $std_password_decrypt;

        return view("student.show", compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($std_id, Request $request, Students $student)
    {
        $student = Students::find($std_id);

        $std_password_decrypt = Crypt::decryptString($student->std_password);
        $student->std_password = $std_password_decrypt;

        return view("student.edit", compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($std_id, Request $request,  Students $student)
    {
        $student = Students::find($std_id);
        
        $rules = [
            'std_name' => 'required|string|max:255',
            'std_password' => 'required|string|min:8|max:8',
        ];

        $warning = [
            "std_name.required" => "The Student Name is required",
            "std_password.required" => "The Student Password is required",
            "std_password.min" => "The Student Password should be only 8 Character",
            "std_password.max" => "The Student Password should be only 8 Character",

        ];

        $validatedData = $request->validate($rules, $warning);

        $std_info = $request->all();

        if (!empty($std_info['std_password'])) {
            $std_info['std_password'] = Crypt::encryptString($std_info['std_password']);
        } else {
            $std_info = array_except($std_info, array('std_password'));
        }

        // $std_info['std_password'] = Crypt::encryptString($student->std_password);
        $student->update($std_info);
        $request->session()->flash('success', 'Student updated successfully');

        return redirect()->route('student.index', $student->user_id);
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
