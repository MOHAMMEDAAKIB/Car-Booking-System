<?php
$F = $_POST['F_name'];
$L = $_POST['L_name'];
$D = $_POST['date_of_b'];
$N = $_POST['Nic'];
$P = $_POST['pho_num'];
$E = $_POST['email'];
$C = $_POST['country'];
$pr = $_POST['province'];
$di = $_POST['District'];
$ci = $_POST['city'];
$ro = $_POST['road'];
$Hn = $_POST['no'];

$Un = $_POST['user_name'];
$Ps = $_POST['password'];

// Corrected the function name to `mysqli_connect`
$connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');

$sql = "INSERT INTO customers_details(First_Name, Last_Name, Date_of_birth, NIC, pho_Number, Email, Country, Province, District, city, Road, Hn) 
        VALUES('$F', '$L', '$D', '$N', '$P', '$E', '$C', '$pr', '$di', '$ci', '$ro', '$Hn')";

$log_sql = "INSERT INTO customer_log_details(user_Name, password) VALUES('$Un','$Ps')";

// Corrected the function name to `mysqli_query`
$w = mysqli_query($connect, $sql);
$q = mysqli_query($connect, $log_sql);

if ($w and $q) {
    echo "Admin detail added successfully"; // Added a semicolon here
} else {
    echo "Something went wrong";
}

?>
