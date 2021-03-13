<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Exercise3</title>
</head>
<body>
	<?php 
		$yournameErr =$youremailErr =$yourphonenumberErr =$yourwebsiteErr =$yourmessageErr="";
		$yourname =$youremail =$yourphonenumber =$yourwebsite =$yourmessage ="";
		if ($_SERVER ["REQUEST_METHOD"] ==" POST"){
            if (empty ($_POST["name"])){
                $nameErr="hãy điền vào chỗ trống";
            }else{
                $name=$_POST("name");
            }
			if (empty ($_POST["email"])){
                $emailErr="hãy điền vào chỗ trống";
            }else{
                $email=$_POST("email");
            }
            if (empty ($_POST["website"])){
                $websiteErr="hãy điền vào chỗ trống";
            }elseif(!filter_var($_POST["website"], FILTER_VALIDATE_)){
                $websiteErr = "Website không đúng định dạng !";
			}
			else{
                $website=$_POST("website");
            }
        }
        function test_input($data){
            $data =trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
	?>
	<div class="container my-3">
		<div class="row">
			<div class="col-12 col-sm-8 col-md-8 col-lg-6" mp->
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
					<input class="form-control  " type="text" name="yourname" placeholder="Your name">
					<span class="text-danger"><?php echo $yournameErr; ?></span><br>
					<input class="form-control " type ="text" name="youremail" placeholder="Your Email Address">
					<span class="text-danger"><?php echo $youremailErr;?></span><br>
					<input class="form-control " type ="number" name="yourphonenumber" placeholder="Your Phone Number">
					<span class="text-danger"><?php echo $yourphonenumberErr;?></span><br>
					<input class="form-control " type ="text" name="yourwebsite" placeholder="Your Web Site starts with http://">
					<span class="text-danger"><?php echo $yourwebsiteErr;?></span><br>
					<textarea name="comment" rows="4" cols="62" >Type your Message Here </textarea><br>
					<button type="submit" class="btn btn-danger col-12">SUBMIT</button>
				</form>
			</div>
		</div>	
	</div>
	<?php
        echo $yourname;
		echo $youremail;
		echo $yourphonenumber;
		echo $yourwebsite;
		echo $yourmessage;
	?>
</body>
</html>