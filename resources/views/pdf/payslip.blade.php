<!DOCTYPE html>
<html lang="en">
    <head>
    <title>All Payslips</title>
    </head>
<!-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Invoices</title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

   
        <style>  table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;
 ;} </style>


<h2>Payslip </h2>
    < Where timesheet user id = auth user id that's -->
<body>
    <!-- <img src="C:\jmv\jmv-e-app\database\data\jmv-excavations-ltd-high-resolution-color-logo_adobe_express.png" style="width: 20px; height: 25px;"> -->
    <br>
    @foreach( $timesheets as $timesheet)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 ;g:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-950 font-sans">
                        All Invoices
                                <div class="flex" style="align-items: center;"> 
                                <table class="font-sans" style="padding: 20px;">
                                    <thead style="background-color: darkblue; color:white;">
                                    <tr>
                                        <th scope="col">Week Beginning</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Total Hours</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Rate per Hour</th>
                                        <th scope="col">Wage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <td> {{ $timesheet->week_beginning }} </td>
                                        <td> {{ $timesheet->user->name }} </td>
                                        <td> {{ $timesheet->total_hours}} hours </td>
                                        <td> {{ $timesheet->user->email }} </td>
                                        <td> £ {{ $timesheet->user->rate}} per hour </td>
                                        <td> £ {{$timesheet->total_hours * $timesheet->user->rate }}.00  </td>

                                    </tbody>
                                </table>     
                        </div>
                       
                    </div>
                </div>
           
            </div> 
        </div>
    @endforeach

</body>


</html>
