<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Invoices</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;} </style> -->
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <body>
    <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Timesheet</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Enter this weeks hours worked
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Invoices</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    View all your invoices and wages
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Profile</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Click here to update your contact and personal details
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Open Roles</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    View open jobs in the surrounding area
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

    <h1>Hi</h1>
        <div class="container mt-2">
        <div class="col-md-12 mt-1 mb-2">
            <button id="addNewInvoice" class= "btn btn-success" style="background-color:darkblue">Add</button>
            <div id="message" style="font-size:large; background-color:gold"></div>

            <div class="modal fade" id="invoice-model" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="InvoiceModel"></h4>
                        </div>
                        <div class="modal-body" align="centre" style="width:100%">
                        <ul id="msgList"></ul>

                <div style="background-color:#ffff">
                <form action="javascript:void(0)" id="addEditInvoiceForm" name="addEditInvoiceForm" class="form-horizontal" align="centre" method="POST">
                   <h1 style="size:50px">Add New Invoice</h1>
                   @csrf    
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="user_id" id="id">

            <div class="form-group">
                <label for="week_beginning" class="col-sm-4 control-label">Week Beginning</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="week_beginning" name="week_beginning" placeholder="DD/MM/YYYY" value="" required=""> 
                </div>
            </div>

            <div class="form-group">
                <label for="hours_worked" class="col-sm-4 control-label">Week Beginning</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="hours_worked" name="hours_worked" placeholder="40" value="" required=""> 
                </div>
            </div>

            <div class="form-group">
                <label for="exchange_rate" class="col-sm-4 control-label">Exchange Rate</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="exchange_rate" name="exchange_rate" placeholder="1.12" value="" required=""> 
                </div>
            </div>

            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" id="btn-add" value="addNewInvoice">Save
            </button>
            <button type="submit" class="btn btn-primary" id="btn-save" value="UpdateInvoice">Save changes
            </button>
        </div>
     </form>
            
                </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                    </div>
                </div>

        <div class="col-md-12">
            <table id="Table1" class="table">
                <thead>
                    <tr>
                        <th scope="col">Week Beginning</th>
                        <th scope="col">Hours Worked</th>
                        <th scope="col">Exchange Rate</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div> -->
        <!-- <div id="message"></div> -->

        <!-- <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewInvoice" class="btn btn-success">Add</button></div>

        <div class="col-md-12">
            <table id="Table1" class="table">
                <thead>
                    <tr>
                        <th scope="col">Week Beginning</th>
                        <th scope="col">Hours Worked</th>
                        <th scope="col">Exchange Rate</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <!-- <input id="btnGet" type="button" value="Get Seletected"/> -->
        </div>


        <div class="modal fade" id="invoice-model" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="invoiceModel"></h4>
                    </div>
                    <div class="modal-body">

                        <!-- <ul id="msgList"></ul>  -->


                        <!-- <form action="javascript:void(0)" id="addEditInvoiceForm" name="addEditInvoiceForm" class="form-horizontal" method="POST">
                            <input type="hidden" name="id" id="id">

                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Week Beginning</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" id="week_beginning" name="week_beginning" placeholder="Week .." value="" maxlength="50" required="">
                                </div>

                            </div>


                            <div class="form-group">
                                <label class="col-sm-4 control-label">Hours Worked</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="hours_worked" name="hours_worked" placeholder="Hours" value="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Exchange Rate</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="exchange_rate" name="exchange_rate" placeholder="Rate" value="" required="">
                                </div>
                            </div>


                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="btn-add" value="addNewInvoice">Save
                                </button>

                                <button type="submit" class="btn btn-primary" id="btn-save" value="UpdateInvoice">Save changes
                                </button>
                            </div>

                        </form>
                    </div>

                    <!-- <div class="modal-footer"> 
