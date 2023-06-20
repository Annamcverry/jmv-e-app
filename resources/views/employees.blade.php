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
            {{ __('All Employees') }}
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
                                        <td>Name</td>
                                        <td>{{$user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td>{{$user->contact_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Hourly Rate</td>
                                        <td>{{$user->rate }}</td>
                                    </tr>
                                    <tr>
                                        <td>Job Role</td>
                                        <td>{{$user->job_role }}</td>
                                    </tr>
                                     <tr>
                                        <td>Licenses </td>
                                        <td>{{$user->licenses }}</td>
                                    </tr>

                                </table>
                                        <!-- <button action="{{route('/edit-user/{id}', $user->id) }} type="submit" style="max-height: 45px; margin: left 20px; background-color:darkblue color#fff">Edit</button>
                                        <form method="put" action="{{route('update-user', $user->id) }}" accept-charset="UTF-8"> {{ csrf_field() }}
                                        <button id="btn-submit" type="submit" style="max-height: 45px; margin: left 20px; background-color:darkblue color#fff">Save changes </button></form> -->
                   
                            </div>
                            
                    </div>
                </div>
        </div>
        </div>
        
    @endforeach

    
    </div>


</x-app-layout>
</html>