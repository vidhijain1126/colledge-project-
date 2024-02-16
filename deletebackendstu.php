<?php
    $conn = new mysqli("localhost","root","","sports_academy");
    $id = null;
    if (isset($_GET['code'])) {
        $id = $_GET['code'];
        $id = intval($id);
    }
    $qry="delete from student where sid=$id";
    if($conn->query($qry) === TRUE)
    {
        header("Location: fetch_stu_details.php");
    }
    else{
        echo "<br>"."something wrong happens";
    }
?>