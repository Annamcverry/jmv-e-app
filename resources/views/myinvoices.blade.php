<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Payslips</title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stlesheet" href="/app/resources/css/app.css"/>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Payslips') }}
        </h2>
    </x-slot>


<body>
    <!-- Where timesheet user id = auth user id that's -->

    @foreach( $timesheets as $timesheet)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 ;g:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-950">
                       
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
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                    <td> {{ $timesheet->week_beginning }} </td>
                                    <td> {{ $timesheet->total_hours}} hours </td>
                                    <td> {{ $timesheet->user->name }} </td>
                                    <td> {{ $timesheet->user->email }} </td>
                                    <td> £{{ $timesheet->user->rate}} per hour </td>
                                    <td> £{{$timesheet->total_hours * $timesheet->user->rate }}.00  </td>
                                    <td> {{ $timesheet->status }} </td>
                                </tbody>
                                </table> 
                                <!-- <form method="post" action="{{route('export_timesheet_pdf') }}" accept-charset="UTF-8"> {{ csrf_field() }}
                                        <button id="btn-submit" type="submit" style="background-color: darkblue; border-radius: 4px;">Enquire Now</button></form> -->
                    
                                <div>
                                    <a class="btn btn-success" id="btn-export" style="background-color: darkblue; font-size:larger; color:white; border-radius: 4px; padding: 15px; padding: right 10px;" href="{{ route('export_timesheet_pdf') }}">Export PDF</a>
                                </div>
                        </div>
                       
                    </div>
                </div>
           
            </div> 
        </div>
        @endforeach

    
    <!-- <script>
         $('body').on('click', '#btn-export', function(event) {
                    event.preventDefault();
                    
                    $("#btn-export").html('Please wait');
                    $("#btn-export").attr("disable", true);
                });
    </script> -->
</body>
</x-app-layout>
</html>
