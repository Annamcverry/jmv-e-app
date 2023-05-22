<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Invoice::truncate();
        $info = fopen(base_path("database/data/invoices.csv"),"r");
        $datarow = true;
        while (($data = fgetcsv($info, 4000, ",")) !== FALSE){
            if (!$datarow) {
                Invoice::create([
                    'week_beginning'=> $data['0'],
                    // 'hourly_rate'=>$data['1'],
                    'hours_worked'=> $data['1'],
                    // 'wage'=> $data['3'],
                    'exchange_rate'=>$data['2']
                ]);
            }
            $datarow = false;
        }
        fclose($info);
    }
}
