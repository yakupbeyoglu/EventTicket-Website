<!DOCTYPE html>
<html>
<head>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">

<?php include "checklog.php"; 
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
<?php $id=$db->real_escape_string($_GET['edit']);
?>
<div class="header">
<a href="users.php"><img src="images/home.png" alt="Home"/></a>
<div class="ticket3">
<form action="updatedata.php?set=<?php echo "$id"?>" method="POST">

<label for="date" class="tlabel"><strong>Date</strong></label><span class="setda"><input type="date" name="date" required="required" id="date"/></span><br/>
<span class="setb"><input type="submit" name="Login" value="UPDATE" onclick="return check()" id="sub"/></span>
</form>
</div>





</body>
</html>