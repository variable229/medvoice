<?php
$host = "localhost"; 
$user = "gwen"; 
$pass = "medvoice"; 
$db = "mydb"; 

$con=mysql_connect("$host", "$user", "$pass")or die("cannot connect"); 
mysql_select_db("$db")or die("cannot select DB");
$sql = "select * from nametable";
$result = mysql_query($sql);
$json = array();
if(mysql_num_rows($result)){
while($row=mysql_fetch_row($result)){
$json['nametable'][]=$row;
}
}
mysql_close($db);
echo json_encode($json); 
 
?>
