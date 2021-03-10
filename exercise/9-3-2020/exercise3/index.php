 <?php
    $sum = 0;
    $a = 1;
    while ($a <= 100) {
        $sum += $a ;
        $a ++;
    }
    echo "tổng từ 1 đến 100: $sum <br>";
    echo "số chia hết cho 3 trong khoảng 20-50 <br>";
    $b = 20;
    while ($b <= 50) {
        if ($b % 3 == 0) {
            echo "$b <br>";
        }
        $b++;
    }