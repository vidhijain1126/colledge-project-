<?php
    $con = new mysqli("localhost", "root", "", "sports_academy");
    $id = null;
    if (isset($_GET['code'])) {
        $id = $_GET['code'];
        $id = intval($id);
    }
    array_pop($_POST);
    print_r($_POST);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sanitizedValues = [];
        foreach ($_POST as $key => $value) {
            if (is_array($value)) {
                $sanitizedValues[$key] = implode(',', array_map('intval', $value));
            } else {
                $sanitizedValues[$key] = $con->real_escape_string($value);
            }
        }
        $updateFields = [];
        foreach ($sanitizedValues as $key => $value) {
            $updateFields[] = "$key = '$value'";
        }

        $updateFieldsStr = implode(', ', $updateFields);
        $qry = "UPDATE student SET $updateFieldsStr WHERE sid = $id";
        $res = $con->query($qry);

        if ($res === true) {
            header("Location: fetch_stu_details.php");
            exit;
        } else {
            echo "Error: " . $con->error;
        }
    } else {
        echo "Invalid request method";
    }
 ?>
