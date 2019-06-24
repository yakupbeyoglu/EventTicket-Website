<?php 
include "checklog.php";
$n = $db->real_escape_string($_POST['name']);
$typ =$db->real_escape_string($_POST['type']);
$db->query("INSERT INTO groub (name,type) values ('$n','$typ') "); 

header("location:addg.php");




