<body bgcolor="aqua">
<html>
<h1><center>COMPLAINT</center></h1>
<form action="stucompdata.php" method="POST">
<center>Student_id<br><br>
<input name="st_id" type="text" placeholder="enter your student id" required><br>
Date:<br><br>
<input name="date" type="date" placeholder="enter today's date" required><br>
Room_id:<br><br>
<input name="r_id" type="text" required><br>
Category:<br><br>
<input type="checkbox" name ="Category[]" value="circuit shortage">circuit shortage<br><br>
<input type="checkbox" name ="Category[]" value="Fan">Fan<br><br>
<input type="checkbox" name ="Category[]" value="Tubelight">Tubelight<br><br>
<input type="checkbox" name ="Category[]" value="Furniture">Furniture<br><br>
<input type="submit" value="ENTER">

</form>


</body>
</html>