<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=DB::table('student')->get();
        //dd($students);
        return view('students',['students'=>$students]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required|min:5',
            'email'=>'required|min:15',
            'marks'=>'required',
            
        ]);
        DB::table('student')->insert(['name'=>$request->name,
        'email'=>$request->email,'marks'=>$request->marks,]);
        return redirect(route('index'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $student=DB::table('student')->find($id);
     // dd($student);
      return view('edit',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
       DB::table('student')->where('id',$id)->update([
        'name'=>$request->name,
        'email'=>$request->email,'marks'=>$request->marks,]);
        return redirect(route('index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $del= DB::table('student')->where('id',$id)->delete();
        //dd($del);
        return redirect(route('index'));
    }
}
