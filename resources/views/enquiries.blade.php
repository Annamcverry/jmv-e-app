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
     
     
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs Listing and Enquiries') }}
        </h2>
    </x-slot>

    <div id="message" style="font-size:large; background-color:gold"></div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-l text-gray-800 leading-tight" >Add a New Job Listing</h2>
                    {{ csrf_field() }}
                   
                <form method="post" action="{{ route('saveJob') }}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    <input type="text" name="description" field="desciption" placeholder="Description" class="w-full">
                    <input type="text" name="location" field="location" placeholder="Location" class="w-full">
                    <input type="text" name="licenses" field="licenses" placeholder="Licenses" class="w-full">
                    <input type="text" name="hours" field="hours" placeholder="Hours" class="w-full">
                    <button type="submit" class="mt-6 inline-flex items-center px-4 py-2" style="background-color: darkblue; border-radius: 4px;">Save</button>
                </form>
            </div>
        </div>
    </div>

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
                            <br>
                            <br>
                            <h2 style="font-size: larger; font-weight:bold;">Enqiries</h2>
                            @forelse ( $job->users as $user )
                                    {{ $user->name }}
                                    {{ $user->email}}@if (!$loop->last),@endif
                            @empty
                            <span>No enquiries for this job</span>
                            @endforelse 
                    </div>
                </div>
        </div>
        </div>
        
    @endforeach





</x-app-layout>
</html>