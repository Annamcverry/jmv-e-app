<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/timesheeets');
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

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(),[
        $validator = Validator::make($request->all(),[
            // 'user_id'=>Auth::user()->id,
            
            'week_beginning'=>'required',
            'mon_start_time'=>'required',
            'mon_end_time'=>'required',
            'tue_start_time'=>'required',
            'tue_end_time'=>'required',
            'wed_start_time'=>'required',
            'wed_end_time'=>'required',
            'thurs_start_time'=>'required',
            'thurs_end_time'=>'required',
            'fri_start_time'=>'required',
            'fri_end_time'=>'required',
            'sat_start_time'=>'required',
            'sat_end_time'=>'required',
            'sun_start_time'=>'required',
            'sun_end_time'=>'required',
        ]);
        if($validator->fail()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
            $timesheet = new Timesheet;
            $timesheet->user_id = Auth::user()->id;
            $timesheet->week_beginning = $request->input('week_beginning');
            $timesheet->mon_start_time = $request->input('mon_start_time');
            $timesheet->mon_end_time = $request->input('mon_end_time');
            $timesheet->tue_start_time = $request->input('tue_start_time');
            $timesheet->tue_end_time = $request->input('tue_end_time');
            $timesheet->wed_start_time = $request->input('wed_start_time');
            $timesheet->wed_end_time = $request->input('wed_end_time');
            $timesheet->thurs_start_time = $request->input('thurs_start_time');
            $timesheet->thurs_end_time = $request->input('thurs_end_time');
            $timesheet->fri_start_time = $request->input('fri_start_time');
            $timesheet->fri_end_time = $request->input('fri_end_time');
            $timesheet->sat_start_time = $request->input('sat_start_time');
            $timesheet->sat_end_time = $request->input('sat_end_time');
            $timesheet->sun_start_time = $request->input('sun_start_time');
            $timesheet->sun_end_time = $request->input('sun_end_time');

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
    public function show(string $id)
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
