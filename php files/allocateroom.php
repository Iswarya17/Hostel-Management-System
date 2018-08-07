<html>
<body bgcolor="pink">
<form method="post" action="update.php">
<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");

$id=$_POST["id"];
$pwd=$_POST["pass"];
$sql = "SELECT stu_id from student where room_no=0 and rc_id='$id'";
$result = $conn->query($sql);
// "hello";

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>ROOM NO</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["stu_id"]."<td><input type='number' name='rno'><input type='hidden' name='sid' value=".$row['stu_id']."></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>
<br><br>
<input type='submit' value='UPDATE'>
</form>
<form action="rclogin.php" method="POST">
<input type="hidden" name="id" value="<?php echo "$id"?>">

<input type="hidden" name="pass" value="<?php echo "$pwd"?>">
<input type="submit" value="BACK">
</form>


</body>
</html>