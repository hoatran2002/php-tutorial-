<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Exercise1</title>
    </head>
    <body>
        <?php 
        $usernameErr = $passwordErr ="";
        $username = $password="";
        if($_SERVER["REQUEST_METHOD"] =="POST"){
            if (empty($_POST["userName"])){
                $usernameErr="ko bo trong";
            }else{
                $username = test_input($_POST["userName"]);
            }
            if (empty($_POST["passWord"])){
                $passwordErr= "ko bo trong";
            }else{
                 $password= test_input($_POST["passWord"]);
            }   
        }
        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        ?>
        <div class="container my-3">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h2 class="bg-success text-center py-3">Sign in</h2>
                <span class="text-danger"><?php echo $usernameErr; ?></span>
                <input class="form-control mb-2" type="text" name="userName" placeholder="username">
                <span class="text-danger"><?php echo $passwordErr;?></span>
                <input class="form-control mb-2" type ="password" name="passWord" placeholder="password">
                <button type="submit" class="btn btn-success col-12">LOGIN</button>
            </form>
        </div>
        <?php
            if($username=="admin" && $password=="admin"){
                echo "Ten nguoi dung la: ".$username;
            }else{
                echo "thong tin sai ";
            }
        ?>
    </body>
</html>