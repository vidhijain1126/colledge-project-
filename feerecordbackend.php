<?php
$con = new mysqli("localhost", "root", "", "sports_academy");
if (isset($_GET['code'])) {
    $id = intval($_GET['code']);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sports = $con->real_escape_string($_POST['sports']);
        $month = $con->real_escape_string($_POST['month']);
        $fees = intval($_POST['fees']);
        $name= $con->real_escape_string($_POST['name']);
        $result = $con->query("SELECT * FROM fees_record WHERE sid = $id");

        if ($result->num_rows == 1) {
            $con->query("UPDATE fees_record SET $month = $fees WHERE sid = $id");
        } else {
            $con->query("INSERT INTO fees_record (sid, name, sports, $month) VALUES ($id, '$name', '$sports', $fees)");
        }
        header("Location: fetch_stu_details.php");
        exit;
    } else {
        echo "Invalid request method";
    }
} else {
    echo "Invalid 'code' parameter";
}
?>
