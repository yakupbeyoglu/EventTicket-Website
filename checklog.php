<?php
include "connect.php";
$cooksecret=$_COOKIE['oli'] ?? '';
$check = $db->query("SELECT id FROM adminuser WHERE secret='".$db->real_escape_string($cooksecret)."'");
if($check->num_rows != 1){
    die();
}
else{
    $user_id=$check->fetch_assoc()['id'];
}

