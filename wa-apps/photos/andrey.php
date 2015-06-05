<?php 
$sec = $_SERVER["HTTPS"];
if( $sec != "" && $sec != "off" ) $sec = "https://";
else $sec = "http://";

echo "<h1>Webasyst: test time on " . $sec . $_SERVER["SERVER_NAME"] . "</h1>";

date_default_timezone_set('Europe/Moscow'); 

echo "<h4>gmdate " . gmdate('D, d M Y H:i:s T', time()) . "</h4>";
echo "<h4>date " . date('D, d M Y H:i:s T', time()) . "</h4>";

echo "<h4>best for header " . gmdate('D, d M Y H:i:s \G\M\T', time()) . "</h4>";

echo "<h4>UTC timestamp: " . gmdate("Y-m-d\TH:i:s\.000\Z") . "</h4>";

echo "Next year " . date("Y-m-d H:i:s", mktime(0, 0, 0, date("m") + 12, date("d"), date("Y")));

echo "REMOTE_ADDR " . $_SERVER['REMOTE_ADDR'];
if( isset($_SERVER['HTTP_X_FORWARDED_FOR']) ) echo ", for " . $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "<br>";

phpinfo(); 
?>