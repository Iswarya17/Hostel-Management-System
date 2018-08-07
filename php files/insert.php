<html>
<body bgcolor="pink">
<center>
<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$mid=$_POST["mail"];
$sid=$_POST['sid'];
$pwd1=$_POST['pass1'];
$pwd2=$_POST['pass2'];
$sname=$_POST['sname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$address=$_POST['address'];
$food=$_POST['food'];
$dob=$_POST['dob'];
$dep=$_POST['department'];
$rid=$_POST['rid'];
if($pwd1==$pwd2){
$query="insert into student(stu_name,stu_id,age,gender,year,address,food,date_of_birth,department,rc_id,mail_id,password) values('$sname','$sid','$age','$gender','$year','$address','$food','$dob','$dep','$rid','$mid','$pwd1')";
$res=mysqli_query($conn,$query);
$query1="insert into hostel_fee(stu_id,stu_name,fee,mail_id) values('$sid','$sname',19000,'$mid')";
$res=mysqli_query($conn,$query1);

$query2="insert into room(student_id) values('$sid')";
$res=mysqli_query($conn,$query2);

if($res)
	echo "Registered successfully!!";
else
echo("Error description: " . mysqli_error($conn));}
?>

<form action="portal.html" method="POST">
<input type="submit" value="BACK">
</form>
</center>
</body>
</html>
