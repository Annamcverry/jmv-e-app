<?php

namespace App\Http\Controllers;

use App\Models\ContractorInvoice;
use App\Models\User;
use App\Models\Timesheet;
use FontLib\Table\Type\name;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{


    public function index(){


        $name = User::select(DB::raw("(name) as name"))   
                ->get()->toArray();
        $name = array_column($name, 'name');

        $hour = Timesheet::select(DB::raw("(total_hours) as hour"))
                ->get()->toArray();
        $hour = array_column($hour, 'hour');

        

        return view('visualisations.chart')  
        ->with('year',json_encode($name,JSON_NUMERIC_CHECK))  
        ->with('user',json_encode($hour,JSON_NUMERIC_CHECK));  

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


public function contractorInvoiceChart(){
    $date = ContractorInvoice::select(DB::raw("(date) as date"))
            ->get()->toArray();
    $date = array_column($date, 'date');
    $weekBeginning = Timesheet::select(DB::raw("(week_beginning) as week_beginning"))
    ->get()->toArray();
    $weekBeginning = array_column($weekBeginning, 'week_beginning');
    

    $amountPaid = ContractorInvoice::select(DB::raw("(amount_paid) as amountPaid"))
            ->get()->toArray();
    $amountPaid = array_column($amountPaid, 'amountPaid');

    $wagesPaid = Timesheet::select(DB::raw("(total_hours * 25) as wagesPaid" ) )
                ->get()->toArray();
    // $wagesPaid = $totalHours * 26;
    $wagesPaid = array_column($wagesPaid, 'wagesPaid');

    foreach($date as $key => $value){
        $amountPaid[] = ContractorInvoice::where(\DB::raw("DATE_FORMAT(date, '%Y')"), $value)->count();
    }

 
    return view('visualisations.contractorinvoices')  
    ->with('date',json_encode($date,JSON_NUMERIC_CHECK)) 
    ->with('weekBeginning',json_encode($weekBeginning,JSON_NUMERIC_CHECK))  
    ->with('wagesPaid',json_encode($wagesPaid,JSON_NUMERIC_CHECK))  
    ->with('amountPaid',json_encode($amountPaid,JSON_NUMERIC_CHECK)); 
}

}