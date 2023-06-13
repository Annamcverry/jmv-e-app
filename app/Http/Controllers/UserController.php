<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('employees');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function fetchEmployees()
    {
        //
        $employees = User::all();
        return response()->json([
            'employees'=>$employees,
        ]);
        // return view('employees')->with('employees',$employees);
    }

     /**
     * Display the specified resource.
     */
    
    public function show(User $id){
        $employee = User::all();
        return view('employees')->with('employee', $employee);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
