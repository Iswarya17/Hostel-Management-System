<html>
<body bgcolor ="aqua">
<center>
<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$rid=$_POST["rid"];
$pwd1=$_POST['pass1'];
$pwd2=$_POST['pass2'];
$rcname=$_POST['rname'];
$blockname=$_POST['blockname'];
$blockid=$_POST['blockid'];
$gender=$_POST['gender'];
$age=$_POST['age'];
if($pwd1==$pwd2){
$query="insert into RC(RC_id,RC_name,Block_name,Block_id,Gender,age,password) values('$rid','$rcname','$blockname','$blockid','$gender','$age','$pwd1')";
$res=mysqli_query($conn,$query);
if($res)
	echo "Registered successfully";
else
echo("Error description: " . mysqli_error($conn));}
?>


<form action="portal.html" method="POST">
<input type="submit" value="BACK">
</form>
</center>
</body>
</html>
