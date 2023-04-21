<?php
date_default_timezone_set("Asia/Calcutta");
$time=date("h:i:s a");
echo "<h1>"."Current time of system is: ".$time;
$time=date("H:i:s a");
echo "<h1>"."Current time of system is: ".$time;

/*date_default_timezone_set("Asia/Calcutta");
// $currenttime=date("H:i:s a"); // 24 hrs
// echo "The current time of systems is :".$currenttime."<br>";
$currenttime=date("h:i:s a"); //12 hrs
echo "The current time of systems is :".$currenttime."<br>";
*/
?>