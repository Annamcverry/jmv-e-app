<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\ContractorInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContractorInvoiceController extends Controller
{
    
    public function index()
    {
        //
        return view('contractorinvoice', ['contractorinvoice' =>ContractorInvoice::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function fetchContractorInvoices()
    {
        
        $contractorinvoices = ContractorInvoice::all();
        return response()->json([
            'contractorinvoice'=>$contractorinvoices,
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
           
            'date'=>'required',
            'amount_paid'=>'required',
            'employee_count'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
            $contractorinvoice = new ContractorInvoice();
            // $contractorinvoice->contractor_id = 1;
            // $contractorinvoice->contractor_id = $request->input('contractor_id');
            $contractorinvoice->date = $request->input('date');
            $contractorinvoice->amount_paid = $request->input('amount_paid');
            $contractorinvoice->employee_count = $request->input('employee_count');
            $contractorinvoice->save();
            return response()->json([
                'status'=>200,
                'message'=>'Invoice added'
            ]);
        }
    }
       /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contractorinvoice = ContractorInvoice::find($id);
        if($contractorinvoice){
            return response()->json([
                'status'=>200,
                'contractorinvoice'=>$contractorinvoice,
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
    public function update(Request $request, string $contractorinvoice)
    {
        $validator = Validator::make($request->all(), [
            'date',
            'amount_paid',
            'employee_count',
           
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
           $contractorinvoice = ContractorInvoice::find($contractorinvoice);
            if($contractorinvoice){
                $contractorinvoice->date = $request->input('date');
                $contractorinvoice->amount_paid = $request->input('amount_paid');
                $contractorinvoice->employee_count = $request->input('employee_count ');
                $contractorinvoice->update();
        
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
        $contractorinvoice = ContractorInvoice::find($id);
        if($contractorinvoice){

            $contractorinvoice->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Invoice Deleted Successfully'
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
