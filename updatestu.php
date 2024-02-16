<?php
$con = new mysqli('localhost', 'root', '', 'sports_academy');
$id;

if (isset($_GET['code'])) {
    $id = $_GET['code'];
} else {
    echo "no";
}
$qry = "select * from student where sid = '$id'";
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
<form action="updatebackendstudent.php?code=<?php echo $id; ?>" method="post">
    <h3>Update Student Details</h3>
        <label>Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $result['name'] ?>" required>
        <label>Sports:</label>
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
        <label>Parents:</label> <input type="text" id="parents" name="parents"
            value="<?php echo $result['parents'] ?>" required>
        <label>Phone No.:</label> <input type="tel" id="phone" name="phone"
            value="<?php echo $result['phone'] ?>" required>
        <label>dob:</label> <input type="Date" id="dob" name="dob"
            value="<?php echo $result['dob'] ?>" required>
        <label>Address:</label><input type="text" value="<?php echo $result['address'] ?>" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>