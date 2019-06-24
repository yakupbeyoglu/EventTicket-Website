<?php
include "checklog.php";

$iname=$db->real_escape_string($_POST['name']);
$ilocation=$db->real_escape_string($_POST['location']);
$iphone =$db->real_escape_string($_POST['phone']);
$db->query("INSERT INTO Place (name,location,phone) VALUES ('$iname','$ilocation','$iphone')");
    header("location:insertlocation.php");