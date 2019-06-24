<?php 
include "connect.php";
$key=$_COOKIE['oli'] ??'';
$db->query("UPDATE adminuser SET secret=NULL WHERE secret ='".$db->real_escape_string($key)."'");
header("location:adminlogin.php");


?>