<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>
<body>
    <?php
        $connection = mysqli_connect('localhost','root','','test');

        if ($connection) {
            echo "Database connect success!";
        }else {
            die("connection fail ..." . mysqli_connect_error());
        }


    ?>
</body>
</html>