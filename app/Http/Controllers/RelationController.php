<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\User;
use App\Relation;

use Illuminate\Support\Facades\DB;

class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($std_id)
    {
        $student = Students::find($std_id);
        $student = DB::table('relations')->orderBy('created_at', 'desc')->where('std_relation_id', $student->std_id)->paginate(6);

        return view('relation.index', [
            'student'=>Students::find($std_id),
            'relations' => $student
            ])
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($std_id)
    {
        $student = Students::find($std_id);
        return view('relation.create',[
            'student'=>Students::find($std_id)
        ] ,compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($std_id, Request $request)
    {

        $rules = [
            'relation' => 'required|string|max:255',
            'relation_name' => 'required|string|max:255',
            'relation_number' => 'required|digits:10|unique:relations,relation_number',
        ];
        $warning = [
            "relation.required" => "The Relation Type is required ",

            "relation_name.required" => "The Relation Name is required ",

            "relation_number.required" => "The Relation Phone number is required ",
            "relation_number.unique" => "This number is already store in the school",
            "relation_number.digits" => "This number must be a 10 digits only!"

        ];
        $validatedData = $request->validate($rules, $warning);

        $new_Relation = new Relation();

        $relation_info = $request->all();
        $new_Relation->std_relation_id = $std_id;


        $new_Relation->fill($relation_info);
        $new_Relation->save();

        $request->session()->flash('success', 'a new relation has been added');
        return redirect()->route('relation.index', $std_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($relation_id, Request $request, Relation $relation)
    {
        $relation = Relation::find($relation_id);
        return view("relation.show", compact("relation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($relation_id, Request $request, Relation $relation)
    {
        $relation = Relation::find($relation_id);
        return view("relation.edit",compact("relation"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($relation_id, Request $request, Relation $relation)
    {

        $relation = Relation::find($relation_id);

        $rules = [
            'relation' => 'required|string|max:255',
            'relation_name' => 'required|string|max:255',
            'relation_number' => 'required|digits:10',
        ];
        $warning = [
            "relation.required" => "The Relation Type is required ",

            "relation_name.required" => "The Relation Name is required ",

            "relation_number.required" => "The Relation Phone number is required ",
            "relation_number.digits" => "This number must be a 10 digits only!"

        ];
        $validatedData = $request->validate($rules, $warning);

        $relation_info = $request->all();

        $relation->update($relation_info);
        $request->session()->flash('success', 'Student Relation updated successfully');

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($relation_id, Request $request)
    {
        Relation::find($relation_id)->delete();

        $request->session()->flash('success', 'Student relation deleted successfully');
        return redirect()->back();
    }
}
