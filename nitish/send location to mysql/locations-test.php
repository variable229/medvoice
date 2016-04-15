<?php

// connecting to mysql		
mysql_connect("localhost", "nitish", "medvoice") or die(mysql_error());
 echo "Connected to MySQL<br />";
mysql_select_db("navigator") or die(mysql_error());
 echo "Connected to Database <br>";

 // Fetching data from test.html
  $lat = @$_POST['lat'];
  $lang = @$_POST['lang']; 
  
 
  mysql_query("INSERT INTO `geolocation`(`id`, `lat`, `lang`) VALUES ('id','$lat','$lang')");
    
  Print "Your table has been populated";


$data = mysql_query("SELECT * FROM geolocation ")  or die(mysql_error());  
Print "<table border cellpadding=3>";  
while($info = mysql_fetch_array( $data ))  
{  
    Print "<tr>";  Print "<th>id:</th> <td>".$info['id'] . "</td> ";  
    Print "<th>lat:</th> <td>".$info['lat'] . "</td> ";  
    Print "<th>lang:</th> <td>".$info['lang'] . " </td></tr>";  
}  
Print "</table>";
 

?>