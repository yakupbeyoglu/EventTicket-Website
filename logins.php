<?php
include "connect.php";
$q = $db->query("SELECT id FROM adminuser WHERE username='".
$db->real_escape_string($_POST['username'])
."' AND password='".md5($db->real_escape_string(
$_POST['pass']))
."'"
);
if($q->num_rows!=1){
echo $db->error;
header("location:adminlogin.php");
}
else{
   $secret=md5(mt_rand(0,10000)."xyqlioqhgfdgfkl");
    $id=(int)$q->fetch_assoc()['id'];
    $db->query("UPDATE adminuser SET secret='$secret' WHERE id='$id'");
    setcookie("oli",$secret);
    header("location:users.php");
}

