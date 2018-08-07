<html>
<body bgcolor="pink">
<center>
<a href="portal.html">LOG OUT</a>
<?php 
$conn=mysqli_connect("localhost","root","","dbms_project") or die("error");
$id=$_POST["id"];
$pwd=$_POST["pwd"];
$sql = "SELECT RC_id, RC_name, Block_name,gender,age from RC where RC_id='$id'";
$result = $conn->query($sql);
// "hello";

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Blockname</th><th>Gender</th><th>Age</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["RC_id"]."</td><td>".$row["RC_name"]."</td><td>".$row["Block_name"]."</td><td>".$row["gender"]."</td><td>".$row["age"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


<br><br>


<form action="rclogin.php" method="POST">
<input type="submit" value="BACK">
<input type="hidden" name="id" value="<?php echo "$id"?>">

<input type="hidden" name="pass" value="<?php echo "$pwd"?>">
</form>
</center>
</body>
</html>