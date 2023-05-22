<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use App\Models\Invoice;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    //
    public function index(){
        //return view('index', ['invoices'=>Invoice::all()]);
        // $userID = Auth::id();
        // $invoices = Invoice::where('employee_invoices.user_id', $userID)->get();
        //dd($invoices);
        // return view('dashboard')->with('invoices', $invoices);
    }

    public function fetchInvoices(){
        $invoices = Invoice::all();
        return response()->json([
            'invoices'=>$invoices,
        ]);
    }

    //Save new invoice
    // public function saveInvoice(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'week_beginning'=> 'required',
    //         'hours_worked'=> 'required',
    //     ]);
    //     if($validator->fails()){
    //         return response()->json([
    //             'status'=>400,
    //             'errors'=>$validator->messages()
    //         ]);
    //     }
    //     else{
    //         $invoice = new Invoice;
    //         $invoice->weekBeginning = $request->input('week_beginning');
    //         $invoice->hoursWorked = $request->input('hours_worked');
    //         $invoice->save();

    //         return response()->json([
    //             'status'=>200,
    //             'success-message'=>'Invoice Saved Successfully'
    //         ]);
    //     }
    
    // }
}
