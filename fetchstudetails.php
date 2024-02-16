<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedSport = $_POST['sports'];     
    $connection = new mysqli("localhost", "root", "", "sports_academy");
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    $query = "SELECT slot, COUNT(*) AS count FROM student WHERE sports = ? GROUP BY slot";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $selectedSport);
    $stmt->execute();
    $result = $stmt->get_result();     
    if ($result) {
        $slotCounts = array();
        while ($row = $result->fetch_assoc()) {
            $slotCounts[] = array(
                'slot' => $row['slot'],
                'count' => $row['count']
            );
        }         
        echo json_encode(array('slots' => $slotCounts));
    } else {
         
        echo json_encode(array('error' => 'Unable to fetch data'));
    } 
    $stmt->close();
    $connection->close();
} else {  
    echo json_encode(array('error' => 'Invalid request method'));
}
?>
