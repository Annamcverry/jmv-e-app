<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module Repository</title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/resources/css/app.css"/>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
     
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot>

    <h2>Invoices </h2>
    
    <!-- Where timesheet user id = auth user id that's -->

        @foreach( $timesheets as $timesheet)
        <div class="flex" style="align-items: center;">   
                <p>WeekBeginning: {{ $timesheet->week_beginning }}</p>
          
                <p>User: {{ $timesheet->user_id }}</p>
       
                <p>Total Hours: {{ $timesheet->total_hours }}</p>
                @foreach ($users as $user )
                    
                    <p>Employee Name: {{ $user->name }}</p>
            
                    <p>Email: {{ $user->email}}</p>
            
                    <p>Rate: {{ $user->rate }}</p>
        @endforeach
        </div>
        @endforeach
       
  

</x-app-layout>
<!-- </html> -->
