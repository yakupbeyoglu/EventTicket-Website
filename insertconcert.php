<!DOCTYPE html>
<html>
<head>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">

<?php include "checklog.php" 
?>

<script>
function $(id){
return document.getElementById(id);

}
function check(){
var x=$("event").value;
var y=$("type").value;
var a,b=0;
if(x.length<3){
 b=1;
 a="name";
}
else if (y.length<3){
    b=1;
    a="Type";
}
if(b==1)
{   window.alert("Invalid "+a);
    return false;
}
else{
return true;
}
</script>
</head>
<body>

<div class="header">
<a href="users.php"><img src="images/home.png" alt="Home"/></a>
<div class="ticket2">
<form action="addconcert.php" method="POST">

<label for="event" class="tlabel"><strong>Event</strong></label><span class="eset"><input type="text" name="event" required="required" id="name"/></span><br/>
<label for="type" class="tlabel"><strong>Type </strong></label><span class="setn"><input type="text" name="type" required="required" id="type"/></span><br/>
<label for="date" class="tlabel"><strong>Date</strong></label><span class="setda"><input type="date" name="date" required="required" id="date"/></span><br/>
<label for="price" class="tlabel"><strong>PRICE</strong></label><span class="price"><input type="text" name="price" required="required" id="price" class="price"/></span>
<label for="noticket" class="tlabel"><strong>Quantity </strong></label><span class="noticket"><input type="text" name="noticket" required="required" id="noticket"/></span><br/>
<label for="group" class="tlabel"><strong>Group</strong></label><span class="setgr"><select name="group" class="select"></span>
<?php
$group=$db->query("SELECT name FROM groub");
while($g=$group->fetch_assoc())
{?>
<option value="<?php echo $g['name']?>"><?php echo $g['name']?></option>
<?php } ?>
</select><br/>


<label for="location" class="tlabel"><strong>Location</strong></label><span class="setlo"><select name="location" class="select"></span>
<?php
$location=$db->query("SELECT name FROM Place");
while($l=$location->fetch_assoc()['name'])
{ ?>
<option value="<?php echo $l ?>"> <?php echo $l ?> </option>
<?php } ?>
</select>



<span class="setb"><input type="submit" name="Login" value="ADD" onclick="return check()" id="sub"/></span>
</form>
</div>




</body>
</html>