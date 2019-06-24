<?php
include "checklog.php";
if(isset($_GET['delete'])){
    $id=$db->real_escape_string($_GET['delete']);
    $db->query("DELETE FROM concert WHERE id='$id'");
    header("location:users.php");
}