<?php
   $dbhost = 'localhost';
   $dbuser = 'nitish';
   $dbpass = 'medvoice';
   $db = "navigator";
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT id, name, address, lat, lang FROM geolocation';
   mysql_select_db('navigator');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval)) {
       echo "ID :{$row['id']}  <br> ".
         "NAME : {$row['name']} <br> ".
         "Address : {$row['address']} <br>". 
		 "lat : {$row['lat']} <br> ".
		 "lang : {$row['lang']} <br> ".
         "--------------------------------<br>";

   }
   
   echo "Fetched data successfully\n";
   
   
   mysql_close($conn);
?>