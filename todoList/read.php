<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasks List</h1>
    <a href="./create.php">Creat Page</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                    <td>1</td>
                    <td>Code Lab</td>
                    <td>1.3.2022</td>
                    <td>
                        <a href="">Update</a> |
                        <a href="">Delete</a>
                    </td>
                </tr> -->

            <?php
                require_once("./db_connection.php");
                $sql = "SELECT * FROM work";
                $query = mysqli_query($conn,$sql);
                
                while ($row = mysqli_fetch_assoc($query)) {
                    $time = date('d:m:Y g:i:a',strtotime($row['created_at']));
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$time}</td>
                        <td>
                            <a href='./update.php?id={$row['id']}'>Update</a> |
                            <a href='./delete.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                


            ?>
        </tbody>
    </table>
</body>
</html>