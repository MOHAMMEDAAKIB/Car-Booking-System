<?php 

$username = $_POST['user_name'];
$password = $_POST['password'];

// Connect to the database
$connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL queries
$sqlcu = "SELECT * FROM customer_log_details WHERE user_Name = '$username' AND password = '$password'";
$sqlad = "SELECT * FROM admin_log_de WHERE user_Name = '$username' AND password = '$password'";
$sqlow = "SELECT * FROM owner_log_details WHERE user_Name = '$username' AND password = '$password'";

// Execute queries
$cu = mysqli_query($connect, $sqlcu);
$ad = mysqli_query($connect, $sqlad);
$ow = mysqli_query($connect, $sqlow);

// Verify if rows were returned
if (mysqli_num_rows($ad) > 0) {
    echo "<script>location.replace('admin menu.php');</script>";
} elseif (mysqli_num_rows($cu) > 0) {
    echo "<script>location.replace('customermenu.php');</script>";
} elseif (mysqli_num_rows($ow) > 0) {
    echo "<script>location.replace('orner_menu.php');</script>";
} else {
    echo "<script>alert('Username or password not found.');location.replace('index.php')</script>";
}

// Close the connection
mysqli_close($connect);
?>
