<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
// use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobListingController extends Controller
{
    //
    public function index(){
        return view('jobs', ['jobs' => JobListing::all()]);
    }

    public function saveJob(Request $request){
        $validator = Validator::make($request->all(), [
            'description'=>'required',
            'location'=>'required',
            'licenses',
            'hours'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else{
            $job = new JobListing;
            $job->description = $request->input('description');
            $job->location = $request->input('location');
            $job->licenses = $request->input('licenses');
            $job->hours = $request->input('hours');
            $job->save();
            return redirect('/jobs');
            // return response()->json([
            //     'status'=>200,
            //     'message'=>'Job added successfully'
            // ]);
        }
    }

    public function fetchJobs(){
        $jobs = JobListing::all();
        return response()->json([
            'jobs'=>$jobs,
        ]);
    }

    public function enquireJob($id){
        $job = JobListing::find($id);
        $user = Auth::user()->id;
        $job->enquiries = $user;
        $job->save();

        return redirect('/jobs');

    }
}
