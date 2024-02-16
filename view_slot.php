<!DOCTYPE html>
<html>

<head>
    <title>Student Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            height: 10%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            height: 20px;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        aside {
            color: #fff;
            display: grid;
            width: 20%;
            padding-left: 20px;
            height: 100vh;
            background-image: linear-gradient(360deg, #5d5e66, #3d3f47);
            border-top-right-radius: 80px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
                0 6px 20px 0 rgba(0, 0, 0, 0.15);
        }

        aside a {
            font-size: 13px;
            font-weight: bold;
            color: #fff;
            display: block;
            padding: 12px 3px;
            text-decoration: none;
            overflow: hidden;
        }

        .nothing:hover {
            color: #fff;
            background: none;
        }

        aside a:hover {
            color: #3d3f47;
            background: #fff;
            outline: none;
            position: relative;
            background-color: #fff;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            font-weight: bold;
        }

        aside a.clicked {
            background-color: #fff;
            color: #3d3f47;
            outline: none;
            position: relative;
            background-color: #fff;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            font-weight: bold;
        }

        .activ {
            background-color: #fff;
            color: #3d3f47;
            outline: none;
            position: relative;
            background-color: #fff;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            font-weight: bold;
        }

        aside p {
            margin: 0;
            padding: 40px 0;
        }

        #close {
            color: white;
            float: left;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            display: none;
        }

        #close:hover,
        #close:focus {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        body {
            font-family: "Roboto";
            width: 100%;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: row;
        }

        h1 {
            text-align: center;
            background-color: #3d3f47;
        }

        .spacee {
            height: 320px;
        }

        @media only screen and (max-width: 768px) {
            aside {
                display: none;
                position: absolute;
            }
        }

        #sidebarToggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .basketball {
            display: none;
        }

        button {
            width: 100%;
            background-color: #3d3f47;
            border-radius: 7px;
        }

        a {
            text-decoration: none;
            color: #fff;
            width: 100%;
        }
        .nothing:hover {
        color: #fff;
        background: none;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function abc() {
            document.getElementById("sidebar").style.display = "block";
            document.getElementById("sidebarToggle").style.display = "none";
            document.getElementById("close").style.display = "block";
            document.getElementById("close").style.zIndex = '10';
        }
        function closeAside() {
            document.getElementById("sidebar").style.display = "none";
            document.getElementById("sidebarToggle").style.display = "block";
            document.getElementById("close").style.display = "none";
        }
    </script>
</head>

<body>
    <button id="sidebarToggle" onclick="displaySidebar()">☰</button>
    <span id="close" onclick="closeAside()">&times;</span>
    <aside id="sidebar">
        <p><a href="dashboard.php" class="nothing"><i class="fa fa-long-arrow-left"></i> &nbsp;Admin Dashboard</a></p>
        <a href="view_slot.php">View Slot</a>
        <a href="fetch_stu_details.php">Player Info</a>
        <a href="fetch_coach_details.php">Couch Info</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Log-out</a>
        <div class="spacee"></div>
    </aside>
    <?php
    $con = new mysqli("localhost", "root", "", "sports_academy");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $games = array(
        "Badminton" => array("4PM - 5PM", "5PM -6PM"),
        "Basketball" => array("4PM - 5PM", "5PM -6PM"),
        "Cricket" => array("4PM - 5PM", "5PM -6PM"),
        "Karate" => array("4PM - 5PM", "5PM -6PM"),
        "Running" => array("4PM - 5PM", "5PM -6PM")
    );

    echo '<table border="1">';
    echo '<tr><th>Sports</th><th>Time Slot</th><th>Total Seats</th><th>Available Seats</th></tr>';

    foreach ($games as $game => $slots) {
        foreach ($slots as $slot) {
            $sql = "SELECT COUNT(*) AS total_students FROM student WHERE sports = '$game' AND slot = '$slot'";
            $result = $con->query($sql);

            if ($result) {
                $row = $result->fetch_assoc();
                $total_students = $row['total_students'];
                $available_seats = 15 - $total_students;

                echo '<tr>';
                echo '<td>' . $game . '</td>';
                echo '<td>' . $slot . '</td>';
                echo '<td> 15</td>';
                echo '<td>' . $available_seats . '</td>';
                echo '</tr>';
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }

    echo '</table>';

    $con->close();
    ?>