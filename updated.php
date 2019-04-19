<?php
echo"hi";
	echo"hi";

	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "facach";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con) 
		{	$hi=$_POST['r1'];
			$hlo=$_POST['r2'];				
			$facid = $_POST['id'];
			$name = $_POST['name'];
			$dept = $_POST['dept'];
			$fie= $_POST['field'];
			$achi= $_POST['achi'];
			$fro= $_POST['fro'];
			$tod= $_POST['tod'];
			$des= $_POST['descp'];
			$sql="update  fdp set id='".$facid."',name='".$name."',dept='".$dept."',field='".$fie."'
			,achi='".$achi."',fro='".$fro."',tod='".$tod."',descp='".$des."'
			where id='".$hi."' and fro='".$hlo."' ";
			$r=mysqli_query($con, $sql);  
			echo $r;
			echo"<center><h3>Sucessfully Updated as</h3>
			<h3>Faculty id :$facid<br>
			    Name       :$name<br>
			    Department :$dept<br>
			    Field      :$fie<br>
			    Achievement:$achi<br>
			    From       :$fro<br>
			    To         :$tod<br>
			    Description:$des<br></h3>";
			echo" <h3><center>To Update Another Entry<a href=\"update.php\">Click Here</a><br>
				To View The Updated Result <a href=\"view.php\">Click Here</a></center></h3>";
			 
			
		}
?>