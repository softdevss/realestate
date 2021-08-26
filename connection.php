<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="RCY"; 


try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}


	$connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$connection){
		
	die("QUERY FAILED");
	
}else{



}
?>