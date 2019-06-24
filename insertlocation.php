<!DOCTYPE html>
<html>
<head>
<?php include "checklog.php"; ?>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">

<?php include "checklog.php" 
?>

<script>
    function $(id){
        return document.getElementById(id);

    }
    function check(){
        var a,b;
        a=0;
        var x= $("name").value;
        var y=$("location").value;
        var z=$("phone").value;

        if(x.length<3){
           a=1;
           b="name"
        }
        else if(y.length<3)
        {
            a=1;
            b="location";
        }
        else if(z.length<3)
        {
            a=1;
            b="phone";
        }
        if(a==1) window.alert("Enter Min 4 character Username");
            return false;
        {
            wind window.alert("Enter Min 4 character Username");
            return false;
            retu window.alert("Enter Min 4 character Username");
            return false;
        }
        return true;

    }

</script>
</head>
<body>

<div class="header">
<a href="users.php"><img src="images/home.png" alt="Home"/></a>
<div class="ticket">
<form action="add.php" method="POST">

<label for="name" class="tlabel"><strong>Name</strong></label><span class="setn"><input type="text" name="name" required="required" id="name"/></span><br/>
<label for="Location" class="tlabel"><strong>Location</strong></label><span class="setl"><input type="text" name="location" required="required" id="location"/></span><br/>
<label for="phone" class="tlabel"><strong>Contact No</strong></label><span class="setc"><input type="text" name="phone" required="required" id="phone"/></span><br/>

<span class="setb"><input type="submit" name="Login" value="ADD" onclick="return check()" id="sub"/></span>
</form>
</div>









</form>



</body>
</html>