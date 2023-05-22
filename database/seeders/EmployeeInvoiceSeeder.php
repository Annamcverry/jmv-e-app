<?php

namespace Database\Seeders;

use App\Models\EmployeeInvoice;
use Illuminate\Database\Seeder;

// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        //    EmployeeInvoice::truncate();
           $info = fopen(base_path("database/data/employee_invoice.csv"),"r");
           $datarow = true;
           while (($data = fgetcsv($info, 4000, ",")) !== FALSE){
               if (!$datarow) {
                   EmployeeInvoice::create([
                       'user_id'=> $data['0'],
                       'invoice_id'=> $data['1'],
                   ]);
               }
               $datarow = false;
            
           }
           fclose($info);
    }
}
