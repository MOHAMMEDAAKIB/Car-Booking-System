<?php

$connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');






?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="adminstyl.css" rel="stylesheet">
    <script src="addcar.js"></script>
    <title>DriveNow admin menu</title>
</head>    
<body>
    <div class="header">
        <div class="logo">
            <img src="Drive now logo.png" alt="DriveNow Logo">
            
        </div>
        <div class="auth-links"  >
            <a href="../actor.html" id="links" onclick="colorchange()" >Register</a>
            <a href="loging.html" id="linkse" onclick="colorchanger()" >Login</a>
        </div>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Find...">
        <div id="massage">

        </div>
        <div id="profile">

        </div>
    </div><br/>

    <div id="dasebord">
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded" id="car">
                <h2 id="car">Car Details</h2>
                <button type="button" class="btn btn-primary"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="addcar()">
                Add
                </button>
                <?php 
                    echo "hi boddy";
                    function type(){
                        
                    }
                ?>           
                
                    
            
            </div>

            <div class="shadow p-3 mb-5 bg-body-tertiary rounded" id="customer">
                <h2 id="car">Customer Details</h2>
                <button type="button" class="btn btn-primary"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                Viwe
                </button>




            </div>

            <div id="panal" >
                <button type="button" class="btn btn-primary"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="location.href='admin_reg.html'">add admi</button>
            </div>
    </div>
</body>
</html>