<?php

namespace App\Http\Controllers;

use App\Employees;
use App\User;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employees::latest()->get();
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
        $this->validate($request,[
            'name'=>'required',
            'body'=>'required',
            ]);

        
        Employees::create($request->all());

        return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees)
    {
        $employees->update($request->all());

        return "success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employees::destroy($id);
        
        return "deleted";
    }
}
