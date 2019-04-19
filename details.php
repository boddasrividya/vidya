<html>
<body>
<form method="POST">
<center>
<h1> Faculty Achievement Details </h1><br>
 faculty id : <input type="text" name="id" required/><br><br>
	      name : <input type="text" name="name"/><br><br>
	department : <input type="text" name="dept"/><br><br>
	     field : <input type="text" name="field"/><br><br>
	achievement: <input type="text" name="achi"/><br><br>
	    from   : <input type="date" name="from" required/><br><br>
	    to     : <input type="date" name="to" required/><br><br>
	    desc   :<input type ="text" name="descp"/><br><br>
<input type="submit" value="submit" name="submit"/>
</center>
</form>
</body>
</html>
<?php
echo "hi";
if(isset($_POST['submit']))
{
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "facach";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con) 
		{
			echo "db connected";
			$facid = $_POST['id'];
			$name = $_POST['name'];
			$dept = $_POST['dept'];
			$fie= $_POST['field'];
			$achi= $_POST['achi'];
			$from= $_POST['from'];
			$to= $_POST['to'];
			$des= $_POST['descp'];
			$sql="insert into fdt values('$facid ','$name','$dept','$fie','$achi','$from','$to','$des')";
 			mysqli_query($con, $sql);
 			echo "<center><h3>Successfully sent for verification.<br> Submit Hardcopy To Your HOD.....</h3></center><br>";
			echo"<center><h3>To View Your Colleague Achievements <a href=\"view.php\">Click Here</a></h3></center>";
		}


}
?>