<?php
function square($a)
{
    echo "<h2 style='color:red'>"."square of 2 is: ".pow($a,2)."<br>";
}
function cube($a)
{
    echo "<h2 style='color:blue'>"."cube of 2 is: ".pow($a,3);
}
square(2);
cube(2);
?>