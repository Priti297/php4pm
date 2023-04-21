<?php
function ci()
{
    $p=50000;
    $r=3;
    $n=2;
    $t=1;
    $ci=$p * (pow((1+$r/100),$n));
    return $ci;
}
echo "<h2 align='center' style='color:blue'>"."compound interest is:".ci();

?>