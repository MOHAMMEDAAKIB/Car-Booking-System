







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="adminstyl.css" rel="stylesheet">
    <script src="addcar.js"></script>
    <title>DriveNow customer menu</title>
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
    <form method="post" action="">
    <div class="search-bar">
        <input type="text" placeholder="Find...">
        <form>
        <div id="massage">

        </div>
        
        <div id="profile">

        </div>
    </div><br/>
    <div id="dasebord">
    <?php  

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "car_booking_system";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM car_details";
        $run = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($run))
        { 
            $title = $row['Car_name'];
            $owner =$row['Owner_name'];
            $model  = $row['Car_model'];
            $year = $row['year'];
            $category =$row['Catagury'];

        ?>


            <table id="content" >
                    <div class="card" style="width:45%; height:500px;">
                    <img src="defoltcar.jpeg " class="card-img-bottom" alt="..." id="imm" >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title ?> </h5>
                        <p class="card-text">This car is <?php echo $model ?> model and product in <?php echo $year ?>. </p>
                        <p class="card-text"><small class="text-body-secondary">This car owner <?php echo $owner ?> will give this car for <?php echo $owner ?>Rs</small></p>
                    </div>
                    
            </div>
        <?php }  ?>
</div>

</body>
</html>