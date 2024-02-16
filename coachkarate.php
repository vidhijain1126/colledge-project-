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
    .basketball{
      display: none;
    }
    button{
      width: 100%;
      background-color: #3d3f47;
      border-radius: 7px;
    }
    a{
      text-decoration: none;
      color: #fff;
      width: 100%;
    }

  </style>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<button id="sidebarToggle" onclick="abc()">☰</button>
  <span id="close" onclick="closeAside()">&times;</span>
  <aside id="sidebar">
    <p><a href="dashboard.php" class="nothing"><i class="fa fa-long-arrow-left"></i> &nbsp;Admin Dashboard</a></p>
    <a href="coachbasketball.php">Basketball</a>
    <a href="coachcricket.php">Cricket</a>
    <a href="coachrunning.php">Running</a>
    <a href="coachbadminton.php">Badminton</a>
    <a href="coachkarate.php" class="activ">Karate</a>
    <div class="spacee"></div>
  </aside>
  <?php
  $conn = new mysqli("localhost", "root", "", "sports_academy");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT tid, tname, sports, email, tphone, taddress, experience FROM coach where sports='Karate'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th colspan='10'>Coach Details</th></tr>";
    echo "<tr><th>ID</th><th>Name</th><th>Sports</th><th>Email</th><th>Phone</th><th>Address</th><th>Experience</th><th>Edit</th><th>Delete</th></tr>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["tid"] . "</td>";
      echo "<td>" . $row["tname"] . "</td>";
      echo "<td>" . $row["sports"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["tphone"] . "</td>";
      echo "<td>" . $row["taddress"] . "</td>";
      echo "<td>" . $row["experience"] . "</td>";
      $id = "updatecoach.php?code=" . $row['tid'];
      echo "<td><button><a href='$id'>Edit</a></button></td>";
      $id = "deletebackendcoach.php?code=" . $row['tid'];
      echo "<td><button><a href='$id'>Delete</a></button></td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
</body>
</html>