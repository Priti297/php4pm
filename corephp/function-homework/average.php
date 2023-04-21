<?php
function avg($math,$che,$com,$phy,$hin)
{
    $avg=($math+$che+$com+$phy+$hin)/5;
    return $avg;
}
echo "<h2 align='center' style='color:green'>"."average of  5 subject marks is:".avg(85,97,99,65,78);
?>