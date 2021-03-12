<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise</title>
    <link rel="stypesheet"href="style.css">
</head>
<<body>
<div class="container">
	<table class="table">
		<?php
			for ($row = 1; $row <= 10; $row++) {
			                echo "<tr>";
			                    for ($col=1;$col<=10;$col++){
			                        for ($i=1;$i<=100;$i++){
			                            echo "<td class='col-white'><p>$i</p></td>";
			                        }
			                    }
			                echo "</tr>";
			        }
		 ?>
	 </table>
</div>

</body>
</html>