<?php
// Capture form data from POST request
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

// Establish a connection to the database
$connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to insert personal details into admin_details table
$sql = "INSERT INTO admin_details (First_Name, Last_Name, Date_of_birth, NIC, pho_Number, Email, Country, Province, District, city, Road, Hn) 
        VALUES ('$F', '$L', '$D', '$N', '$P', '$E', '$C', '$pr', '$di', '$ci', '$ro', '$Hn')";

// SQL query to insert login details into admin_log_details table
$log_sql = "INSERT INTO admin_log_de (user_Name, password) VALUES ('$Un', '$Ps')";

// Execute both queries and check if both were successful
$w = mysqli_query($connect, $sql);
$q = mysqli_query($connect, $log_sql);

if ($w && $q) {
    echo "<script>location.replace('../Car-Booking-System/loging.html');</script>";
} else {
    echo "Error: " . mysqli_error($connect);
}

// Close the database connection
mysqli_close($connect);
?>
