<?php
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
		if(isset($_POST["accept"]))
			{
				$q =  "insert into fdp values('$facid ','$name','$dept','$fie','$achi','$fro','$tod','$des')";
				mysqli_query($con, $q);
				echo "<center><h1>Updation Sucessfull<br><br> The updated Data is </h1><br><br>
				<form method=\"POST\" action=\"de.php\" target=\"de.php\"/>                                                       				
				faculty id : <input type=\"text\" name=\"id\" value=\"$facid\" readonly/><br><br>
	     			name : <input type=\"text\" name=\"name\" value=\"$name\" readonly/><br><br>
				department : <input type=\"text\" name=\"dept\" value=\"$dept\" readonly/><br><br>
	     			field : <input type=\"text\" name=\"field\" value=\"$fie\" readonly/><br><br>
				achievement: <input type=\"text\" name=\"achi\" value=\"$achi\" readonly/><br><br>
	    			from   : <input type=\"date\" name=\"fro\" value=\"$fro\"readonly ><br><br>	
	    			to     : <input type=\"date\" name=\"tod\" value=\"$tod\" readonly/><br><br>
	    			desc   :<input type =\"text\" name=\"descp\" value=\"$des\"readonly/><br><br>
				<input type=\"submit\" value=\"ok\"/></form></center>";
			}	
		else if(isset($_POST["reject"]))
			{
    				$q =  "delete from fdt where id='".$facid."' and fro='".$fro."'";
				mysqli_query($con, $q);
				echo  "<h1>Rejected</h1>";
			}
	}

?>
