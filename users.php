<!DOCTYPE html>
<html>
<head>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">
<?php 
  include "checklog.php"; 
  ?>
<script>

</script>

</head>
<body>
  <?php 
  $qid=$db->query("SELECT username FROM adminuser WHERE id='$user_id'");
  $x=$qid->fetch_assoc()['username'];
  ?>
<div id="top">
<div class="header">
<a href="users.php"><img src="images/home.png" alt="Home"/></a>
</div>
<div class="button">
<a href="insertlocation.php"><img src="images/location.png"alt="insert"/></a>
<a href="addg.php"><img src="images/insertgroup.png"alt="insert"/></a>
<a href="insertconcert.php"><img src="images/insert.png"alt="insert"/></a>
<a href="edit.php"><img src="images/edit.png"alt="edit"/></a>
<a href="logout.php"><img src="images/logout.png"alt="Logout"/></a>

</div>
</div>

  <div class="concerts"> 
  
<?php 
 $result=$db->query("SELECT id,name,gname,type,location,date,price FROM concert");
 while($r =$result->fetch_assoc()){
   ?>
   <div class="card">
   <img src="images/ticket73.jpg" width="700x" height="300" class="resticket"/>
   <span class="tdate"><?php echo $r['date'];?></span>
  <p class="cename"><?php  echo $r['name']; ?></p>
  <p class="tplace"><?php echo $r['location']; ?></p>
  <span class="onprice"> <?php echo $r['price']." TL";?></span>

   </div>
   <?php } ?>
</div>



</body>






</html>