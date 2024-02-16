<?php
$con = new mysqli('localhost', 'root', '', 'sports_academy');
$id;

if (isset($_GET['code'])) {
    $id = $_GET['code'];
} else {
    echo "no";
}
$qry = "select * from coach where tid = '$id'";
$res = $con->query($qry);
$result = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update coach</title>
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
<form action="updatebackendcoach.php?code=<?php echo $id; ?>" method="post">
    <h3>Update Coach Details</h3>
        <label for="tname1">Name:</label>
        <input type="text" id="tname1" name="tname" value="<?php echo $result['tname'] ?>" required>
        <label for="sports">Sports:</label>
        <select id="sports" name="sports" required>
            <option value="<?php $result['sports'] ?>">
                <?php echo $result['sports'] ?>
            </option>
            <option value="Basketball">Basketball</option>
            <option value="Cricket">Cricket</option>
            <option value="Running">Running</option>
            <option value="Badminton">Badminton</option>
            <option value="Karate">Karate</option>
        </select>
        <label for="mail">Mail:</label> <input type="email" id="email" name="email"
            value="<?php echo $result['email'] ?>" required>
        <label for="phone_no">Phone No.:</label> <input type="tel" id="tphone" name="tphone"
            value="<?php echo $result['tphone'] ?>" required>
        <label for="exprience">Exprience:</label> <input type="number" id="experience" name="experience"
            value="<?php echo $result['experience'] ?>" required>
        <label>Address:</label><input type="text" value="<?php echo $result['taddress'] ?>" required>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
    <script src="../dashboard/tempFinal.js"></script>
</body>
</html>