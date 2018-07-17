<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$dbName="loginsystem";

/*@mysql_connect($mysql_host,$mysql_user,$mysql_password) or die('cannot connect to database');
@mysql_select_db('student');
echo 'connection suc212csssse2112ss';
*/
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$dbName);
