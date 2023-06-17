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
    <link rel="stylesheet" href="/resources/css/app"/>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<   style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;} </style>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <body>
        <!-- <div class="container mt-2">
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

        <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewInvoice" class="btn btn-success">Add</button></div>

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


                        <form action="javascript:void(0)" id="addEditInvoiceForm" name="addEditInvoiceForm" class="form-horizontal" method="POST">
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
                </div>
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
            });
        </script>


    </body>

</x-app-layout>

</html>