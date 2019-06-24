<?php
include "checklog.php";
$name=$db->real_escape_string($_POST['name']);
$location=$db->real_escape_string($_POST['location']);
$phone=$db->real_esccape_string($_POST['phone']);
header("location:insertlocation.php");

