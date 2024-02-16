<!DOCTYPE html>
<html>

<head>
  <title>Coach Details</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<button id="sidebarToggle" onclick="abc()">☰</button>
  <span id="close" onclick="closeAside()">&times;</span>
  <aside id="sidebar">
    <p><a href="dashboard.php" class="nothing"><i class="fa fa-long-arrow-left"></i> &nbsp;Admin Dashboard</a></p>
    <a href="feesbasketball.php">Basketball</a>
    <a href="feescricket.php"class="activ">Cricket</a>
    <a href="feesrunning.php">Running</a>
    <a href="feesbadminton.php">Badminton</a>
    <a href="feeskarate.php">Karate</a>
    <div class="spacee"></div>
  </aside>
  <?php
  $conn = new mysqli("localhost", "root", "", "sports_academy");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT sid, name, sports, jan, feb, mar, apr, may, jun, july, aug, sep, oct, nov, dece FROM fees_record where sports='Cricket'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th colspan='15'>Student Fees Record</th></tr>";
    echo "<tr><th>ID</th><th>Name</th><th>Sports</th><th>January</th><th>Febuary</th><th>March</th><th>April</th><th>May</th><th>June</th><th>July</th><th>August</th><th>September</th><th>Octomber</th><th>Novomber</th><th>December</th></tr>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["sid"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["sports"] . "</td>";
      echo "<td>" . $row["jan"] . "</td>";
      echo "<td>" . $row["feb"] . "</td>";
      echo "<td>" . $row["mar"] . "</td>";
      echo "<td>" . $row["apr"] . "</td>";
      echo "<td>" . $row["may"] . "</td>";
      echo "<td>" . $row["jun"] . "</td>";
      echo "<td>" . $row["july"] . "</td>";
      echo "<td>" . $row["aug"] . "</td>";
      echo "<td>" . $row["sep"] . "</td>";
      echo "<td>" . $row["oct"] . "</td>";
      echo "<td>" . $row["nov"] . "</td>";
      echo "<td>" . $row["dece"] . "</td>";
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