<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="taskName" id="name" placeholder="Enter your tasks in here">
        <button name="addBtn">Create</button>
    </form>
    <?php
        require_once("./db_connection.php");
            
        

        if(isset($_POST['addBtn'])){
            $taskName = $_POST['taskName'];
            if($taskName == "" || $taskName == null){
                echo "<small style='color: red;'>Message is required</small>";
            }else {
                $sql = "INSERT INTO work (name) VALUES ('$taskName')";

                if(mysqli_query($conn,$sql)){
                    echo "<small style='color: green;'>Insert Success</small>";
                }else{
                    echo "query fail";
                }
            }
            
        }
    
    ?>
</body>
</html>