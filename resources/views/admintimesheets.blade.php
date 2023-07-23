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
            {{ __('All Employee Payslips') }}
        </h2>
    </x-slot>
    
    <div id="message" style="display: block; background-color:lightgreen; font-size:large"></div>
    
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form method="post" action="{{ route('saveExchangeRate') }}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    <input type="text" name="exchange_rate" field="exchange_rate" placeholder="Exchange Rate" class="w-full">
                    
                    <input type="date" name="week_beginning" field="week_beginning" placeholder="Week Beginning" class="w-full">
                   
                    <button type="submit" class="mt-6 inline-flex items-center px-4 py-2 bg-gray-700" style="background-color: darkblue;">Save</button>
                </form>

            </div>
        
        </div>
    </div> -->
   
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 ;g:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-xl">
                All Employee Invoices
                @foreach( $timesheets as $timesheet)
                    <div class="p-6 text-gray-950">
                       
                                <div class="flex" style="align-items: center;"> 
                                
                                <table>
                                    <thead>
                                    <tr>
                                        <th scope="col" style="padding: 20px;">Week Beginning</th>
                                        <th scope="col">Total Hours</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Rate per hour</th>
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
                                        <td><form method="post" action="{{route('approveTimesheet', $timesheet->id) }}" accept-charset="UTF-8"> {{ csrf_field() }}
                                        <button id="btn-submit" type="submit" style="max-height: 45px; margin: left 20px; background-color: darkblue; border-radius: 4px;">Approve</button></form></td>

                                        <td><form method="post" action="{{route('reviewTimesheet', $timesheet->id) }}" accept-charset="UTF-8">{{ csrf_field() }}
                                       <button type="submit" style="background-color: darkblue; border-radius: 4px; padding: 15px; padding: right 10px;"> Review </button></form></td>
                                    </tbody>
                                </table>     
                        </div>
                       
                    </div>
                    @endforeach
    
                </div>
           
            </div> 
        </div>
      
    <script>
        $('body').on('click', '.btn-submit', function(evt){
            evt.preventDefault();
            $('#btn-submit').text('Save changes'); 
        })

        $('body').on('click', '#btn-approve', function(event) {
                    event.preventDefault();
                    // var id = $("#id" ).val();
                    var status = $("#status").val();
                

                    $("#btn-approve").html('Please wait');
                    $("#btn-approve").attr("disable", true);

                    $.ajax({
                        type: "POST",
                        url: "approve-timesheet/" + id,
                        data: {
                            status:status,
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            if (response.status == 400) {
                                $('#msgList').html("");
                                $('#msgList').addClass('alert alert-danger');
                                $.each(response.errors, function(key, err_value) {
                                    $('#msgList').append('<li>' + err_value + '</li>');
                                });
                                $('#btn-approve').text('Save changes');
                            } else {
                                $('#message').html("");
                                $('#message').addClass('alert alert-success');
                                $('#message').text(response.message);
                                fetchTimesheet();
                            }
                        },
                        complete: function() {
                            $("#btn-approve").html('Save changes');
                            $("#btn-approve").attr("disabled", false);
                            $('timesheet-model').modal('hide');
                            $('#message').fadeOut(4000);
                        }
                    });
                });
    </script>
 
        
    </div>
</x-app-layout>

