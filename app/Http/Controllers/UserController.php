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
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'contact_no',
            'rate',
            'job_role',
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
            $user = new User;
            $user->name = $request->get('contact_no');
            $user->job_role = $request->get('job_role');
            $user->rate = $request->get('rate');
            $user->licences = $request->get('licences');
            $user->safepass = $request->get('safepass');
            
         
        }
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
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
    public function adminUpdateEmployee(Request $request, string $user)
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
                $user->contact_no = $request->input('contact_no');
                $user->job_role = $request->input('job_role');
                $user->rate = $request->input('rate');
                $user->licences = $request->input('licences');
                $user->safepass = $request->input('safepass');
                $user->update();
        
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
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){

            $user->delete();
            return response()->json([
                'status'=>200,
                'message'=>'User Deleted Successfully'
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No User Found'
            ]);
        }
    }
}
