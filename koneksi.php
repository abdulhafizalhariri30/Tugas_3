<?php
$user="root";
$server="localhost";
$password="";
$database="semester3";
$rumah=mysqli_connect($server,$user,$password);
if($rumah){
	echo 'rumah berhasil terhubung';
}else{
	echo 'cek lagi!!';
}
$db=mysqli_select_db($rumah,$database);
if ($db){
	echo 'db berhasil terhubung';
}else{
	echo 'cek lagi!!';
}


?>