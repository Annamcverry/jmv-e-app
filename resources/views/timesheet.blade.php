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
    <!-- <link rel="stylesheet" href="/resources/css/app.css"/> -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;} </style>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timesheet') }}
        </h2>
    </x-slot>

        <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewTimesheet" class="btn btn-success">Add</button></div>

        <div class="col-md-12">
            <table id="Table3" class="table">
                <thead>
                    <tr>
                        <th scope="col">Week Beginning</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Finish Time</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Finish Time</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Finish Time</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Finish Time</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Finish Time</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Finish Time</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Finish Time</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>


        <div class="modal fade" id="timesheet-model" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="timesheetModel"></h4>
                    </div>
                    <div class="modal-body">

                        <form action="javascript:void(0)" id="addEditTimesheetForm" name="addEditTimesheetForm" class="form-horizontal" method="POST">
                            <input type="hidden" name="id" id="id">

                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Week Beginning</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" id="week_beginning" name="week_beginning" placeholder="Week .." value="" maxlength="50" required="">
                                </div>

                            </div>


                            <div class="form-group">
                                <label class="col-sm-4 control-label">Monday Start Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="mon_start_time" name="mon_start_time" placeholder="0800" value="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Monday End Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="mon_end_time" name="mon_end_time" placeholder="1700" value="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tuesday Start Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="tue_start_time" name="tue_start_time" placeholder="0800" value="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tuesday End Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="tue_end_time" name="tue_end_time" placeholder="1700" value="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Wednesday Start Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="wed_start_time" name="wed_start_time" placeholder="0800" value="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Wednesday End Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="wed_end_time" name="wed_end_time" placeholder="1700" value="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Thursday Start Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="thurs_start_time" name="thurs_start_time" placeholder="0800" value="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Thurday End Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="thurs_end_time" name="thurs_end_time" placeholder="1700" value="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Friday Start Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="fri_start_time" name="fri_start_time" placeholder="0800" value="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Friday End Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="fri_end_time" name="fri_end_time" placeholder="1700" value="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Saturday Start Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="sat_start_time" name="sat_start_time" placeholder="0800" value="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Saturday End Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="sat_end_time" name="sat_end_time" placeholder="1700" value="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Sunday Start Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="sun_start_time" name="sun_start_time" placeholder="0800" value="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Sunday End Time</label>
                                <div class="col-sm-12">
                                    <input type="time" class="form-control" id="sun_end_time" name="sun_end_time" placeholder="1700" value="" required="">
                                </div>
                            </div>


                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="btn-add" value="addNewTimesheet">Save
                                </button>

                                <button type="submit" class="btn btn-primary" id="btn-save" value="UpdateTimesheet">Save changes
                                </button>
                            </div>

                        </form>
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
                            <td>' + item.mon_start_time + '</td>\
                            <td>' + item.mon_end_time + '</td>\
                            <td>' + item.tue_start_time + '</td>\
                            <td>' + item.tue_end_time + '</td>\
                            <td>' + item.wed_start_time + '</td>\
                            <td>' + item.wed_end_time + '</td>\
                            <td>' + item.thurs_start_time + '</td>\
                            <td>' + item.thurs_end_time + '</td>\
                            <td>' + item.fri_start_time + '</td>\
                            <td>' + item.fri_end_time + '</td>\
                            <td>' + item.sat_start_time + '</td>\
                            <td>' + item.sat_end_time + '</td>\
                            <td>' + item.sun_start_time + '</td>\
                            <td>' + item.sun_end_time + '</td>\
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
                $('#addNewTimesheet').click(function(evt) {
                    evt.preventDefault();

                    $('#addEditTimesheetForm').trigger("reset");
                    $('#TimesheetModel').html("Add Timesheet");
                    $('#btn-add').show();
                    $('#btn-save').hide();
                    $('#timesheet-model').modal('show');
                });

                $('body').on('click', '#btn-add', function(event) {
                    event.preventDefault();
                    var week_beginning = $("#week_beginning").val();
                    var mon_start_time = $("#mon_start_time").val();
                    var mon_end_time = $("#mon_end_time").val();
                    var mon_start_time = $("#tue_start_time").val();
                    var mon_end_time = $("#tue_end_time").val();
                    var mon_start_time = $("#wed_start_time").val();
                    var mon_end_time = $("#wed_end_time").val();
                    var mon_start_time = $("#thurs_start_time").val();
                    var mon_end_time = $("#thurs_end_time").val();
                    var mon_start_time = $("#fri_start_time").val();
                    var mon_end_time = $("#fri_end_time").val();
                    var mon_start_time = $("#sat_start_time").val();
                    var mon_end_time = $("#sat_end_time").val();
                    var mon_start_time = $("#sun_start_time").val();
                    var mon_end_time = $("#sun_end_time").val();
                    $("#btn-add").html('Please Wait');
                    $("#btn-add").attr("disabled", true);
                    $.ajax({
                        type: "POST",
                        url: "save-timesheet",
                        data: {
                            week_beginning: week_beginning,
                            mon_start_time: mon_start_time,
                            mon_end_time: mon_end_time,
                            tue_start_time:tue_start_time,
                            tue_end_time: tue_end_time,
                            wed_start_time: wed_start_time,
                            wed_end_time: wed_end_time,
                            thurs_start_time: thurs_start_time,
                            thurs_end_time: thurs_end_time,
                            fri_start_time: fri_start_time,
                            fri_end_time: fri_end_time,
                            sat_start_time: sat_start_time,
                            sat_end_time: sat_end_time,
                            sun_start_time: sun_start_time,
                            sun_end_time: sun_end_time,
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
                                fetchTimesheet();
                            }
                        },
                        complete: function() {
                            $("btn-add").html('Save');
                            $("btn-add").attr("disabled", false);
                            $("btn-add").hide();
                            $('timesheet-model').modal('hide');
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
                                $('week_beginning').val(response.timesheet.week_beginning);
                                $('#hours_worked').val(response.timesheet.mon_start_time);
                                $('#exchange_rate').val(response.timesheet.mon_end_time);
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
                    var mon_start_time = $("#mon_start_time").val();
                    var mon_end_time = $("#mon_end_time").val();

                    $("#btn-save").html('Please wait');
                    $("#btn-save").attr("disable", true);

                    $.ajax({
                        type: "PUT",
                        url: "update-timesheet/" + id,
                        data: {
                            week_beginning: week_beginning,
                            mon_start_time: mon_start_time,
                            mon_end_time: mon_end_time,
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