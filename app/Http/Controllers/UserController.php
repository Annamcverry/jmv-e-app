<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('employees', ['users' =>User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function fetchEmployees()
    {
        //
        $users = User::all();
        return response()->json([
            'users'=>$users,
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
    public function edit($user)
    {
        $user = User::find($user);
        if($user){
            return response()->json([
                'status'=>200,
                'user'=>$user,
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No user found'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function adminUpdateEmployee(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'contact_no',
            'job_role',
            'rate',
            'licences',
            'safepass',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
           $user = User::find($user);
            if($user){
                $request->user()->contact_no = $request->get('contact_no');
                $request->user()->job_role = $request->get('job_role');
                $request->user()->rate = $request->get('rate');
                $request->user()->licences = $request->get('licences');
                $request->user()->safepass = $request->get('safepass');
        
                $request->user()->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Employee details updated succesffully'
                ]);
            }
            else{
                return response()->json([
                    'status'=>400,
                    'message'=>'No User Found'
                ]);
            }
        }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
