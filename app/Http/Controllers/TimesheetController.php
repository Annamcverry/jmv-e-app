<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use App\Models\User;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Type\Time;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminView()
    {
        return view('admintimesheets', ['timesheets' => Timesheet::all()]);
    }
    public function allInvoices()
    {
        return view('invoices', ['timesheets' => Timesheet::all(), 'users'=> User::all()]);
    }

    public function index()
    {
        $userId = Auth::id();
        $timesheets = Timesheet::where('user_id', $userId)->get();
        $timesheets->each(function($timesheet){
            return view('invoices')->with($timesheet->id, $timesheet->week_beginning, $timesheet->user_id);
            
        // return view('invoices')->with('timesheet', $timesheet);
        });
                    // ->where('user_id', Auth::id());
        
                    // return view('invoices', ['timesheets' => Timesheet::all(), 'users'=> User::all()]);
                    // return view('timesheet')->with('timesheet', $timesheet);
                    // return view('invoices', [ 'users'=> User::all()]);
            
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }
    public function fetchTimesheets(){
        $timesheets = Timesheet::all();
        return response()->json([
            'timesheets'=>$timesheets,
        ]);
    }

    public function fetchInvoices (){
        $timesheets = Timesheet::where('user_id', User::class()->id);
        return response()->json([
            'timesheets'=>$timesheets,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function saveTimesheet(Request $request)
    {
        $validator = Validator::make($request->all(),[
            // 'user_id'=>Auth::user()->id,
            
            'week_beginning'=>'required',
            'mon_hours'=>'required',
            'tue_hours'=>'required',
            'wed_hours'=>'required',
            'thurs_hours'=>'required',
            'fri_hours'=>'required',
            'sat_hours'=>'required',
            'sun_hours'=>'required',
         
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
            $timesheet = new Timesheet;
            $timesheet->user_id = Auth::user()->id;
            $timesheet->week_beginning = $request->input('week_beginning');
            $timesheet->mon_hours = $request->input('mon_hours');
            $timesheet->tue_hours = $request->input('tue_hours');
            $timesheet->wed_hours = $request->input('wed_hours');
            $timesheet->thurs_hours = $request->input('thurs_hours');
            $timesheet->fri_hours = $request->input('fri_hours');
            $timesheet->sat_hours = $request->input('sat_hours');
            $timesheet->sun_hours = $request->input('sun_hours');
         
            $timesheet->save();
            return response()->json([
                'status'=>200,
                'message'=>'Hours for the week saved successfully'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Timesheet $id)
    {
        //
        $timesheet = Timesheet::where('id',$id)
                    ->where('user_id', Auth::id());
        return view('timesheet')->with('timesheet', $timesheet);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $timesheet = Timesheet::find($id);
        if($timesheet){
            return response()->json([
                'status'=>200,
                'timesheet'=>$timesheet,
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No Timesheet Found'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $timesheet)
    {
        $validator = Validator::make($request->all(), [
            'week_beginning'=>'required',
            'mon_hours'=>'required',
            'tue_hours'=>'required',
            'wed_hours'=>'required',
            'thurs_hours'=>'required',
            'fri_hours'=>'required',
            'sat_hours'=>'required',
            'sun_hours'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
            $timesheet = Timesheet::find($timesheet);
            if($timesheet){
                $timesheet->week_beginning = $request->input('week_beginning');
                $timesheet->mon_hours = $request->input('mon_hours');
                $timesheet->tue_hours = $request->input('tue_hours');
                $timesheet->wed_hours = $request->input('wed_hours');
                $timesheet->thurs_hours = $request->input('thurs_hours');
                $timesheet->fri_hours = $request->input('fri_hours');
                $timesheet->sat_hours = $request->input('sat_hours');
                $timesheet->sun_hours = $request->input('sun_hours');
                $timesheet->update();

                return response()->json([
                    'status'=>200,
                    'message'=>'Timesheet Updated Successfully'
                ]);
            }
            else{
                return response()->json([
                    'status'=>400,
                    'message'=>'No Timesheet Found'
                ]);
            }
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $timesheet = Timesheet::find($id);
        if($timesheet){

            $timesheet->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Timesheet Deleted Successfully'
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No Timesheet Found'
            ]);
        }
    }

    public function approveTimesheet($id){
        $timesheet = Timesheet::find($id);
        $timesheet->status = "Approved";
        $timesheet->save();

        return redirect('/admintimesheets');            
    }

    public function reviewTimesheet($id){
        $timesheet = Timesheet::find($id);
        $timesheet->status = "In Review";
        $timesheet->save();

        return redirect('/admintimesheets');
        return response()->json([
                        'status'=>200,
                        'message'=>'Timesheet Reviewed Successfully'
                    ]);
            
    }
}

