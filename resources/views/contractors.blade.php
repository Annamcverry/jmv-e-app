<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contractors</title>
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
            {{ __('Contractors') }}
        </h2>
    </x-slot>
    <body>
    <div class="container mt-2" >
        <div > 
            <button id="addNewContractor" class= "btn btn-success" style="background-color:darkblue">See Previous Weeks Timesheets</button>
            <div id="message" style="font-size:large; background-color:gold"></div>

            <div class="modal fade" id="contractor-model" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="ContractorModel"></h4>
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
        <div class="modal fade" id="contractor-model" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="ContractorModel"></h4>
                    </div>
                    <div class="modal-body">
                 
                
                        <h1 style="background-color: darkblue; color:white; align-items:center; font-size:large">Input your hours worked for this week</h1>
                        
                        <h1 style="background-color: darkblue; color:white; align-items:center; font-size:large">NOTE: Enter 0 if no hours were worked for that day </h1>
                        <form action="javascript:void(0)" id="addEditContractorForm" name="addEditContractorForm"  class="form-horizontal" method="POST">
                            <input type="hidden" name="id" id="id">


                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Contractor Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name" name="name"  maxlength="50" required="">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="email_address" name="email_address"  maxlength="50" required="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Contact Number</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="contact_no" name="contact_no"  maxlength="50" required="">
                                </div>
                            </div>

                    
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" style="background-color:darkblue" id="btn-add" value="addNewContractor">Save
                                </button>

                                <button type="submit" class="btn btn-primary" style="background-color:darkblue" id="btn-save" value="UpdateContractor">Save changes
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
            <table id="Table4" class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact Number</th>

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
            fetchContractor();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function fetchContractor() {
                $.ajax({
                    type: "GET",
                    url: "fetch-contractors",
                    dataType: 'json',
                    success: function(response) {
                        $('tbody').html("");
                        $.each(response.contractors, function(key, item) {
                            $('tbody').append('<tr>\
                        <td>' + item.name + '</td>\
                        <td>' + item.email_address + '</td>\
                        <td>' + item.contact_no + '</td>\
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
            
            $('#addNewContractor').click(function(evt) {
                evt.preventDefault();
                $('#addEditContractorForm').trigger("reset");
                $('#ContractorModel').html("Add Contractor");
                $('#btn-add').show();
                $('#btn-save').hide();
                $('#contractor-model').modal('show');
            });

            $('body').on('click', '#btn-add', function(event) {
                event.preventDefault()
                var name = $("#name").val();
                var email_address = $("#email_address").val();
                var contact_no = $("#contact_no").val();
                $("#btn-add").html('Please Wait');
                $("#btn-add").attr("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "save-contractor",
                    data:{
                        name:name,
                        email_address:email_address,
                        contact_no:contact_no,
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
                            fetchContractor();
                        }
                    },
                    complete: function() {
                        $("#btn-add").html('Save');
                        $("#btn-add").attr("disabled", false);
                        $("#btn-add").hide();
                        $('#contractor-model').modal('hide');
                        $('#message').fadeOut(4000);
                    }

                });
            });
            $('body').on('click', '.edit', function(evt) {
                evt.preventDefault();
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    url: "edit-contractor/" + id,
                    dataType: 'json',
                    success: function(response) {
                        console.dir(response);
                        $('#ContractorModel').html("Edit Contractor");
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
                            $('#name').val(response.contractor.name);
                            $('#email_address').val(response.contractor.email_address);
                            $('#contact_no').val(response.contractor.contact_no);
                            $('#id').val(response.contractor.id);
                        }
                    }
                });
            });
            $('body').on('click', '.delete', function(evt) {
                evt.preventDefault();
                if (confirm("Delete Contractor?") == true) {
                    var id = $(this).data('id');
                    alert("id = " + id);

                    $.ajax({
                        type: "DELETE",
                        url: "delete-contractor/" + id,
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
                            fetchContractor();
                        }
                    });
                }
            });
            $('body').on('click', '#btn-save', function(event) {
                event.preventDefault();
                var id = $("#id").val();
                var name = $("#name").val();
                var email_address = $("#email_address").val();
                var contact_no = $("#contact_no").val();

                $("#btn-save").html('Please wait');
                $("#btn-save").attr("disable", true);

                $.ajax({
                    type: "PUT",
                    url: "update-contractor/" + id,
                    data: {
                        name:name,
                        email_address:email_address,
                        contact_no:contact_no,
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
                            fetchContractor();
                        }
                    },
                    complete: function() {
                        $("#btn-save").html('Save changes');
                        $("#btn-save").attr("disabled", false);
                        $('contractor-model').modal('hide');
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