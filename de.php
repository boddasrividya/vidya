<?php 
echo"hi";
$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "facach";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con) 
		{	$facid = $_POST['id'];
			$name = $_POST['name'];
			$dept = $_POST['dept'];
			$fie= $_POST['field'];
			$achi= $_POST['achi'];
			$fro= $_POST['fro'];
			$tod= $_POST['tod'];
			$des= $_POST['descp'];
			echo "hi";
			$sql =  "delete from fdt where  id='".$facid."' and fro='".$fro."'";
			mysqli_query($con, $sql);
			echo "<h1> <center>Accepted</center></h1>";
		}
?>