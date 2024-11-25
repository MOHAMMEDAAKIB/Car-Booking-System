<?php
// Retrieve form data
$Car_name = $_POST['validationServer01'] ?? '';
$Car_model = $_POST['validationServer02'] ?? '';
$Owner_name = $_POST['validationServerOwnername'] ?? '';
$year = $_POST['validationServer03'] ?? '';
$Catagury = $_POST['validationServer04'] ?? '';
$price = $_POST['validationServer06'] ?? '';

// Handle file upload
$image = null; // Default value in case of no upload
if (isset($_FILES['validationServer05']) && $_FILES['validationServer05']['error'] == UPLOAD_ERR_OK) {
    $target = "carimmage/" . basename($_FILES['validationServer05']['name']);
    $image = $_FILES['validationServer05']['name'];
    $tmp_name = $_FILES['validationServer05']['tmp_name'];

    if (move_uploaded_file($tmp_name, $target)) {
        echo "<script> alert('Upload successfully...'); </script>";
    } else {
        echo "<script> alert('File upload failed.'); </script>";
        $image = 'default.jpg'; // Use default image if upload fails
    }
} else {
    echo "<script> alert('No file uploaded.'); </script>";
    $image = 'default.jpg'; // Use default image if no file is uploaded
}

// Database connection
$connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into the database
$sql = "INSERT INTO car_details (Car_name, Car_model, Owner_name, year, Catagury, price, image) 
        VALUES ('$Car_name', '$Car_model', '$Owner_name', '$year', '$Catagury', '$price', '$image')";

$w = mysqli_query($connect, $sql);

if ($w) {
    echo "<script>location.replace('admin menu.php');</script>";
} else {
    echo "Error: " . mysqli_error($connect);
}

// Close the database connection
mysqli_close($connect);
?>
