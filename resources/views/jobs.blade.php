<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JMV EXCAVATIONS</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo asset('build/assets/app.css')?>" type="text/css">

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

    @foreach ($jobs as $job )
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 ;g:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-950">
                                <div class="flex" style="align-items: center;"> 
                                <table>
                                    <tr>
                                        <td>Description</td>
                                        <td>{{$job->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td>{{$job->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>Licenses Required</td>
                                        <td>{{$job->licenses }}</td>
                                    </tr>
                                    <tr>
                                        <td>Weekly Hours</td>
                                        <td>{{$job->hours }}</td>
                                    </tr>
                                </table>
                            </div>
                            <form method="post" action="{{route('enquireJob', $job->id) }}" accept-charset="UTF-8"> {{ csrf_field() }}
                                        <button id="btn-submit" type="submit" style="max-height: 45px; margin: left 20px; background-color:darkblue color#fff">Enquire Now</button></form>
                    </div>
                </div>
        </div>
        </div>
        
    @endforeach

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form method="post" action="{{ route('saveJob') }}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    <input type="text" name="description" field="desciption" placeholder="Description" class="w-full">
                    <input type="text" name="location" field="location" placeholder="Location" class="w-full">
                    <input type="text" name="licenses" field="licenses" placeholder="Licenses" class="w-full">
                    <input type="text" name="hours" field="hours" placeholder="Hours" class="w-full">
                    <button type="submit" class="mt-6 inline-flex items-center px-4 py-2 bg-gray-700">Save</button>
                </form>

            </div>
        
        </div>
        </div>
    </div>


</x-app-layout>
</html>