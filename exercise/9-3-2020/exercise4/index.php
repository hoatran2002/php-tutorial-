 <?php
    $sum1 = 0;
    $sum2 = 0;
    $a = 1;
    while ($a < 100) {
        if ($a == 50) {
            break;
        }
        $sum1 += $a;
        $sum2 += pow($i, 2);
        $a++;
    }
    echo "tổng các số là: $sum1 <br>";
    echo "tổng các số bình phương là: $sum2";
    ?>