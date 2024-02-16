<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reports</title>
</head>
<body>
    <div>
        <h3>Reports of the teacher</h3>
        <div> Padma Joshi </div>
        <form method="post" action="report.php">
            <input type="checkbox" name="t" value="p">
            <input type="checkbox" name="u" value="p">
            <input type="checkbox" name="i" value="p">
            <input type="submit" name="sub" value="done">
        </form>
        <?php
        print_r($_POST);
        ?>
    </div>
</body>
</html>