<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Timesheets</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stlesheet" href="/app/resources/css/app.css"/>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;
 ;} </style>
 
</head>
<x-app-layout>
 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot>
    <body>

    <button id="addNewContractorInvoice" class= "btn btn-success" style="background-color:darkblue">Add Invoice</button>
           
         <div id="message" style="display: block; background-color:lightgreen; font-size:large; text-align:center"></div>

         
<!-- Bootstrap model -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 ;g:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-xl">
            <div class="modal fade" id="contractorinvoice-model" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="ContractorInvoiceModel"></h4>
                        </div>
                        <div class="modal-body" align="centre" style="width:100%">
                        <ul id="msgList"></ul>
                        </div>
                
                    <div class="modal-body">
                        
                        <h1 style="background-color: darkblue; color:white; align-items:center; font-size:large">NOTE: Enter 0 if no hours were worked for that day </h1>
                        <form action="javascript:void(0)" id="addEditContractorInvoiceForm" name="addEditContractorInvoiceForm"  class="form-horizontal" method="POST">
                            <input type="hidden" name="id" id="id">

                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Contractor Name</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="contractor_name" name="contractor_name"  maxlength="50" required="" >
                                </div>
                            </div>
                    
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Date</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" id="date" name="date"  required="">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Amount Paid £</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="amount_paid" name="amount_paid"  maxlength="50" required="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Employee Count</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="employee_count" name="employee_count"  maxlength="50" required="">
                                </div>
                            </div>

                    
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" style="background-color: darkblue; border-radius: 4px; padding: 15px; padding: right 10px;" id="btn-add" value="addNewContractor">Save
                                </button>

                                <button type="submit" class="btn btn-primary" style="background-color: darkblue; border-radius: 4px; padding: 15px; padding: right 10px;" id="btn-save" value="UpdateContractor">Save changes
                                </button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer"> </div>
                </div>
            </div>
        </div>
    </div>
      

        
        
  <div class="col-md-6 mt-1 mb-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
        <div class="col-md-12">
            <table id="Table4" class="table">
                <thead>
                    <tr>
                        <th scope="col">Contractor Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Employee Count</th>

                    </tr>
                </thead>
                <tbody>
             
                </tbody>
            </table>
        </div>
        </div>        
    </div>
    </div>
   </div>


    <script>
        $(document).ready(function($) {
            fetchContractorInvoice();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function fetchContractorInvoice() {
                $.ajax({
                    type: "GET",
                    url: "fetch-invoices",
                    dataType: 'json',
                    success: function(response) {
                        $('tbody').html("");
                        $.each(response.contractorinvoices, function(key, item) {
                            $('tbody').append('<tr>\
                        <td>' + item.contractor_name + '</td>\
                        <td>' + item.date + '</td>\
                        <td>' + '£' + item.amount_paid + '.00' +'</td>\
                        <td>' + item.employee_count + '</td>\
                        <td><button type="button" data-id="' + item.id + '" class="btn btn-primary edit btn-sm" style="background-color: darkblue; border-radius: 4px; padding: 15px; padding: right 10px;" >Edit</button>\
                        <button type="button" data-id="' + item.id + '" class="btn btn danger delete btn-sm" " style="background-color: darkblue; border-radius: 4px; padding: 15px; padding: right 10px;" >Delete</button></td>\
                        </tr>');
                        });

                    },
                    complete: function() {
                        isChecked();
                    }
                });
            }
            
            $('#addNewContractorInvoice').click(function(evt) {
                evt.preventDefault();
                $('#addEditContractorInvoiceForm').trigger("reset");
                $('#ContractorInvoiceModel').html("Add Invoice");
                $('#btn-add').show();
                $('#btn-save').hide();
                $('#contractorinvoice-model').modal('show');
            });

            $('body').on('click', '#btn-add', function(event) {
                event.preventDefault()
                var contractor_name = $("#contractor_name").val();
                var date = $("#date").val();
                var amount_paid = $("#amount_paid").val();
                var employee_count = $("#employee_count").val();
                $("#btn-add").html('Please Wait');
                $("#btn-add").attr("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "save-invoice",
                    data:{
                        contractor_name:contractor_name,
                        date:date,
                        amount_paid:amount_paid,
                        employee_count:employee_count,
                    },
                    dataType: 'json',
                    success: function(res) {
                        console.log(res);
                        if (res.status == 400) {

                            $('#msgList').html("");
                            $('#msgList').addClass("alert alert-danger");
                            $.each(res.errors, function(key, err_value) {
                                $('#msgList').append('<li>' + err_value + '</li>');
                            });
                            $('#btn-save').text('Save Changes');
                        } else {
                            $('#message').html("");
                            $('#message').addClass("alert alert-sucess");
                            $('#message').text(res.message);
                            fetchContractorInvoice();
                        }
                    },
                    complete: function() {
                        $("#btn-add").html('Save');
                        $("#btn-add").attr("disabled", false);
                        $("#btn-add").hide();
                        $('#contractorinvoice-model').modal('hide');
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
                        $('#ContractorInvoiceModel').html("Edit Invoice");
                        $('#btn-add').hide();
                        $('#btn-save').show();
                        $('#contractor-model').modal('show');
                        if (response.status == 404) {
                            $('#msgList').html("");
                            $('#msgList').addClass('alert alert-success');
                            $('#msgList').text(response.message);

                        } else {
                            $('#message').html("");
                            $('#message').addClass('alert alert-success');
                            $('#message').text(response.message);
                            $('#contractor_name').val(response.contractorinvoice.contractor_name);
                            $('#date').val(response.contractorinvoice.date);
                            $('#amount_paid').val(response.contractorinvoice.amount_paid);
                            $('#employee_count').val(response.contractorinvoice.employee_count);
                            $('#id').val(response.contractorinvoice.id);
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
                            fetchContractorInvoice();
                        }
                    });
                }
            });
            $('body').on('click', '#btn-save', function(event) {
                event.preventDefault();
                var id = $("#id").val();
                var contractor_name = $("#contractor_name").val();
                var date = $("#date").val();
                var amount_paid = $("#amount_paid").val();
                var employee_count = $("#employee_count").val();

                $("#btn-save").html('Please wait');
                $("#btn-save").attr("disable", true);

                $.ajax({
                    type: "PUT",
                    url: "update-invoice/" + id,
                    data: {
                        contractor_name:contractor_name,
                        date:date,
                        amount_paid:amount_paid,
                        employee_count:employee_count,
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
                            fetchContractorInvoice();
                        }
                    },
                    complete: function() {
                        $("#btn-save").html('Save changes');
                        $("#btn-save").attr("disabled", false);
                        $('contractorinvoice-model').modal('hide');
                        $('#message').fadeOut(4000);
                    }
                });
            });


            $("btnGet").click(function() {
                var message = "";

                $("#Table4 input[type=checkbox]:checked").each(function() {
                    var row = $(this).closest("tr")[0];
                    message += " " + row.cells[3].innerHTML;
                    message += "\n-----------------------\n";
                });

                $("messageList").html(message);
                return false;
            });

            function isChecked() {
                $("#Table4 input[type=checkbox]").each(function() {
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