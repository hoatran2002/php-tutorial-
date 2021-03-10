<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise1</title>
</head>
<body>
<form action="#" method="post">
    <label for="number ">Nhap so a: </label>
    <input  type="number" name="FNumber"placeholder="nhap so" required><br>
    <label for="number">Nhap so b: </label>
    <input type="number" name="LNumber"placeholder="nhap so" required><br>
    <button type="submit">Tong </button>
</form>
<?php
$FNum = $_POST["FNumber"];
$LNum = $_POST["LNumber"];
if ($FNum == $LNum) {
    echo(($FNum + $LNum) * 3);
} else {
    echo($FNum + $LNum);
}
?>
</body>
</html>