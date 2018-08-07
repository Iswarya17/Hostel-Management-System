<html>
<body bgcolor="aqua">
<center>
<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$rid=$_POST["id"];
$pwd=$_POST["pass"];
$query="select * from RC where RC_id='$rid' and password='$pwd'";
$res=mysqli_query($conn,$query);
$result=mysqli_fetch_array($res);
if($result)
	echo("logged in succesfully");
else
	echo "Invalid mailid or password";
?>

<br><br><br>
<form action="rcview.php" method="POST">
<input type="hidden" name="id" value="<?php echo "$rid"?>">

<input type="hidden" name="pwd" value="<?php echo "$pwd"?>">
<input type="submit" value="VIEW PERSONAL DETAILS">
</form>

<form action="allocateroom.php" method="POST">
<input type="hidden" name="id" value="<?php echo "$rid"?>">
<input type="hidden" name="pass" value="<?php echo "$pwd"?>">

<input type="submit" value="ALLOCATE ROOM">
</form>
<br><br>
<form action="rc_compview.php" method="POST">
<input type="hidden" name="id" value="<?php echo "$rid"?>">
<input type="hidden" name="pass" value="<?php echo "$pwd"?>">

<input type="submit" value="COMPLAINT">
</form>
<form action="portal.html" method="POST">
<input type="submit" value="BACK">
</form>
</center>
</body>
</html>
