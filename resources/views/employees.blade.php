<!DOCTYPE html>
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
        <!-- <style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #fff; padding: 8px;} btn-submit{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box;  outline: none;}form {text-align: center;
 ;} </style> -->
     
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Employees') }}
        </h2>
    </x-slot>

    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 ;g:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-950">
                                <div class="flex" style="align-items: center;"> 
                                
                                <table>
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email Address</th>
                                        <th scope="col">Comtact</th>
                                        <th scope="col">Rate per hour</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Licences</th>
                                        
                                    </tr>
                                    </thead>
                                    @foreach ($users as $user )
                                    <tbody>
                                    
                                        <td> {{ $user->name }} </td>
                                        <td> {{ $user->email }} hours </td>
                                        <td> {{ $user->contact_no  }} </td>
                                        <td> {{ $user->rate}} </td>
                                        <td> {{ $user->job_role}} </td>
                                        <td> {{$user->licenses}}  </td>
                                        
                                    </tbody>
                                    @endforeach  
                                   

                                   

    
    </div>
                    </div>
                </div>
            </div>
        </div>


</x-app-layout>
</html>