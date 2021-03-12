<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise1</title>
    <link rel="stypesheet"href="style.css">
</head>
<<body>
<div class="container">
    <table class="table">
        <?php for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $col + $row;
                if ($total % 2 == 0) {
                    echo "<td class='col-white'></td>";
                } else {
                    echo "<td class='col-black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>