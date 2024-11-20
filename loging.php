<?php 

$username = $_POST['user_name'];
$password = $_POST['password'];



$connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}


$sqlcu = "SELECT * FROM customer_log_details WHERE user_Name = '$username' and  password= '$password' ;";
$sqlad = "SELECT * FROM admin_log_de WHERE user_Name = '$username' and  password= '$password' ;";
$sqlow = "SELECT * FROM owner_log_details WHERE user_Name = '$username' and  password= '$password' ;";


$cu = mysqli_query($connect, $sqlcu);
$ad = mysqli_query($connect, $sqlad);
$ow = mysqli_query($connect, $sqlow);



 if ($ad) {
    echo "<script>location.replace('admin menu.php');</script>";
}
else if ($cu) {
    echo "<script>location.replace('customermenu.php');</script>";
}
else if ($ow) {
    echo "<script>location.replace('orner_menu.php');</script>";
}
else{
    echo " not found your username and passwad..... ";
}

?>