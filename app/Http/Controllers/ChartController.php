<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Timesheet;
use FontLib\Table\Type\name;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{


    public function index(){


        $year = User::select(DB::raw("(name) as name"))   
                ->get()->toArray();
        $year = array_column($year, 'name');

        $user = Timesheet::select(DB::raw("SUM(total_hours) as hours"))
                ->get()->toArray();
        $user = array_column($user, 'hours');

        

        return view('visualisations.chart')  
        ->with('year',json_encode($year,JSON_NUMERIC_CHECK))  
        ->with('user',json_encode($user,JSON_NUMERIC_CHECK));  

        // $user = [];
        // foreach($year as $key => $value ){
        //     $user[] = Timesheet::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
          
        // }
        // return view('chart')->with('year', json_encode($year, JSON_NUMERIC_CHECK))->with('user',json_encode($user, JSON_NUMERIC_CHECK));
    }

    public function hoursWorkedPerWeek(){
        $week = Timesheet::select(DB::raw("(week_beginning) as week"))
                ->get()->toArray();
        $week = array_column($week, 'week');

        $hours = Timesheet::select(DB::raw("(total_hours) as hours"))
                ->get()->toArray();
        $hours = array_column($hours, 'hours');

        foreach($week as $key => $value){
            $hours[] = Timesheet::where(\DB::raw("DATE_FORMAT(week_beginning, '%Y')"), $value)->count();
        }
        return view('visualisations.hours')  
        ->with('week',json_encode($week,JSON_NUMERIC_CHECK))  
        ->with('hours',json_encode($hours,JSON_NUMERIC_CHECK)); 
    }
}

