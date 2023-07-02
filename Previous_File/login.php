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
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="">
                            </div>

                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" id="">
                            </div>

                            <button class="btn btn-dark float-end " type="submit" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        session_start();
        if (isset($_POST['login'])) {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            if($userEmail != "" && $userPassword != "") {
                if(isset($_SESSION['email'])){
                    if ($userEmail === $_SESSION['email'] && password_verify($userPassword, $_SESSION['password'])) {
                        echo "Login Success";
                    }else {
                        echo "Login fail, try again!";
                    }
                }else {
                    echo "No such datas in our server";
                }
            }else{
                echo "Need to fill!";
            }
            

        };



    ?>
</body>
</html>