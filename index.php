





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>DriveNow/loggin</title>
    <style>
        /* Reset margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Center content */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #B0B7C0;
        }
        .fa-arrow-left {
            font-size: 24px;
            color: #050505;
            cursor: pointer;
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
        }

        .fa-arrow-left:hover {
            color: #000000;
        }

        /* Container styling */
        #content {
            background-color: #707370;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Heading style */
        #loging {
            font-size: 24px;
            color: #ffffff;
            margin-bottom: 20px;
        }

        /* Input fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-bottom-left-radius: 25px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            font-size: 16px;  
        }
        .input-container {
            position: relative;
            width: 100%;
            max-width: 400px;
            margin: 10px 0;
        }
        .input-container input {
            width: 100%;
            padding: 10px 40px; /* Add padding to make space for the icon */
            font-size: 16px;
            border: 1px solid #ddd;
            border-bottom-left-radius: 25px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .input-container .icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #171710;
            font-size: 18px;
        }

        /* Button styling */
        #Loging {
            width: 100%;
            padding: 10px;
            background-color: #171710;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #Loging:hover {
            background-color: #707370;
        }

        /* Links and additional text */
        #fogpass, #register {
            margin-top: 15px;
            font-size: 14px;
        }

        /* Link styling */
        #fogpass a, #register {
            color: #B0B7C0;
            text-decoration: none;
            cursor: pointer;
        }
        #fogpass a:hover, #register:hover {
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            #content {
                padding: 15px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
    

        <form method="POST" action="loging.php">

            <div id="content">
                <h1 id="heading" style="font: size 30px;">Login</h1><br>

                <div class="input-container" >
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="User name" id="user_name" name="user_name">
                </div>

                <div class="input-container">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" placeholder="Password" id="password" name="password">
                </div>

                <input type="submit" id="Loging" value="Login" ><br><br>
    </form> 
                <div id="fogpass">
                    <a href="#">Forgotten password?</a>
                </div>
                
                <div id="register">
                    <a href="actor.html" style="color: #B0B7C0; outline-color: #707370;">Register</a>
                </div>
            </div>
       
</body>
</html>
