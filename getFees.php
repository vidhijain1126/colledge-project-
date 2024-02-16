<?php
$pdo = new mysqli("localhost", "root", "", "sports_academy");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sports = $_POST['sports'];
    $query = "SELECT fees FROM coach WHERE sports = ?";
    $stmt = $pdo->prepare($query);
    $stmt->bind_param("s", $sports);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $fees = $result->fetch_assoc()['fees'];
        echo $fees;
    } else {
        echo "No fees found for this sport.";
    }
}
?>