<?php
$con = new mysqli('localhost', 'root', '', 'sports_academy');
$id = null;

if (isset($_GET['code'])) {
    $id = $_GET['code'];
} else {
    echo "No ID provided.";
}

$qry = "SELECT * FROM student WHERE sid = '$id'";
$res = $con->query($qry);
$result = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update student fee</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        form {
            margin-top: 20px;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 600px;
        }

        input,
        select,
        textarea {
            display: block;
            margin-bottom: 20px;
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 50%;
            margin: 0 auto;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #3D3F47;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #3D3F47;
        }

        input[type="checkbox"] {
            display: inline;
            width: 5%;
        }

        fieldset {
            margin-bottom: 20px;
            padding-top: 10px;
        }

        label {
            margin-bottom: 10px;
        }
        h3{
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <form action="feerecordbackend.php?code=<?php echo $id; ?>" method="post">
        <h3>Student Fees</h3>
        <label>Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $result['name'] ?>" required>
        <label>Sports:</label>
        <select id="sports" name="sports" required>
            <option value="<?php echo $result['sports']; ?>"><?php echo $result['sports']; ?></option>
        </select>
        <label>Month:</label>
        <select id="month" name="month" required>
            <option value="jan">January</option>
            <option value="feb">February</option>
            <option value="mar">March</option>
            <option value="apr">April</option>
            <option value="may">May</option>
            <option value="jun">june</option>
            <option value="july">July</option>
            <option value="aug">August</option>
            <option value="sep">September</option>
            <option value="oct">Octomber</option>
            <option value="nov">Novomber</option>
            <option value="dec">December</option>
        </select>
        <label>Fees:</label>
        <input type="number" id="fees" name="fees" value="<?php echo $result['fees']; ?>" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
