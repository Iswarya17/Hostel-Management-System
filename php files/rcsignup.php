<html >
<body bgcolor="aqua">
<h3><center>RC REGISTRATION</center></h3>
<form action="rcinsert.php" method="POST">
<center>
RC_id:<br><br>
<input name="rid" type="text" placeholder="enter id" required><br>
RC_name:<br><br>
<input name="rname" type="text" placeholder="enter your name" required><br>
Block_name:<br><br>
<input name="blockname" type="text" placeholder="enter your block name" required><br>
Block_id:<br><br>
<input name="blockid" type="text" placeholder="enter your block id" required><br>
Gender:<br>
<input type = "radio" name = "gender" value="male" >male<br>
<input type = "radio" name = "gender"  value="female">female<br><br>
Age:<br><br>
<input name="age" type="text" placeholder="enter your age" required><br>
Password:<br><br>
<input name="pass1" type="password" required><br>
Reenter Password:<br><br>
<input name="pass2" type="password" required><br>
<input type="submit" value="Login">
</form>
<br><br><br>
<form action="portal.html" method="POST">
<input type="submit" value="BACK">
</form>
</center>

</body>
</html>