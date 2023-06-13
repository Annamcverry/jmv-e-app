<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Employees</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <body>
        <div class="col-md-12 mt-1 mb-2">
            <table id="Table2" class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>
            </table>
        </div>

        <script>
            $(document).ready(function($){
                fetchEmployee();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                function fetchEmployee() {
                    $.ajax({
                        type:"GET",
                        url: "fetch-employees",
                        dataType: 'json',
                        success: function(response) {
                            $('tbody').html("");
                            $.each(response.employees, function(key, item ){
                                $('tbody').append('<tr>\
                                <td>' + item.name + '</td>\
                                <td>' + item.contact_no + '</td>\
                                <td>' + item.email + '</td>\
                                <td>' + item.job_role + '</td>\
                                <td>' + item.rate + '</td>\
                                <td>' + item.licences + '</td>\
                                <td><button type="buttpn" data-id"' + item.id + '" class="btn btn-primary edit btn-sm">Edit</button>\
                                <button type="button" data-id"' + item.id + '" class="btn btn danger delete btn-sm">Deleted</button></td>\
                                </tr>');
                            });
                        },
                        complete: function(){
                            isChecked();
                        }
                    });
                }

                $("btnGet").click(function() {
                    var message = "";

                    $("#Table2 input[type=checkbox]:checked").each(function() {
                        var row = $(this).closest("tr")[0];
                        message += " " + row.cells[3].innerHTML;
                        message += "\n-----------------------\n";
                    });

                    $("messageList").html(message);
                    return false;
                });

                function isChecked() {
                    $("#Table2 input[type=checkbox]").each(function() {
                        if ($(this).val() == 1) {
                            $(this).prop("checked", false);
                        }
                    });
                }

            })
        </script>
    </body>
</x-app-layout>
</html>