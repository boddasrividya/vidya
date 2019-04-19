<html>
<body>
<form method="POST">
<center>
<h1> update details </h1><br>
 faculty id : <input type="text" name="id" required/><br><br>
 from   : <input type="date" name="fro" required/><br><br>
 to     : <input type="date" name="tod" /><br><br>
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
			$from= $_POST['fro'];
			echo $from;
			$sql="select * from fdp where  id='".$facid."' and fro='".$from."'";
			$r=mysqli_query($con, $sql);
			$rowcount=mysqli_num_rows($r);
			echo $rowcount; 
			while($row=mysqli_fetch_row($r))

			{	
				echo "<center><br><br><form method=\"POST\" action=\"updated.php\" target=\"updated.php\"/>                                                       				
				faculty id : <input type=\"text\" name=\"id\" value=\"$row[0]\"/><br><br>
	     			name : <input type=\"text\" name=\"name\" value=\"$row[1]\"/><br><br>
				department : <input type=\"text\" name=\"dept\" value=\"$row[2]\"/><br><br>
	     			field : <input type=\"text\" name=\"field\" value=\"$row[3]\"/><br><br>
				achievement: <input type=\"text\" name=\"achi\" value=\"$row[4]\"/><br><br>
	    			from   : <input type=\"date\" name=\"fro\" value=\"$row[5]\" ><br><br>	
	    			to     : <input type=\"date\" name=\"tod\" value=\"$row[6]\"/><br><br>
	    			desc   :<input type =\"text\" name=\"descp\" value=\"$row[7]\"/><br><br>
				<input type=\"hidden\" value=\"$facid\" name=\"r1\"/>
				<input type=\"hidden\" value=\"$from\" name=\"r2\"/>
				<input type=\"submit\" value=\"update\" name=\"update\" /></form></center>";
				
			}
		}


}
?>