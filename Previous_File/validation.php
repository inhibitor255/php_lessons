<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
    <?php 
        $errorName = $errorEmail = $errorPhone = $errorAddress = "";
        $name = $email = $phone = $address = "";

        if(isset($_POST['btnSave'])){
            if($_POST['name'] === "" || $_POST['name'] === null || empty($_POST['name'])){
                $errorName = "Please fill Name Field";
            }else{
                $name = $_POST['name'];
            };

            if($_POST['email'] === "" || $_POST['email'] === null || empty($_POST['email'])){
                $errorEmail = "Please fill Email Field";
            }else{
                $email = $_POST['email'];
            };

            if($_POST['phone'] === "" || $_POST['phone'] === null || empty($_POST['phone'])){
                $errorPhone = "Please fill Phone Field";
            }else{
                $phone = $_POST['phone'];
            };
            
            if($_POST['address'] === "" || $_POST['address'] === null || empty($_POST['address'])){
                $errorAddress = "Please fill Address Field";
            }else{
                $address = $_POST['address'];
            };

            if($name != "" && $email != "" && $phone != "" && $address != ""){
                echo $name . "<br>";
                echo $email . "<br>";
                echo $phone . "<br>";
                echo $address . "<br>";
            }


            
            

        }
    ?>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-6 offset-3  shadow">
                <form action="" method="POST">
                    <div class="my-3 px-5">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        <small class="text-danger"><?php echo $errorName; ?></small>
                    </div>

                    <div class="my-3 px-5">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Eg. example@gmail.com">
                        <small class="text-danger"><?php echo $errorEmail; ?></small>
                    </div>

                    <div class="my-3 px-5">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number">
                        <small class="text-danger"><?php echo $errorPhone;  ?></small>
                    </div>

                    <div class="my-3 px-5">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" cols="30" rows="10" placeholder="Type Your Address"></textarea>
                        <small class="text-danger"><?php echo $errorAddress; ?></small>
                    </div>

                    <div class="my-3 px-5 float-end">
                        <input type="submit" class="btn btn-danger" value="Save" name="btnSave">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>