<html>
<body bgcolor="pink">
<center>
<a href="portal.html">LOG OUT</a>
<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$mail=$_POST["mail"];
$pass=$_POST["pass"];
$sql = "SELECT stu_id, stu_name, age, gender,year,address,food,date_of_birth,department, mail_id, password from student where mail_id='$mail'";
$result = $conn->query($sql);
// "hello";

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>AGE</th><th>Gender</th><th>Year</th><th>Address</th><th>food</th><th>date_of_birth</th><th>Department</th><th>Mail_id</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["stu_id"]."</td><td>".$row["stu_name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["year"]."</td><td>".$row["address"]."</td><td>".$row["food"]."</td><td>".$row["date_of_birth"]."</td><td>".$row["department"]."</td><td>".$row["mail_id"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<br><br>
<form action="fee.php" method="POST">
<input type="hidden" name="mail" value="<?php echo "$mail"?>">
<input type="submit" value="FEE">
</form>

<form action="stucomplaint.php" method="POST">
<input type="hidden" name="mail" value="<?php echo "$mail"?>">
<input type="submit" value="COMPLAINT">
</form>

<form action="connect.php" method="POST">
<input type="hidden" name="mail" value="<?php echo "$mail"?>">
<input type="hidden" name="pass" value="<?php echo "$pass"?>">


<input type="submit" value="BACK">
</form>
</center>

</body>
</html>