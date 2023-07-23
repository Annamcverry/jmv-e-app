<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Invoices</title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stlesheet" href="/app/resources/css/app.css"/>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<!--      
        <style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;
 ;} </style> -->
</head>
<x-application-logo class="block h-9 w-auto fill-current text-gray-800" />

<h2>Payslip </h2>
    <!-- Where timesheet user id = auth user id that's -->

    @foreach( $timesheets as $timesheet)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 ;g:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-950">
                        All Invoices
                                <div class="flex" style="align-items: center;"> 
                                <table>
                                    <thead>
                                    <tr>
                                        <th scope="col">Week Beginning</th>
                                        <th scope="col">Total Hours</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Wage</th>
                                        <th scope="col">Wage Euro</th>
                                        <th scope="col">Exchange Rate</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <td> {{ $timesheet->week_beginning }} </td>
                                        <td> {{ $timesheet->total_hours}} hours </td>
                                        <td> {{ $timesheet->user->name }} </td>
                                        <td> {{ $timesheet->user->email }} </td>
                                        <td> £{{ $timesheet->user->rate}} per hour </td>
                                        <td> £{{$timesheet->total_hours * $timesheet->user->rate }}.00  </td>
                                        <td> £{{$timesheet->total_hours * $timesheet->user->rate }}.00  </td>

                                    </tbody>
                                </table>     
                        </div>
                       
                    </div>
                </div>
           
            </div> 
        </div>
    @endforeach
  

</html>
