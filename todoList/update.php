<!-- Get data => show => edit => update -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("./db_connection.php");
        
        $id = $_GET["id"];
        $sql = "SELECT * FROM work WHERE id = $id";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query); // step 1. get data

        
    ?>

    <?php
        if(isset($_POST['updateBtn'])){
            $taskName = $_POST['taskName'];
            if($taskName == null || $taskName == "") {
                echo "<small style='color: red;'>Task Name is required</small>";
            }else{
                $updateSQL = "UPDATE work SET name = '{$_POST['taskName']}' WHERE work.id = {$_POST['taskId']}";
                if(mysqli_query($conn,$updateSQL)){
                    header("location:./read.php");
                }else{
                    echo "Update fail...";
                }

                
            }

        };
        // UPDATE `work` SET `name` = 'dodo' WHERE `work`.`id` = 11;
    ?>
    <form action="" method="POST">
        Tasks
        <input type="hidden" name="taskId" value="<?php echo $data['id']?>" >
        <input type="text" name="taskName" value="<?php echo $data['name']?>" > <!-- step 2. show -->
        <button name="updateBtn">Update</button>
    </form>
</body>
</html>





