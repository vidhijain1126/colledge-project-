<?php
// Assuming you have a database connection established
$pdo = new mysqli("localhost", "root", "", "sports_academy");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sports = $_POST['sports'];

    // Perform a database query to fetch the coach's name based on the selected sport
    // Replace this with your own database query logic using PDO or mysqli
    $query = "SELECT tname FROM coach WHERE sports = ?";
    $stmt = $pdo->prepare($query);
    $stmt->bind_param("s", $sports);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch coach's name
        $coachName = $result->fetch_assoc()['tname'];
        echo $coachName; // Return coach's name as response to the AJAX request
    } else {
        echo "No coach found for this sport.";
    }
}
?>