<html>
<body bgcolor="pink">

<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$sid=$_POST['sid'];
$rno=$_POST['rno'];
$sql = "update room set room_no='$rno' where student_id='$sid'";
$result = $conn->query($sql);

$sql1 = "update student set room_no='$rno' where stu_id='$sid'";
$result = $conn->query($sql1);
if ($result)
{
  echo "<p>Record Updated<p>";
  
}
else
{
  echo "Problem updating record. MySQL Error: ";
}

?>
</body>
</html>