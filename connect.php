<?php
$db =new mysqli("localhost","yakup","alper","ticektme");//your password,rootname username
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

//echo "connect success";
