<?php  

$host="localhost";
$username="root";
$password="";
$database="codeacademy";

$connection=mysqli_connect($host,$username,$password,$database);

if ($connection) {
	echo "Ok";
}else{
	echo "Not connected";
}







?>