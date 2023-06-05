<?php

namespace App\Http\Controllers;

// use Dotenv\Validator;

use App\Models\Invoice;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{
    //

   public function index (){
    return view('dashboard');
   }

    public function fetchInvoices()
    {
        $invoices = Invoice::all();
        return response()->json([
            'invoices'=>$invoices,
        ]);
    }
    public function show(Invoice $id)
{
    $invoice = Invoice::where('id',$id)
            ->where('user_id',Auth::id());
            // ->firstOrFail();
    return view('invoices')->with('invoice', $invoice);

}
    //Save new invoice
    // public function store(Request $request){
    //     Auth::user()->invoices()->create([
    //         'week_beginning' => $request->week_beginning,
    //         'hours_worked' => $request->hours_worked
    //     ]);
    //     return to_route('invoices.store');
    // }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function saveInvoice(Request $request){
        $validator = Validator::make($request->all(),[
            // 'user_id' =>Auth::user()->id,
          
            'week_beginning'=>'required',
            'hours_worked'=>'required',
            'exchange_rate',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
           $invoice = new Invoice;
        //    Auth::user()->invoices()->create([])
            $invoice->user_id = Auth::user()->id;
            $invoice->week_beginning = $request->input('week_beginning');
            $invoice->hours_worked = $request->input('hours_worked');
            $invoice->exchange_rate = $request->input('exchange_rate');
            // $invoice->weekBegining = $request->invoice;
            // $invoice->hoursWorked = $request->invoice;
            // $invoice->exchangeRate = $request->invoice;

            $invoice->save();
            // return view('dashboard', ['invoices' => Invoice::all()]);
            return response()->json([
                'status'=>200,
                'message'=>'Hours Added Successfully'
            ]);
            // return redirect('dashboard');
            // return redirect('/dashboard')->with('success', "Invoice for week " . $request->week_beginning. "Saved");
        }
    }

    public function edit($id){
        $invoice = Invoice::find($id);
        if($invoice){
            return response()->json([
                'status'=>200,
                'invoice'=>$invoice,
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No Invoice Found'
            ]);
        }
    }
 /**
     * Update an existing resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function updateInvoice(Request $request, string $invoice){

        $validator = Validator::make($request->all(), [
            'week_beginning'=>'required',
            'hours_worked'=>'required',
            'exchange_rate'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
            $invoice = Invoice::find($invoice);
            if($invoice){
                $invoice->week_beginning = $request->input('week_beginning');
                $invoice->hours_worked = $request->input('hours_worked');
                $invoice->exchange_rate = $request->input('exchange_rate');
                $invoice->update();

                return response()->json([
                    'status'=>200,
                    'message'=>'Invoice Update Successfully'
                ]);
            }
            else{
                return response()->json([
                    'status'=>400,
                    'message'=>'No Invoice Found'
                ]);
            }
        }
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function destroy($id){
        $invoice = Invoice::find($id);
        if($invoice){

            $invoice->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Invoice Deleted Successfully'
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No Invoice Found'
            ]);
        }
    }


}
