<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<body >
    <div class="container  mt-4">
        <div class="row">
            <div class="col-3">
                <div class="text-center">
                    <a href="login.php">
                        <button type="button" class="btn btn-primary mb-3" >Login</button>
                    </a>
                </div>

                <div class="text-center">
                    <a href="register.php">
                        <button type="button" class="btn btn-success mb-3" >Register</button>
                    </a>
                </div>

                <div class="text-center">
                    <a href="logout.php">
                        <button type="button" class="btn btn-danger mb-3" >Logout</button>
                    </a>
                </div>
            </div>
            <div class="col-5 ">
                <div class="card"> 
                    <div class="card-body">
                        <form method="POST">
                            Register

                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="">
                            </div>

                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="">
                            </div>

                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" id="">
                            </div>

                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" name="confirmPassword" id="">
                            </div>

                            <button class="btn btn-dark float-end " type="submit" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
        session_start();

        function checkStrongPassword ($password){
            $upperStatus = false;
            $lowerStatus = false;
            $numberStatus = false;
            $specialStatus = false;

            if(preg_match('/[A-Z]/',$password)){
                $upperStatus = true;
            };

            if(preg_match('/[a-z]/',$password)){
                $lowerStatus = true;
            };

            if(preg_match('/[0-9]/',$password)){
                $numberStatus = true;
            };

            if(preg_match('/[!@#$%^&*]/',$password)){
                $specialStatus = true;
            };

            if($upperStatus && $lowerStatus && $numberStatus && $specialStatus){
                return true;
            }else {
                return false;
            }
        };

        if(isset($_POST["register"])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];


            if ($name != "" && $email != "" && $password != "" && $confirmPassword != "") {
                if (strlen($password) >= 6 && strlen($confirmPassword) >= 6) {
                    if($password === $confirmPassword){
                        $status = checkStrongPassword($password);
                        if($status){
                            $_SESSION['email'] = $email;
                            $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);
                            echo "Register Success!";
                        }else {
                            echo "Your Password is not strong password! (eg. contain A-Z, a-z, 0-9, !@#$%^&*)";
                        };
                    }else {
                        echo "Passwords not same. Type again!";
                    }
                } else {
                    echo "Password must be greater than 6";
                }
            }else {
                echo "Need to fill!";
            }

            
            
        }
    
    ?>
</body>
</html>