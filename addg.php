<!DOCTYPE html>
<html>
<head>
<?php 
  include "checklog.php"; 
  ?>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">

<script>
function $(id){
return document.getElementById(id);
}
function check(){
var x=$("name").value;
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

}

</script>
</head>
<body>

<div class="header">
<a href="users.php"><img src="images/home.png" alt="Home"/></a>
<div class="ticket">
<form action="addgroup.php" method="POST">

<label for="name" class="tlabel"><strong>Name</strong></label><span class="setn"><input type="text" name="name" required="required" id="name"/></span><br/>
<label for="type" class="tlabel"><strong>Type </strong></label><span class="setn"><input type="text" name="type" required="required" id="type"/></span><br/>
<span class="setb"><input type="submit" name="Login" value="ADD" onclick="return check()" id="sub"/></span>
</form>
</div>



</body>
</html>