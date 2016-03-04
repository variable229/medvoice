<?php
  include 'config.php';

$host = "localhost"; 
$user = "nitish"; 
$pass = "medvoice"; 
$db = "navigator"; 

// Connects to your Database  
mysql_connect($host, $user, $pass) or die(mysql_error());  
mysql_select_db($db) or die(mysql_error());
    
//mysql_query("INSERT INTO `geolocation`(`name`, `address`, `lat`, `lang`) VALUES ('nitish','54 medvoice','123.035354','-123.123456')");
    
//Print "Your table has been populated";


$data = mysql_query("SELECT * FROM geolocation ")  or die(mysql_error());  
Print "<table border cellpadding=3>";  
while($info = mysql_fetch_array( $data ))  
{  
    Print "<tr>";  Print "<th>id:</th> <td>".$info['id'] . "</td> ";  
    Print "<th>name:</th> <td>".$info['name'] . "</td> ";  
    Print "<th>address:</th> <td>".$info['address'] . "</td> ";  
    Print "<th>lat:</th> <td>".$info['lat'] . "</td> ";  
    Print "<th>lang:</th> <td>".$info['lang'] . " </td></tr>";  
}  
Print "</table>"; 

?>