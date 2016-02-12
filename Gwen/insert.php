<html>
<body>
 
<?php
$host = "localhost"; 
$user = "gwen"; 
$pass = "medvoice"; 
$db = "mydb"; 

$con = mysql_connect($host, $user, $pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($db, $con);
 
$sql="INSERT INTO nametable (username,firstname,lastname,gender,city,zipcode,email,month,day,year,password,confirm, discription)
VALUES
('$_POST[username]','$_POST[fname]','$_POST[lname]','$_POST[gender]', '$_POST[city]','$_POST[zipcode]','$_POST[email]','$_POST[month]','$_POST[day]','$_POST[year]','$_POST[pass]','$_POST[confirm]', '$_POST[discription]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Your profile has been updated";
 
mysql_close($con)
?>
</body>
</html>
 
 
