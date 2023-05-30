<?php

namespace Database\Seeders;

use App\Models\UserInvoice;

// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserInvoiceSeeder extends Seeder
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
                   UserInvoice::create([
                       'user_id'=> $data['0'],
                       'invoice_id'=> $data['1'],
                   ]);
               }
               $datarow = false;
            
           }
           fclose($info);
    }
}
