<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JMV EXCAVATIONS</title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stlesheet" href="/app/resources/css/app.css"/>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<!--      
        <style> table{border: 1px;    }th{background-color: darkblue; padding-top: 10px; padding-bottom: 10px; color:#fff ;} td, tr {border: 2px solid #ddd; padding: 8px;} input{border: 2px solid navy;}button{ padding: 12px; background-color: darkblue; color: #fff;} input{ padding: 8px 20px; margin: 8px 0; box-sizing: border-box; border: 1px solid #555; outline: none;}form {text-align: center;
 ;} </style> -->
</head>

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contractors') }}
        </h2>
</x-slot>
<h2>Payslip </h2>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <canvas id="canvas1" height="400" width="450"></canvas>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size:larger">Dashboard</div>
                <div class="panel-body">
                    
                    <canvas id="canvas2" height="400" width="450" ></canvas>
                    
                </div>
            </div>
           
            <?php 
            try {
                $sql = "SELECT * FROM timesheet";
                $result = $pdo->query($sql);
                if($result->rowCount() > 0 ){
                    while($row = $result->fetch()) {
                        $dateArray [] = $row["week_beginning"];

                    }
                    unset($result);
                } else {
                    echo 'none';
                }
            }catch(PDOException $e){
                    die("Error");
                
            }
            ?>
        <!-- </div>
    </div>
</div> -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    var year = <?php echo $year; ?>;
    var user = <?php echo $user; ?>;
    
    
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'User',
            backgroundColor: "blue",
            data: user
        }]
    };
  

    window.onload = function() {
        var ctx = document.getElementById("canvas1").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                
                title: {
                    display: true,
                    text: 'Weekly hours worked',
                    font: {
                                size: 16,
                                family:'vazir'
                            }
                }
            }
        });


   
    };

</script>
</x-app-layout>
</html>
