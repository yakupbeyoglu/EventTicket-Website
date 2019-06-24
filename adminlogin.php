 <!DOCTYPE html>
 <html>
<head>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">
<script>
    function $(id){
        return document.getElementById(id);

    }
    function check(){
        var x= $("username").value;

        if(x.length<3){
            window.alert("Enter Min 4 character Username");
            return false;
        }
        return true;

    }
</script>

</head>
<body>
<h1 id="topic">LOGIN</h1>

<form action="logins.php" method="POST">
<div class="container">
<label for="username"><strong>Username</strong></label> <input type="text" name="username" id="username" required="required"/><br/>
<label for="password"><strong>Password</strong></label> <input type="password" name="pass" id="password"required="required"/><br/>
<input type="submit" name="Login" value="LOGIN" onclick="return check()" id="sub"/>
</div>
</form>
</body>



 
 </html>
