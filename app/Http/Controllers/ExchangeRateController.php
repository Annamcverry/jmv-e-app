<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExchangeRateController extends Controller
{

    public function index(){
        return view('invoices', ['exchange_rates'=>ExchangeRate::all()]);
    }
    //
        /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function saveExchangeRate(Request $request){
        $validator = Validator::make($request->all(), [
            'exchange_rate'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
            $exchangeRate = new ExchangeRate();
            $exchangeRate->exchange_rate = $request->input('exchange_rate');
            $exchangeRate->save();
            return response()->json([
                'status'=>200,
                'message'=>'Exchange Rate saved Successfully'
            ]);

        }
    }
}
