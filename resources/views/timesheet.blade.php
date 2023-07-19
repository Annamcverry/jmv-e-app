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
            {{ __('Timesheet') }}
        </h2>
    </x-slot>
    <body>
    <div class="container mt-2" >
    <div id="message" style="font-size:large; background-color:gold"></div>

        <div > 
            
            <button id="addNewTimesheet" class= "btn btn-success" style="background-color:darkblue">See Previous Weeks Timesheets</button>
            <div id="message" style="font-size:large; background-color:gold"></div>

            <div class="modal fade" id="timesheet-model" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="TimesheetModel"></h4>
                        </div>
                        <div class="modal-body" align="centre" style="width:100%">
                        <ul id="msgList"></ul>
                        </div>
                    </div>
                </div>
            </div>


 <div style="width:100%; align-items:center">
     <div >
        <div >
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
        <div class="modal fade" id="timesheet-model" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="timesheetModel"></h4>
                    </div>
                    <div class="modal-body">

                
                        <h1 style="background-color: darkblue; color:white; align-items:center; font-size:large">Input your hours worked for this week</h1>
                        
                        <h1 style="background-color: darkblue; color:white; align-items:center; font-size:large">NOTE: Enter 0 if no hours were worked for that day </h1>
                        <form action="javascript:void(0)" id="addEditTimesheetForm" name="addEditTimesheetForm"  class="form-horizontal" method="POST">
                            <input type="hidden" name="id" id="id">


                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Week Beginning</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" id="week_beginning" name="week_beginning"  maxlength="50" required="">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Mon Hours</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="mon_hours" name="mon_hours"  maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Tue Hours</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="tue_hours" name="tue_hours"  maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Wed Hours</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="wed_hours" name="wed_hours"  maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Thurs Hours</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="thurs_hours" name="thurs_hours"  maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Fri Hours</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="fri_hours" name="fri_hours" value="" maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Sat Hours</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="sat_hours" name="sat_hours"  value="" maxlength="50" default="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Sun Hours</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="sun_hours" name="sun_hours"  value="" maxlength="50" default="0" required="">
                                </div>
                            </div>

                    
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" style="background-color:darkblue" id="btn-add" value="addNewTimesheet">Save
                                </button>

                                <button type="submit" class="btn btn-primary" style="background-color:darkblue" id="btn-save" value="UpdateTimesheet">Save changes
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
            </div></div>
     </div>

     </div>
        
        
  <div class="col-md-6 mt-1 mb-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
        <div class="col-md-12">
            <table id="Table3" class="table">
                <thead>
                    <tr>
                        <th scope="col">Week Beginning</th>
                        <th scope="col">Monday</th>
                        <th scope="col">Tuesday</th>
                        <th scope="col">Wednesday</th>
                        <th scope="col">Thursday</th>
                        <th scope="col">Friday</th>
                        <th scope="col">Saturday</th>
                        <th scope="col">Sunday</th>
                        <th scope="col">Total Hours</th>
                     
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
                fetchTimesheet();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                function fetchTimesheet() {
                    $.ajax({
                        type: "GET",
                        url: "fetch-timesheets",
                        dataType: 'json',
                        success: function(response) {
                            $('tbody').html("");
                            $.each(response.timesheets, function(key, item) {
                                $('tbody').append('<tr>\
                            <td>' + item.week_beginning + '</td>\
                            <td>' + item.mon_hours + '</td>\
                            <td>' + item.tue_hours + '</td>\
                            <td>' + item.wed_hours + '</td>\
                            <td>' + item.thurs_hours + '</td>\
                            <td>' + item.fri_hours + '</td>\
                            <td>' + item.sat_hours + '</td>\
                            <td>' + item.sun_hours + '</td>\
                            <td>' + item.total_hours + '</td>\
                            <td><button type="button" data-id="' + item.id + '" class="btn btn-primary edit btn-sm" style="background-color:darkblue" >Edit</button>\
                            <button type="button" data-id="' + item.id + '" class="btn btn danger delete btn-sm" " style="background-color:darkblue" >Delete</button></td>\
                           </tr>');
                            });

                        },
                        complete: function() {
                            isChecked();
                        }
                    });
                }
             
                $('#addNewTimesheet').click(function(evt) {
                    evt.preventDefault();
                    $('#addEditTimesheetForm').trigger("reset");
                    $('#TimesheetModel').html("Add Timesheet");
                    $('#btn-add').show();
                    $('#btn-save').hide();
                    $('#timesheet-model').modal('show');
                });

                $('body').on('click', '#btn-add', function(event) {
                    event.preventDefault()
                    var week_beginning = $("#week_beginning").val();
                    var mon_hours = $("#mon_hours").val();
                    var tue_hours = $("#tue_hours").val();
                    var wed_hours = $("#wed_hours").val();
                    var thurs_hours = $("#thurs_hours").val();
                    var fri_hours = $("#fri_hours").val();
                    var sat_hours = $("#sat_hours").val();
                    var sun_hours = $("#sun_hours").val();
                    $("#btn-add").html('Please Wait');
                    $("#btn-add").attr("disabled", true);

                    $.ajax({
                        type: "POST",
                        url: "save-timesheet",
                        data:{
                            week_beginning:week_beginning,
                            mon_hours:mon_hours,
                            tue_hours:tue_hours,
                            wed_hours:wed_hours,
                            thurs_hours:thurs_hours,
                            fri_hours:fri_hours,
                            sat_hours:sat_hours,
                            sun_hours:sun_hours,  
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
                                $('#success-message').addClass("alert alert-sucess");
                                $('#success-message').text(res.message);
                                fetchTimesheet();
                            }
                        },
                        complete: function() {
                            $("#btn-add").html('Save');
                            $("#btn-add").attr("disabled", false);
                            $("#btn-add").hide();
                            $('#timesheet-model').modal('hide');
                            $('#message').fadeOut(4000);
                        }

                    });
                });
                $('body').on('click', '.edit', function(evt) {
                    evt.preventDefault();
                    var id = $(this).data('id');

                    $.ajax({
                        type: "GET",
                        url: "edit-timesheet/" + id,
                        dataType: 'json',
                        success: function(response) {
                            console.dir(response);
                            $('#TimesheetModel').html("Edit Timesheet");
                            $('#btn-add').hide();
                            $('#btn-save').show();
                            $('#timesheet-model').modal('show');
                            if (response.status == 404) {
                                $('#msgList').html("");
                                $('#msgList').addClass('alert alert-success');
                                $('#msgList').text(response.message);

                            } else {
                                $('#message').html("");
                                $('#message').addClass('alert alert-success');
                                $('#message').text(response.message);
                                $('#week_beginning').val(response.timesheet.week_beginning);
                                $('#mon_hours').val(response.timesheet.mon_hours);
                                $('#tue_hours').val(response.timesheet.tue_hours);
                                $('#wed_hours').val(response.timesheet.wed_hours);
                                $('#thurs_hours').val(response.timesheet.thurs_hours);
                                $('#fri_hours').val(response.timesheet.fri_hours);
                                $('#sat_hours').val(response.timesheet.sat_hours);
                                $('#sun_hours').val(response.timesheet.sun_hours);
                                $('#id').val(response.timesheet.id);
                                
                            }
                        }
                    });
                });
                $('body').on('click', '.delete', function(evt) {
                    evt.preventDefault();
                    if (confirm("Delete Timesheet?") == true) {
                        var id = $(this).data('id');
                        alert("id = " + id);

                        $.ajax({
                            type: "DELETE",
                            url: "delete-timesheet/" + id,
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
                                fetchTimesheet();
                            }
                        });
                    }
                });
                $('body').on('click', '#btn-save', function(event) {
                    event.preventDefault();
                    var id = $("#id").val();
                    var week_beginning = $("#week_beginning").val();
                    var mon_hours = $("#mon_hours").val();
                    var tue_hours = $("#tue_hours").val();
                    var wed_hours = $("#wed_hours").val();
                    var thurs_hours = $("#thurs_hours").val();
                    var fri_hours = $("#fri_hours").val();
                    var sat_hours = $("#sat_hours").val();
                    var sun_hours = $("#sun_hours").val();

                    $("#btn-save").html('Please wait');
                    $("#btn-save").attr("disable", true);

                    $.ajax({
                        type: "PUT",
                        url: "update-timesheet/" + id,
                        data: {
                            week_beginning:week_beginning,
                            mon_hours:mon_hours,
                            tue_hours:tue_hours,
                            wed_hours:wed_hours,
                            thurs_hours:thurs_hours,
                            fri_hours:fri_hours,
                            sat_hours:sat_hours,
                            sun_hours:sun_hours, 
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
                                fetchTimesheet();
                            }
                        },
                        complete: function() {
                            $("#btn-save").html('Save changes');
                            $("#btn-save").attr("disabled", false);
                            $('timesheet-model').modal('hide');
                            $('#message').fadeOut(4000);
                        }
                    });
                });

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


                $("btnGet").click(function() {
                    var message = "";

                    $("#Table3 input[type=checkbox]:checked").each(function() {
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