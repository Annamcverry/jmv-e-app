<!DOCTYPE html>
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
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
                table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;
}
        
        </style>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Employees') }}
        </h2>
    </x-slot>

    

        <!-- <div class="container mt-2" > -->
        <div > 
              <div id="message" style="font-size:large; background-color:gold"></div>

            <div class="modal fade" id="user-model" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="UserModel"></h4>
                        </div>
                        <div class="modal-body" align="centre" style="width:100%">
                        <ul id="msgList"></ul>
                        </div>
                    </div>
                </div>
            </div>
        
     

        <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-8 p-8 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
        <div >
            <table id="Table3" class="table align:center" >
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Job Role</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Licenses</th>
                        <th scope="col">Safe Pass</th>
                     
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

  <div style="width:100%; align-items:center">
     <div >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-8 p-8 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
        <div class="modal fade" id="timesheet-model" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="timesheetModel"></h4>
                    </div>
                    <div class="modal-body">

                
                        <h1 style="background-color: darkblue; color:white; align-items:center; font-size:large">Employee Info</h1>
                        <form action="javascript:void(0)" id="addEditUserForm" name="addEditUserForm"  class="form-horizontal" method="POST">
                            <input type="hidden" name="id" id="id">


                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name" name="name"  maxlength="50" required="">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Contact No</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="contact_no" name="contact_no"  maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="email" name="email"  maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Job Role</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="job_role" name="job_role"  maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Rate</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="rate" name="rate"  maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">licences</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="licences" name="licences" value="" maxlength="50" default="0" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Safe Pass</label>
                                <div class="col-sm-12">
                                    <input type="float" class="form-control" id="safepass" name="safepass"  value="" maxlength="50" default="0" >
                                </div>
                            </div>
                    
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" style="background-color: darkblue; border-radius: 4px; padding: 15px; padding: right 10px;" id="btn-add" value="addNewUser">Save
                                </button>

                                <button type="submit" class="btn btn-primary" style="background-color: darkblue; border-radius: 4px; padding: 15px; padding: right 10px;" id="btn-save" value="UpdateUser">Save changes
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
<!-- </div> -->
        

        <script>
            $(document).ready(function($) {
                fetchEmployees();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                function fetchEmployees() {
                    $.ajax({
                        type: "GET",
                        url: "fetch-employees",
                        dataType: 'json',
                        success: function(response) {
                            $('tbody').html("");
                            $.each(response.users, function(key, item) {
                                $('tbody').append('<tr>\
                            <td>' + item.name + '</td>\
                            <td>' + item.contact_no + '</td>\
                            <td>' + item.email + '</td>\
                            <td>' + item.job_role + '</td>\
                            <td>' + item.rate + '</td>\
                            <td>' + item.licences + '</td>\
                            <td>' + item.safepass + '</td>\
                            <td><button type="button" data-id="' + item.id + '" class="btn btn-primary edit btn-sm" style="background-color:darkblue" >Edit</button>\
                            <button type="button" data-id="' + item.id + '" class="btn btn danger delete btn-sm"  style="background-color:darkblue" >Delete</button></td>\
                           </tr>');
                            });

                        },
                        complete: function() {
                            isChecked();
                        }
                    });
                }
             
                $('#addNewUser').click(function(evt) {
                    evt.preventDefault();
                    $('#addEditUserForm').trigger("reset");
                    $('#UserModel').html("Add User");
                    $('#btn-add').show();
                    $('#btn-save').hide();
                    $('#user-model').modal('show');
                });

                $('body').on('click', '#btn-add', function(event) {
                    event.preventDefault()
                    var name = $("#name").val();
                    var contact_no = $("#contact_no").val();
                    var email = $("#email").val();
                    var job_role = $("#job_role").val();
                    var rate = $("#rate").val();
                    var licences = $("#licenses").val();
                    var safepass = $("#safepass").val();
                    $("#btn-add").html('Please Wait');
                    $("#btn-add").attr("disabled", true);

                    $.ajax({
                        type: "POST",
                        url: "save-user",
                        data:{
                            name:name,
                            contact_no:contact_no,
                            email:email,
                            job_role:job_role,
                            rate:rate,
                            licences:licences,
                            safepass:safepass,
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
                                fetchEmployees();
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
                        url: "edit-user/" + id,
                        dataType: 'json',
                        success: function(response) {
                            console.dir(response);
                            $('#UserModel').html("Edit User");
                            $('#btn-add').hide();
                            $('#btn-save').show();
                            $('#user-model').modal('show');
                            if (response.status == 404) {
                                $('#msgList').html("");
                                $('#msgList').addClass('alert alert-success');
                                $('#msgList').text(response.message);

                            } else {
                                $('#message').html("");
                                $('#message').addClass('alert alert-success');
                                $('#message').text(response.message);
                                $('#name').val(response.user.name);
                                $('#contact_no').val(response.user.contact_no);
                                $('#email').val(response.user.email);
                                $('#job_role').val(response.user.job_role);
                                $('#rate').val(response.user.rate);
                                $('#licences').val(response.user.licences);
                                $('#safepass').val(response.user.safepass);
                                $('#id').val(response.user.id);
                            }
                        }
                    });
                });
                $('body').on('click', '.delete', function(evt) {
                    evt.preventDefault();
                    if (confirm("Delete User?") == true) {
                        var id = $(this).data('id');
                        alert("id = " + id);

                        $.ajax({
                            type: "DELETE",
                            url: "delete-user/" + id,
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
                                fetchEmployees();
                            }
                        });
                    }
                });
                $('body').on('click', '#btn-save', function(event) {
                    event.preventDefault();
                    var id = $("#id").val();
                    var name = $("#name").val();
                    var contact_no = $("#contact_no").val();
                    var email = $("#email").val();
                    var job_role = $("#job_role").val();
                    var rate = $("#rate").val();
                    var licences = $("#licences").val();
                    var safepass = $("#safepass").val();

                    $("#btn-save").html('Please wait');
                    $("#btn-save").attr("disable", true);

                    $.ajax({
                        type: "PUT",
                        url: "update-user/" + id,
                        data: {
                            name:name,
                            contact_no:contact_no,
                            email:email,
                            job_role:job_role,
                            rate:rate,
                            licences:licences,
                            safepass:safepass,
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
                                fetchEmployees();
                            }
                        },
                        complete: function() {
                            $("#btn-save").html('Save changes');
                            $("#btn-save").attr("disabled", false);
                            $('user-model').modal('hide');
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