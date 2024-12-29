<?php
/*if (isset($_POST['submit'])) {
    if (isset($_FILES['carImage'])) {
        // Validate upload errors
        if ($_FILES['carImage']['error'] !== UPLOAD_ERR_OK) {
            echo "File upload error: " . $_FILES['carImage']['error'];
            exit();
        }

        // Check for valid image file
        if (!empty($_FILES['carImage']['tmp_name']) && getimagesize($_FILES['carImage']['tmp_name']) !== false) {
            // Collect form inputs
            $Car_name = $_POST['validationServer01'];
            $Car_model = $_POST['validationServer02'];
            $Owner_name = $_POST['validationServerOwnername'];
            $year = $_POST['validationServer03'];
            $Catagury = $_POST['validationServer04'];
            $price = $_POST['validationServer06'];
            $img_tmp_path = $_FILES['carImage']['tmp_name'];
            $img_name = basename($_FILES['carImage']['name']);
            $image_data = file_get_contents($img_tmp_path);

            // Connect to the database
            $connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');
            if (!$connect) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Prepare the SQL query with placeholders
            $stmt = $connect->prepare(
                "INSERT INTO car_details (Car_name, Car_model, Owner_name, year, Catagury, price, IMG_NAME, Images) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
            );

            if ($stmt) {
                $stmt->bind_param(
                    "sssssssb",
                    $Car_name,
                    $Car_model,
                    $Owner_name,
                    $year,
                    $Catagury,
                    $price,
                    $img_name,
                    $image_data
                );

                // Send blob data
                $stmt->send_long_data(7, $image_data);

                if ($stmt->execute()) {
                    echo "<script>location.replace('admin_menu.php');</script>";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Statement preparation failed: " . $connect->error;
            }

            mysqli_close($connect);
        } else {
            echo "Please upload a valid image file.";
        }
    } else {
        echo "No file uploaded. Please try again.";
    }
}*/

    if (isset($_POST['submit'])) {
        if (isset($_FILES['carImage'])) {
            // Validate upload errors
            if ($_FILES['carImage']['error'] !== UPLOAD_ERR_OK) {
                echo "File upload error: " . $_FILES['carImage']['error'];
                exit();
            }

            // Check for empty tmp_name and validate the image
            if (!empty($_FILES['carImage']['tmp_name']) && getimagesize($_FILES['carImage']['tmp_name']) !== false) {
                // Collect form inputs
                $Car_name = $_POST['car_Name'];
                $Car_model = $_POST['Model'];
                $Owner_name = $_POST['Owner_name'];
                $year =$_POST['year'];
                $price =$_POST['price'];
                $Catagury=$_POST['Category'];

                $img_tmp_path = $_FILES['carImage']['tmp_name'];
                $img_name = basename($_FILES['carImage']['name']);

                $image_data = file_get_contents($img_tmp_path);

                // Connect to the database
                $connect = mysqli_connect('localhost', 'root', '', 'car_booking_system');
                if (!$connect) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Prepare the SQL query
                $sql ="INSERT INTO car_details (Car_name, Car_model, Owner_name, year, Catagury, price, IMG_NAME, Images) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $connect->prepare($sql);
                $stmt->bind_param(
                    "ssssssss",
                    $Car_name,
                    $Car_model,
                    $Owner_name,
                    $year,
                    $Catagury,
                    $price,
                    $img_name,
                    $image_data
                );
                if ($stmt->execute()) {
                    echo "<script>alert('Added successfully!');location.replace('admin menu.php');</script>";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
                mysqli_close($connect);
            } else {
                echo "Please upload a valid image file.";
            }
        } else {
            echo "No file uploaded. Please try again.";
        }
    }

?>
