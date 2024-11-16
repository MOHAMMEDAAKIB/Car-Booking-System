<?php
// Retrieve form data
$Car_name = $_POST['validationServer01'] ?? '';
$Car_model = $_POST['validationServer02'] ?? '';
$Owner_name = $_POST['validationServerOwnername'] ?? '';
$year = $_POST['validationServer03'] ?? '';
$Catagury = $_POST['validationServer04'] ?? '';

// Handle file upload
if (isset($_FILES['validationServer05']) && $_FILES['validationServer05']['error'] == UPLOAD_ERR_OK) {
    $image = $_FILES['validationServer05']['name'];
    $tmp_name = $_FILES['validationServer05']['tmp_name'];
    $upload_dir = 'uploads/';

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    move_uploaded_file($tmp_name, $upload_dir . $image);
} else {
    $image = null;
}

// Database connection
$connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into the database
$sql = "INSERT INTO car_details (Car_name, Car_model, Owner_name, year, Catagury, image) 
        VALUES ('$Car_name', '$Car_model', '$Owner_name', '$year', '$Catagury', '$image')";

$w = mysqli_query($connect, $sql);

if ($w) {
    echo "<script>location.replace('admin menu.html');</script>";
} else {
    echo "Error: " . mysqli_error($connect);
}

// Close the database connection
mysqli_close($connect);
?>
