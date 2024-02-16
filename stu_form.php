<?php
    $con = new mysqli("localhost", "root", "", "sports_academy");

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        extract($_POST);
        $qry = "INSERT INTO `student` (`name`, `sports`, `parents`, `dob`, `address`, `phone`, slot, coach, fees) 
        VALUES ('$name', '$sports', '$parents', '$dob', '$address', '$phone', '$slot', '$coach', '$fees')";

        if ($con->query($qry) === TRUE) {
                    
        } 
        else {
            echo "Error: " . $qry . "<br>" . $con->error;
        }

    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f7f7f7;
            overflow: hidden;
        }
        .circle {
            width: 80px;
            height: 80px;
            line-height: 100px;
            border-radius: 50%;
            background-color: #4CAF50;
            justify-content: center;
        }
        .circle i {
            color: #fff;
            font-size: 50px;
            padding: auto;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
            font-size: 18px;
            margin-bottom: 30px;
        }
        .back-to-home {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-to-home:hover {
            background-color: #45a049;
        }
        .modal-content {
            margin: 11% auto;
            padding: 20px;
            width: 70%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
        }
        .center{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="modal-content">
    <div class="center">
        <div class="circle">
            <i class="fa fa-check"></i>
        </div>
    </div>
    <h1>Thank You!</h1>
    <p>Your form has been successfully submitted.</p>
    <a href="dashboard.php" class="back-to-home">Back to Home</a>
</div>
</body>
</html>