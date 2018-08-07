<html>
<body bgcolor="pink">

<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");

$id=$_POST["id"];
$pwd=$_POST["pass"];

$sql = "Select student_id,room_id,date,category from complaint";
$result = $conn->query($sql);
// "hello";

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Room No.</th><th>Date</th><th>Category</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["student_id"]."</td><td>".$row["room_id"]."</td><td>".$row["date"]."</td><td>".$row["category"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


<form action="rclogin.php" method="POST">
<input type="submit" value="BACK">
<input type="hidden" name="id" value="<?php echo "$id"?>">

<input type="hidden" name="pass" value="<?php echo "$pwd"?>">
</form>

<form action="rc_compview.php" method="POST">
<input type="hidden" name="mail" value="<?php echo "$mid"?>">
<input type="hidden" name="pass" value="<?php echo "$pwd"?>">
</form>

</body>
</html>