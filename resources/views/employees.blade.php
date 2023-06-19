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
        <style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #fff; padding: 8px;} btn-submit{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box;  outline: none;}form {text-align: center;
 ;} </style>
     
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    @foreach ($users as $user )
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 ;g:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-950">
                                <div class="flex" style="align-items: center;"> 
                                <table>
                                    <tr>
                                        <td>Description</td>
                                        <td>{{$user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td>{{$user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Licenses Required</td>
                                        <td>{{$user->contact_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Weekly Hours</td>
                                        <td>{{$user->rate }}</td>
                                    </tr>
                                    <tr>
                                        <td>Weekly Hours</td>
                                        <td>{{$user->job_role }}</td>
                                    </tr>
                                     <tr>
                                        <td>Weekly Hours</td>
                                        <td>{{$user->licenses }}</td>
                                    </tr>
                                </table>
                            </div>
                            
                    </div>
                </div>
        </div>
        </div>
        
    @endforeach

    
    </div>


</x-app-layout>
</html>