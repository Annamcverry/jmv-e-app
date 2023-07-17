<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContractorController extends Controller
{
    //

    public function index()
    {
        //
        return view('contractors', ['contractors' =>Contractor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function fetchContractors()
    {
        //
        $contractors = Contractor::all();
        return response()->json([
            'contractors'=>$contractors,
        ]);
        // return view('employees')->with('employees',$employees);
     }



    /**
     * Store a newly created resource in storage.
     */
       /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name',
            'email_address',
            'contact_no',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
            $contractor = new Contractor;
            $contractor->user_id = Auth::user()->id;
            $contractor->name = $request->input('name');
            $contractor->email_address = $request->input('email_address');
            $contractor->contact_no = $request->input('contact_no');
            $contractor->save();
            return response()->json([
                'status'=>200,
                'message'=>'Contractor added'
            ]);
        }
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contractor = Contractor::find($id);
        if($contractor){
            return response()->json([
                'status'=>200,
                'contractor'=>$contractor,
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
    public function update(Request $request, string $contractor)
    {
        $validator = Validator::make($request->all(), [
            'name',
            'email_address',
            'contact_no',
           
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
           $contractor = Contractor::find($contractor);
            if($contractor){
                $contractor->name = $request->input('name');
                $contractor->email_address = $request->input('email_address');
                $contractor->contact_no = $request->input('contact_no');
                $contractor->update();
        
                $request->contractor()->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'contractor details updated succesffully'
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
        $contractor = Contractor::find($id);
        if($contractor){

            $contractor->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Contractor Deleted Successfully'
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No Contractor Found'
            ]);
        }
    }
}
