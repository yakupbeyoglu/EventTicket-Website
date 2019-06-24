<?php 
include"checklog.php";
$ename=$db->real_escape_string($_POST['event']);
$itype=$db->real_escape_string($_POST['type']);
$idate=($_POST['date']);
$group=$db->real_escape_string($_POST['group']);
$loc=$db->real_escape_string($_POST['location']);
$price=$db->real_escape_string($_POST['price']);
$quant=$db->real_escape_string($_POST['noticket']);
$last=$db->query("SELECT id FROM concert ORDER BY id DESC");
$x=(int)$last->fetch_assoc()['id'];
$x++;
$db->query("INSERT INTO concert (id,name,type,date,gname,location,price,ticketnumber) VALUES ('$x','$ename','$itype','$idate','$group','$loc','$price','$quant')");
header("location:insertconcert.php");
