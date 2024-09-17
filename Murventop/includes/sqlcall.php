<?php
$host = "localhost";
$dbusername = "murvetop_wp300";
$dbpassword = "V6L42aD3";
$dbname = "murvetop_republica";
   $db_link = mysqli_connect($host, $dbusername, $dbpassword)
      or die("Could not connect ");
    mysqli_select_db($db_link,$dbname)
      or die("Could not select database ");
      

?>