<html>
<body bgcolor="pink">
<center>

<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$mid=$_POST["mail"];
$pwd=$_POST['pass'];
$query="select * from student where mail_id='$mid' and password='$pwd'";
$res=mysqli_query($conn,$query);
$result=mysqli_fetch_array($res);
if($result)
	echo("logged in succesfully");
else
{
	exit( "Invalid mailid or password");
}
    
?>
<br><br><br>
<form action="view1.php" method="POST">
<input type="hidden" name="mail" value="<?php echo "$mid"?>">
<input type="submit" value="VIEW">
</form>


<form action="complaint.php" method="POST">
<input type="hidden" name="mail" value="<?php echo "$mid"?>">
<input type="submit" value="COMPLAINT">
</form>

</center>
</body>
</html>