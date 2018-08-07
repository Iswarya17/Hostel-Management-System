<html>
<body bgcolor="aqua">
<a href="portal.html">LOG OUT</a>
<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$mail=$_POST["mail"];

$sql = "SELECT stu_id,stu_name,fee,mail_id from hostel_fee where mail_id='$mail'";
$result = $conn->query($sql);
// "hello";


if ($result->num_rows > 0) {
    echo "<table><tr><th>Student_id</th><th>StuName</th><th>Fee</th><th>Email ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["stu_id"]."</td><td>".$row["stu_name"]."</td><td>".$row["fee"]."</td><td>".$row["mail_id"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>
<form action="connect.php" method="POST">
<input type="submit" value="BACK">
</form>
</body>
</html>
