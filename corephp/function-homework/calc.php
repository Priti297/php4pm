<?php
function add($a,$b)
{
    $c=$a+$b;
    echo "<h2 style='color:blue'>"."Addition is:".$c;
}
function mul($a,$b)
{
    $c=$a*$b;
    echo "<h2 style='color:red'>","Multiplication is:".$c;
}
function sub($a,$b)
{
    $c=$a-$b;
    echo "<h2 style='color:green'>","Subtraction is:".$c;
}
function div($a,$b)
{
    $c=$a/$b;
    echo "<h2 style='color:gray'>","Division  is:".$c;
}
add(12,13);
mul(10,23);
sub(100,50);
div(50,4);
?>