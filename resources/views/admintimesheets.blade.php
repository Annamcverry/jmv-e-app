<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JMV EXCAVATIONS</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
     
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h2>Invoices </h2>
    

    <h2>Timesheets</h2>
    @foreach ($timesheets as $timesheet)
    <div class="flex" style="align-items: center;">
        <p>WeekBeginning: {{ $timesheet->week_beginning }}</p>
        <p>Employee: {{ $timesheet->user_id }}</p>
        <p>Total Hours: {{ $timesheet->total_hours }}</p>

        <form method="post" action="{{route('approveTimesheet', $timesheet->id) }}" accept-charset="UTF-8">
            {{ csrf_field() }}
            <button type="submit" style="max-height: 25px; margin: left 20px;">Approve</button>
        </form>

        <form method="post" action="{{route('reviewTimesheet', $timesheet->id) }}" accept-charset="UTF-8">
            {{ csrf_field() }}
            <button type="submit" style="max-height: 25px; margin: left 20px;">Review</button>
        </form>
    </div>
    $("#btn-submit).html('Please wait');
        
    @endforeach
    
 
        
    </div>
</x-app-layout>

