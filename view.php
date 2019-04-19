<html>
<body>
<form method="POST">
<center>
<h1> VIEW FACULTY ACHIEVEMENTS </h1><br>
<pre>
 	SEARCH FACULTY  ACHIEVEMENTS DETAILS BY THEIR ID OR NAME.
</PRE>
 faculty id : <input type="text" name="id"/><br><br>
 name : <input type="text" name="name"/><br><br>
 dept : <input type="text" name="dept"/><br><br>
 from : <input type="text" name="fro"/><br><br>
 field: <input type="text" name="fi"/><br><br>
 achievement:<input type="text" name="ai"/><br><br>
 <input type="submit" value="submit" name="submit"/>
</center>
</form>
</body>
</html>
<?php
echo "hi";
if(isset($_POST['submit']))
{

	if(empty($_POST['name']) && empty($_POST['id'])&& empty($_POST['dept']) && empty($_POST['fro']) && empty($_POST['fi']) && empty($_POST['ai']) )
		 	{  
				echo"<center><h1> Enter The Req Fields</h1></center>";
  				exit;
			}
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "facach";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con) 
		{	
			$id=$_POST['id'];
			echo "hi".$id;
			echo "db connected";
			echo "<br>";
			if(!empty($_POST['id']))
			{
				if(!empty($_POST['fro']) && !empty($_POST['fi']) && !empty($_POST['ai']))
				{
					$fro=$_POST['fro'];
					$fi=$_POST['fi'];	
					$facid = $_POST['id'];
					$ai=$_POST['ai'];
					$sql="select * from  fdp where id='".$facid."' and fro='".$fro."' and achi='".$ai."' and field= '".$fi."'" ;
				}
				else if(!empty($_POST['fro']) && !empty($_POST['fi']))
				{
					
					$facid = $_POST['id'];
					$fro=$_POST['fro'];
					$fi=$_POST['fi'];
				   	$sql="select * from  fdp where id='".$facid."' and fro='".$fro."' and field='".$fi."'";
				}
				else if(!empty($_POST['fro']) && !empty($_POST['ai']))
				{
					$facid = $_POST['id'];
					$fro=$_POST['fro'];
					$ai=$_POST['ai'];
				   	$sql="select * from  fdp where id='".$facid."' and fro='".$fro."' and achi='".$ai."'" ;
				}
				else if(!empty($_POST['fi']) && !empty($_POST['ai']))                                                                                                                                          
				{
					
					$facid = $_POST['id'];
					$fi=$_POST['fi'];
					$ai=$_POST['ai'];
				   	$sql="select * from  fdp where id='".$facid."' and field='".$fi."' and achi='".$ai."'" ;
				}
				
				else if(!empty($_POST['fro']))
				{
					$facid = $_POST['id'];
					$fro=$_POST['fro'];
					$sql="select * from  fdp where id='".$facid."' and fro='".$fro."'" ;
				}				
	                        else if(!empty($_POST['ai']))
				{
					$facid = $_POST['id'];
					$ai=$_POST['ai'];
					$sql="select * from  fdp where id='".$facid."' and achi='".$ai."'" ;
				}
				else if(!empty($_POST['fi']))
				{
					$facid = $_POST['id'];
					$fi=$_POST['fi'];
					$sql="select * from  fdp where id='".$facid."' and field='".$fi."'" ;
				}
				else
				{
                                	$facid = $_POST['id'];
					$sql="select * from  fdp where id='".$facid."'";
				}
			}
			elseif(!empty($_POST['name']))
			{
					if(!empty($_POST['dept']) && !empty($_POST['fro']) && !empty($_POST['fi']) && !empty($_POST['ai']))
					{	
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$fi=$_POST['fi'];
  						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and fro='".$fro."'and field='".$fi."' and achi='".$ai."'" ;
					}
					else if(!empty($_POST['dept']) && !empty($_POST['fro']) && !empty($_POST['fi']))
					{
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$fi=$_POST['fi'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and fro='".$fro."' and field='".$fi."'" ;
					}
					else if(!empty($_POST['dept']) && !empty($_POST['fro']) && !empty($_POST['ai']))
					{
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['dept']) && !empty($_POST['fi']) && !empty($_POST['ai']))
					{
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and field='".$fi."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['fro']) && !empty($_POST['ai']))
					{
						$name=$_POST['name'];
						$fi=$_POST['fi'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."' and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['fro']))
					{
						$name=$_POST['name'];
						$fi=$_POST['fi'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."' and fro='".$fro."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['ai']))
					{
						$name=$_POST['name'];
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['ai']) && !empty($_POST['fro']))
					{
						$name=$_POST['name'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."'and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['dept']) && !empty($_POST['fro']))
					{
						$name=$_POST['name'];
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."' and fro='".$fro."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['dept']))
					{
						$name=$_POST['name'];
						$fi=$_POST['fi'];
						$dept=$_POST['dept'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."' and dept='".$dept."'" ;				
					}
					else if(!empty($_POST['ai']) && !empty($_POST['dept']))
					{
						$name=$_POST['name'];
						$ai=$_POST['ai'];
						$dept=$_POST['dept'];
						$sql="select * from  fdp where name='".$name."' and achi='".$ai."' and dept='".$dept."'" ;				
					}
					else if(!empty($_POST['fro']))
					{
						$name = $_POST['name'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where name='".$name."' and fro='".$fro."'" ;
					}				
	                      	 	 else if(!empty($_POST['ai']))
					{
						$name = $_POST['name'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where name='".$name."' and achi='".$ai."'" ;
					}
					else if(!empty($_POST['fi']))
					{
						$name = $_POST['name'];
						$fi=$_POST['fi'];
						$sql="select * from  fdp where name='".$name."' and field='".$fi."'" ;
					}
					else if(!empty($_POST['dept']))
					{
						$name = $_POST['name'];
						$dept=$_POST['dept'];
						$sql="select * from  fdp where name='".$name."' and dept='".$dept."'" ;
					}
					else
					{
                                		$name = $_POST['name'];
						$sql="select * from  fdp where id='".$facid."'";
					}
			}
			elseif(!empty($_POST['dept']))
				{
					if(!empty($_POST['fi']) && !empty($_POST['fro']) && !empty($_POST['ai']))
					{
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where dept='".$dept."' and field='".$fi."' and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['fro']))
					{
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where dept='".$dept."' and field='".$fi."' and fro='".$fro."'" ;				
					}
					else if(!empty($_POST['fi']) && !empty($_POST['ai']))
					{
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where dept='".$dept."' and field='".$fi."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['ai']) && !empty($_POST['fro']))
					{
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where dept='".$dept."' and fro='".$fro."' and achi='".$ai."'" ;				
					}
					else if(!empty($_POST['fro']))
					{
						$dept=$_POST['dept'];
						$fro=$_POST['fro'];
						$sql="select * from  fdp where dept='".$dept."' and fro='".$fro."'" ;
					}				
	                      	 	 else if(!empty($_POST['ai']))
					{
						$dept=$_POST['dept'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where dept='".$dept."' and achi='".$ai."'" ;
					}
					else if(!empty($_POST['fi']))
					{
						$dept=$_POST['dept'];
						$fi=$_POST['fi'];
						$sql="select * from  fdp wheredept= '".$dept."'and field='".$fi."'" ;
					}
					else
					{
						$dept=$_POST['dept'];
						$sql="select * from  fdp where dept='".$dept."'" ;
					}
			}
			elseif(!empty($_POST['fro']))
				{
					if(!empty($_POST['fi']) && !empty($_POST['ai']))
					{
						$fro=$_POST['fro'];
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where fro='".$fro."' and field='".$fi."' and achi='".$ai."'" ;				
					}
					 else if(!empty($_POST['ai']))
					{	
						$fro=$_POST['fro'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where fro='".$fro."'and achi='".$ai."'" ;
					}
					else if(!empty($_POST['fi']))
					{
						$fro=$_POST['fro'];
						$fi=$_POST['fi'];
						$sql="select * from  fdp where fro='".$fro."'and field='".$fi."'" ;
					}
					else
					{ 
						$fro=$_POST['fro'];
						$sql="select * from  fdp where fro='".$fro."'" ;
				        }
			}
			elseif(!empty($_POST['ai']))
				{
					if(!empty($_POST['fi']))
					{
						$fi=$_POST['fi'];
						$ai=$_POST['ai'];
						$sql="select * from  fdp where field='".$fi."' and achi='".$ai."'" ;				
					}
					else{
						$ai=$_POST['ai'];
	    					$sql="select * from  fdp where achi='".$ai."'" ;
		                            }		
				}
			else
				{
					if(!empty($_POST['fi']))
					{

						$fi=$_POST['fi'];
						$sql="select * from  fdp where field='".$fi."'" ;
					}
				}							
			$r=mysqli_query($con, $sql);
			$rowcount=mysqli_num_rows($r);
			if($rowcount==0)
			{
				echo"<center><h1>No Achievements Yet<h1></center>";
				exit;
			}
				echo "<center><table border = 3>"; 
				echo "<tr>"; 
				echo "<th>Faculty id</th>"; 
				echo "<th>Name</th>"; 
				echo "<th>Dept</th>";
				echo "<th>Field</th>"; 
				echo "<th>Achievement</th>";
				echo "<th>From</th>";
				echo "<th>To</th>";
				echo" <th>Decsription</th>";
				echo "</tr>";
				while($row=mysqli_fetch_row($r))
				 { 
						echo "<tr>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>		
						<td>$row[4]</td>
						<td>$row[5]</td>
						<td>$row[6]</td>
						<td>$row[7]</td>
						</tr> ";			
 				}
				echo "</table></center>";
			
		}


}

?>