<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Exercise2</title>
    </head>
<body>
    <?php
        $firstnameErr =$lastnameErr =$emailErr =$genderErr =$stateErr =$hobbiesErr="";
        $firsrname =$lastname =$email =$gender =$state =$hobbies="";
        if ($_SERVER ["REQUEST_METHOD"] ==" POST"){
            if (empty ($_POST["firstname"])){
                $firstnameErr="hãy điền vào chỗ trống";
            }else{
                $firstname=$_POST("firstname");
            }
            if (empty ($_POST["lastname"])){
                $lastnameErr="hãy điền vào chỗ trống";
            }else{
                $lastname=$_POST("lastname");
            }
            if (empty($_POST["email"])){
                $emailErr = "Bạn cần nhập email !";
            } else if(!filter_var($_POST["email"], FILTER_VALIDATE_)){
                $emailErr = "Email không đúng định dạng !";
            }else{
                $email = $_POST["email"];
            } 
        }
        function test_input($data){
            $data =trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-8 col-lg-6">
                <h3>RegistrationFrom</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    Frirstname: <input  class="form-control mp-2" type ="text" name="fname">
                                <span class="text-danger py-3"><?php echo $firstnameErr ;?></span><br>       
                    lastname:   <input  class="form-control mp-2" type ="text" name="lname">
                                <span class="text-danger py-3"><?php echo $lastnameErr ;?></span><br>                        
                    Email:      <input  class="form-control mp-2" type ="text" name="email">
                                <span class="text-danger py-3"><?php echo $emailErr ;?></span><br>       
                    Gender:     <input type="radio" name="gender" value="female">Female
                                <input type="radio" name="gender" value="male">Male
                                <span class="text-danger py-3"> <?php echo $genderErr;?></span> <br>
                    State:      <select class="form-select form-select-lg py-1" aria-label=".form-select-lg example">
                                <option value="1">Johor</option>
                                <option value="2">Massachusetts</option>
                                <option value="3">Washington</option>
                                </select>
                    Hobbies:   <input type="radio" name="sport" value="sport">Badminton
                                <input type="radio" name="sport" value="sport">Football
                                <input type="radio" name="sport" value="sport">Bicyle
                                <span class="text-danger py-3"> <?php echo $hobbiesErr;?></span> <br><br>
                                <button type="submit" class="btn btn-primary ">Save record</button>
                </form>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-2">
                <h2>Featured</h2>
                <h3>Special title treatment </h3>
                With supporting text below as a natural<br> lead-in to additional content.<br>
                <button type="submit" class="btn btn-primary ">Go somewhere</button>
            </div>
        </div>
    </div>
    <?php
        echo $firstname;
        echo $lastname;
        echo $email;
        echo $state;
        echo $hobbies;
    ?>
</body>
</html>