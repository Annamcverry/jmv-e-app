<?php

namespace Database\Seeders;

use App\Models\Timesheet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimesheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $info = fopen(base_path("database/data/timesheet.csv"),"r");
        $datarow = true;
        while (($data = fgetcsv($info, 4000, ",")) !== FALSE){
            if (!$datarow) {
                Timesheet::create([
                    'week_beginning'=> $data['0'],
                    'mon_start_time'=>$data['1'],
                    'mon_end_time'=> $data['2'],
                    'tue_start_time'=> $data['3'],
                    'tue_end_time'=>$data['4'],
                    'wed_start_time'=> $data['5'],
                    'wed_end_time'=>$data['6'],
                    'thurs_start_time'=> $data['7'],
                    'thurs_end_time'=>$data['8'],
                    'fri_start_time'=> $data['9'],
                    'fri_end_time'=>$data['10'],
                    'sat_start_time'=> $data['11'],
                    'sat_end_time'=>$data['12'],
                    'sun_start_time'=> $data['13'],
                    'sun_end_time'=>$data['14']
                ]);
            }
            $datarow = false;
        }
        fclose($info);
    }
}
