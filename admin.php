<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="logstyle.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<?php
include("navbar.php");
?>
 <body>
     <section id="k">
<form action="login.php" method="post">
<div class="loginbox">
<h1>Login</h1>

<div class="textbox">

<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" name="name" placeholder="username" required="required">



</div>
<div class="textbox">

<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password"name="password" placeholder="password" required="required">


</div>

<td><input class="btn1" type="Submit"  name="login" value="Sign in"></td>


</div>
</form>
     </section>
    
</body>
</html>