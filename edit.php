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
<div class="header">
<a href="users.php"><img src="images/home.png" alt="Home"/></a>
</div>

<table class="hold">
      <tr>
        <th>Event Name</th>
        <th>Group Name</th>
        <th>Type</th>
        <th>Location</th>
        <th>Date</th>
        <th>Action</th>
</tr>
  <?php  
   $result=$db->query("SELECT id,name,gname,type,location,date FROM concert");
    while($r =$result->fetch_assoc()){
    ?>
    <tr>
      <td><?= $r['name']?></td>
      <td><?= $r['gname']?></td>
      <td><?= $r['type']?></td>
      <td><?= $r['location']?></td>
      <td><?= $r['date']?></td>
      <td><a href="updateconcert.php?edit=<?php echo $r['id'];?>" class="action">
      <img src="images/update.png"width="100px" height="40px"/>
    </a>
    <a href="delete-user.php?delete=<?php echo $r['id'];?>" class="action">
    <img src="images/delete.png"width="100px" height="40px"/></a>
    </td>
    </tr>

<?php
  }
  ?>
  </table>
 


</body>






</html>