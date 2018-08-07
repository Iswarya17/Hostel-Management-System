<html>
<body bgcolor="pink">
<center>
<?php
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$stid=$_POST["st_id"];
$dat=$_POST["date"];
$rrid=$_POST["r_id"];
$checkBox = implode(',', $_POST['Category']);
$query="insert into complaint(student_id,Date,Room_id,Category) values ('$stid','$dat','$rrid','$checkBox')";
$res=mysqli_query($conn,$query);

if($res)
	echo "Your Complaint has been accepted!!";
else
	echo("Error description:".mysqli_error($conn));
?>

<form action="stucomplaint.php" method="POST">
<input type="submit" value="BACK">
</form>

</center>
</body>
</html>