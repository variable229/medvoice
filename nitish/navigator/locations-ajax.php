<?php
  include 'config.php';

$host = "localhost"; 
$user = "nitish"; 
$pass = "medvoice"; 
$db = "gps"; 

// Connects to your Database  
mysql_connect($host, $user, $pass) or die(mysql_error());  
mysql_select_db($db) or die(mysql_error());
    
 mysql_query("INSERT INTO `gps`(`id`, `lat`, `lang`) VALUES ('','mylat','mylong')");
    
//Print "Your table has been populated";


$data = mysql_query("SELECT * FROM gps ")  or die(mysql_error());  
Print "<table border cellpadding=3>";  
while($info = mysql_fetch_array( $data ))  
{  
    Print "<tr>";  Print "<th>id:</th> <td>".$info['id'] . "</td> ";   
    Print "<th>lat:</th> <td>".$info['lat'] . "</td> ";  
    Print "<th>lang:</th> <td>".$info['lang'] . " </td></tr>";  
}  
Print "</table>"; 

?>


