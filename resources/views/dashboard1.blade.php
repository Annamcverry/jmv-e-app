

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JMV EXCAVATIONS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
     
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h2>Invoices </h2>
    
    
 
    <h2>
        <a href="{{ route('fetch-invoices', $invoices) }}">{{ $invoices->week_beginning }}</a>
    </h2>

         <form action="{{ route('saveInvoice') }}" method="post">
      
         <!-- <form action="javascript:void(0)" id="addEditInvoiceForm" name="addEditInvoiceForm" class="form-horizontal" method="POST"> -->
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
</x-app-layout>

