 <? php
    $ arr = array ( 1,3,5,7,9,12,15 );
    $ max = $ arr [ 0 ];
    $ min = $ arr [ 0 ];
    $ sum = 0 ;
    for ( $ i = 1 ; $ i < count ( $ arr ); $ i ++) {
        nếu ( $ arr [ $ i ]> $ max ) {
            $ max = $ arr [ $ i ];
        } elseif ( $ arr [ $ i ] < $ min ) {
            $ min = $ arr [ $ i ];
        }
        $ sum + = $ arr [ $ i ];
    }
    echo  "max: $ max <br>" ;
    echo  "min: $ min <br>" ;
    echo  "trung bình:" . ( $ sum / count ( $ arr )). "<br>" ;
    ?>