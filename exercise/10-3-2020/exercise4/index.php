<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>exercise4</title>
</head>
<body>
<?php
    $lastnameErr =$firstnameErr =$genderErr =$addressErr =$maErr =&timeErr =$argErr="";
    $lastname =$firstname =$gender =$address =$peole =&time =$arg="";
    if ($_SERVER ["REQUEST_METHOD"] ==" POST"){ 
        if (empty ($_POST["lastname"])){
            $lastnameErr="hãy điền vào chỗ trống";
        }else{
            $lastname=$_POST("lastname");
        }
        if (empty ($_POST["firstname"])){
            $firstnameErr="hãy điền vào chỗ trống";
        }else{
            $firstname=$_POST("firstname");
        }
        if (empty($_POST["email"])){
            $emailErr = "Bạn cần nhập email !";
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
            <div class="col-12 col-sm-8 col-md-8 col-lg-6">
                <h3>Subscription Form</h3>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                        <div class="row">
                            lastname:   <input  class="form-control mp-2" type ="text" name="lname">
                                        <span class="text-danger py-3"><?php echo $lastnameErr ;?></span> 
                            Frirstname: <input  class="form-control mp-2" type ="text" name="fname">
                                        <span class="text-danger "><?php echo $firstnameErr ;?></span>  <br>                                        
                            Gender:     <input type="radio" name="gender" value="female">Female
                                        <input type="radio" name="gender" value="male">Male
                                        <span class="text-danger py-3"> <?php echo $genderErr;?></span> <br>
                            Address:    <textarea name="comment" rows="4" cols="62" >somewhre in hanoi</textarea><br>
                        </div>
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Time 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Newaweek
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Sunday
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Vogue
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    People
                                </label>
                            </div>
                        </div>
                        
                           <input type="radio" name="" value="">1 Year
                           <input type="radio" name="r" value="">3 Year
                           <input type="radio" name="" value="">5 Year
                    </form>
        </div>
    </div>   
</body> 
</html>