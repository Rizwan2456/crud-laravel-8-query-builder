<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $emp=DB::table('employees')->get();
        return view('read',['employee' => $emp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('insert');
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

        DB::table('employees')->insert([
            'name' => $request->name,
            'gender' => $request->gender,
            'salary' => $request->salary

        ]);

        return redirect(route('employees.index'))->with(['status'=> 'record inserted successfully']);
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
        $employee=DB::table('employees')->where('employee_id', $id)->first();
        
        return view('update', ['employee'=>$employee]);
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
        DB::table('employees')->where('employee_id', $id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'salary' => $request->salary

        ]);
        return redirect(route('employees.index'))->with(['status'=> 'record updated successfully']);

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
        $employee=DB::table('employees')->where('employee_id', $id)->delete();
        return redirect(route('employees.index'))->with(['status'=> 'record deleted successfully']);

    }
}
