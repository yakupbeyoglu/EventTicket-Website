<?php
include"checklog.php";
$idate=$db->real_escape_string(($_POST['date']));
$gid=$db->real_escape_string(($_GET['set']));
$db->query("UPDATE concert SET date='$idate' WHERE id='$gid'");
header("location:users.php");