</div>  -->
                <!-- </div>
            </div>
        </div>

        <script>
            $(document).ready(function($) {
                fetchInvoice();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                function fetchInvoice() {
                    $.ajax({
                        type: "GET",
                        url: "fetch-invoices",
                        dataType: 'json',
                        success: function(response) {
                            $('tbody').html("");
                            $.each(response.invoices, function(key, item) {
                                $('tbody').append('<tr>\
                            <td>' + item.week_beginning + '</td>\
                            <td>' + item.hours_worked + '</td>\
                            <td>' + item.exchange_rate + '</td>\
                            <td><button type="button" data-id="' + item.id + '" class="btn btn-primary edit btn-sm"  >Edit</button>\
                            <button type="button" data-id="' + item.id + '" class="btn btn danger delete btn-sm" style="background-color:darkblue color:white">Delete</button></td>\
                           </tr>');
                            });

                        },
                        complete: function() {
                            isChecked();
                        }
                    });
                }
                $('#addNewInvoice').click(function(evt) {
                    evt.preventDefault();

                    $('#addEditInvoiceForm').trigger("reset");
                    $('#InvoiceModel').html("Add Invoice");
                    $('#btn-add').show();
                    $('#btn-save').hide();
                    $('#invoice-model').modal('show');
                });

                $('body').on('click', '#btn-add', function(event) {
                    event.preventDefault();
                    var week_beginning = $("#week_beginning").val();
                    var hours_worked = $("#hours_worked").val();
                    var exchange_rate = $("#exchange_rate").val();
                    $("#btn-add").html('Please Wait');
                    $("#btn-add").attr("disabled", true);

                    
                    $.ajax({
                        type: "POST",
                        url: "save-invoice",
                        data: {
                            week_beginning: week_beginning,
                            hours_worked: hours_worked,
                            exchange_rate: exchange_rate,
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
                                $('#btn-save').text('Save Changes');
                            } else {
                                $('#message').html("");
                                $('#success-message').addClass('alert alert-sucess');
                                $('#success-message').text(response.message);
                                fetchInvoice();
                            }
                        },
                        complete: function() {
                            $("btn-add").html('Save');
                            $("btn-add").attr("disabled", false);
                            $("btn-add").hide();
                            $('invoice-model').modal('hide');
                            $('#message').fadeOut(4000);
                        }

                    });
                });
                $('body').on('click', '.edit', function(evt) {
                    evt.preventDefault();
                    var id = $(this).data('id');

                    $.ajax({
                        type: "GET",
                        url: "edit-invoice/" + id,
                        dataType: 'json',
                        success: function(response) {
                            console.dir(response);
                            $('#InvoiceModel').html("Edit Invoice");
                            $('#btn-add').hide();
                            $('#btn-save').show();
                            $('#invoice-model').modal('show');
                            if (response.status == 404) {
                                $('#msgList').html("");
                                $('#msgList').addClass('alert alert-success');
                                $('#msgList').text(response.message);

                            } else {
                                $('#message').html("");
                                $('#message').addClass('alert alert-success');
                                $('#message').text(response.message);
                                $('week_beginning').val(response.invoice.week_beginning);
                                $('#hours_worked').val(response.invoice.hours_worked);
                                $('#exchange_rate').val(response.invoice.exchange_rate);
                                $('#id').val(response.invoice.id);
                            }
                        }
                    });
                });
                $('body').on('click', '.delete', function(evt) {
                    evt.preventDefault();
                    if (confirm("Delete Invoice?") == true) {
                        var id = $(this).data('id');
                        alert("id = " + id);

                        $.ajax({
                            type: "DELETE",
                            url: "delete-invoice/" + id,
                            dataType: 'json',
                            success: function(response) {
                              
                                if(response.status == 200){
                                    $('#message').html("");
                                    $('#message').addClass('alert alert-success');
                                    $('#message').text(response.message);
                                    $('#message').fadeOut(4000);
                                }else{
                                    alert("Not Authorized");
                                    $('#message').html("");
                                    $('#message').addClass('alert alert-success');
                                    $('#message').text(response.message);
                                    $('#message').fadeOut(4000);
                                    }
                                fetchInvoice();
                            }
                        });
                    }
                });
                $('body').on('click', '#btn-save', function(event) {
                    event.preventDefault();
                    var id = $("#id").val();
                    var week_beginning = $("#week_beginning").val();
                    var hours_worked = $("#hours_worked").val();
                    var exchange_rate = $("#exchange_rate").val();

                    $("#btn-save").html('Please wait');
                    $("#btn-save").attr("disable", true);

                    $.ajax({
                        type: "PUT",
                        url: "update-invoice/" + id,
                        data: {
                            week_beginning: week_beginning,
                            hours_worked: hours_worked,
                            exchange_rate: exchange_rate,
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
                                $('#btn-save').text('Save changes');
                            } else {
                                $('#message').html("");
                                $('#message').addClass('alert alert-success');
                                $('#message').text(response.message);
                                fetchInvoice();
                            }
                        },
                        complete: function() {
                            $("#btn-save").html('Save changes');
                            $("#btn-save").attr("disabled", false);
                            $('invoice-model').modal('hide');
                            $('#message').fadeOut(4000);
                        }
                    });
                });

                $("btnGet").click(function() {
                    var message = "";

                    $("#Table1 input[type=checkbox]:checked").each(function() {
                        var row = $(this).closest("tr")[0];
                        message += " " + row.cells[3].innerHTML;
                        message += "\n-----------------------\n";
                    });

                    $("messageList").html(message);
                    return false;
                });

                function isChecked() {
                    $("#Table1 input[type=checkbox]").each(function() {
                        if ($(this).val() == 1) {
                            $(this).prop("checked", false);
                        }
                    });
                }
            }); -->
        </script>


    </body> -->

</x-app-layout>

</html>