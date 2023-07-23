<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JMV EXCAVATIONS</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stlesheet" href="/app/resources/css/app.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
        @livewireStyles
     
</head>
<x-app-layout>
<!-- @livewireScripts -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    <div class="pb-8">
        <x-success-message class="mb-4" />
        <x-validation-errors class="mb-6" :errors="$errors" />
    </div>

    <div id="message" style="font-size:large; background-color:gold"></div>

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
                                    <tr>
                                        <td>Enquiries</td>
                                        <td>{{$job->enquiries }}</td>
                                    </tr>
                                </table>
                            </div>
                            <form method="post" action="{{route('enquireJob', $job->id) }}" accept-charset="UTF-8"> {{ csrf_field() }}
                                        <button id="btn-submit" type="submit" style="background-color: darkblue; border-radius: 4px;">Enquire Now</button></form>
                        `  
                                    </div>
                   
                </div>
        </div>
        </div>
        
    @endforeach

    </div>


</x-app-layout>
</html>