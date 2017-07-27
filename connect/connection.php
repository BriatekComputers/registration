<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "83212425cs";
$dbname = "mautech_db";
@mysql_connect($dbhost, $dbuser, $dbpass) or die (mysql_error());
@mysql_select_db($dbname);


?>