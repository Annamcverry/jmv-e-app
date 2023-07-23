<?php

namespace Database\Seeders;

use App\Models\Timesheet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
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
                    'user_id'=>$data['0'],
                    'week_beginning'=> $data['1'],
                    'mon_hours'=>$data['2'],
                    'tue_hours'=> $data['3'],
                    'wed_hours'=> $data['4'],
                    'thurs_hours'=> $data['5'],
                    'fri_hours'=> $data['6'],
                    'sat_hours'=> $data['7'],
                    'sun_hours'=> $data['8']
                ]);
            }
            $datarow = false;
        }
        fclose($info);
    }
}
