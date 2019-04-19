
<?php
echo "hi";
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "facach";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con) 
		{
			
				echo "db connected";	
				$dept = $_POST['dept'];
				echo $dept;
				$sql="select * from  fdt where dept='".$dept."'" ;
				$r=mysqli_query($con, $sql);
				$rowcount=mysqli_num_rows($r);
				if($rowcount==0)
				{
					echo "<h1><center>No Entries For Verfication</h1></center>";
					exit;
				}
				echo "<center><table border = 1>"; 
				echo "<tr>"; 
				echo "<th>Faculty id</th>"; 
				echo "<th>Name</th>"; 
				echo "<th>Dept</th>";
				echo "<th>Field</th>"; 
				echo "<th>Achievement</th>";
				echo "<th>From</th>";
				echo "<th>To</th>";
				echo" <th>Decsription</th>";
				echo" <th colspan=2>Verify</th>";
				echo "</tr>";
				while($row=mysqli_fetch_row($r))
			 		{ 
						echo "<tr>"; 
						echo "<form method =\"POST\" action=\"vi.php\" target=\"vi.php\">
						<td><input type=\"text\" value=\"$row[0]\" name=\"id\" readonly/ ></td>
						<td><input type=\"text\" value=\"$row[1]\" name=\"name\" readonly/ ></td>
						<td><input type=\"text\" value=\"$row[2]\" name=\"dept\" readonly/ ></td>
						<td><input type=\"text\" value=\"$row[3]\" name=\"field\" readonly/ ></td>		
						<td><input type=\"text\" value=\"$row[4]\" name=\"achi\" readonly/ ></td>
						<td><input type=\"text\" value=\"$row[5]\" name=\"fro\" readonly/ ></td>
						<td><input type=\"text\" value=\"$row[6]\" name=\"tod\" readonly/ ></td>
						<td><input type=\"text\" value=\"$row[7]\" name=\"descp\" readonly/ ></td>
						<td><input type=\"submit\" value=\"accept\" name=\"accept\"/></td>
						<td><input type=\"submit\" value=\"reject\" name=\"reject\"/></td>
						</tr></form> ";
				
 					}
			}
	
?>