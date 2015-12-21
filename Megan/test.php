<?php

$host = "localhost";
$user = "user12";
$pass = "34klq*";
$db = "mydb";

// Connects to your Database
mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());


//mysql_query("CREATE TABLE friends (name VARCHAR(30), fav_color VARCHAR(30), fav_food VARCHAR(30), pet VARCHAR(30))");

//Print "Your table has been created\n";

//mysql_query("INSERT INTO friends VALUES ( 'Rose', 'Pink', 'Tacos', 'Cat' ), ( 'Bradley', 'Blue', 'Potatoes', 'Frog' ), ( 'Marie', 'Black', 'Popcorn', 'Dog' ), ( 'Ann', 'Orange', 'Soup', 'Cat' )");

//Print "Your table has been populated";


$data = mysql_query("SELECT * FROM friends WHERE pet='Cat'")  or die(mysql_error());
Print "<table border cellpadding=3>";
while($info = mysql_fetch_array( $data ))
{
    Print "<tr>";  Print "<th>Name:</th> <td>".$info['name'] . "</td> ";
    Print "<th>Color:</th> <td>".$info['fav_color'] . "</td> ";
    Print "<th>Food:</th> <td>".$info['fav_food'] . "</td> ";
    Print "<th>Pet:</th> <td>".$info['pet'] . " </td></tr>";
}
Print "</table>";

?>
