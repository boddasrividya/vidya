<html>
	<body>
		<form method="POST" ><center><br><br><h1> HOD Login</h1><br>
			Username<input type="text" name="username" required/><br><br>
			Password<input type="password" name="password" required/><br><br>
			<input type="submit" value="login" name="login"/></center>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['login']))	
	{
		if(!empty($_POST['username']) && !empty($_POST['password']))
		 {  
			$id=$_POST['username'];
			$pass=$_POST['password'];
			$db="facach";
			echo"ni";
			$link=new mysqli("127.0.0.1:3308","root","",$db);
			if($link)
			{
				$q="SELECT * FROM alog WHERE id='".$id."'" ; 	
				$r=mysqli_query($link,$q);
    				$rowcount=mysqli_num_rows($r);
				if($rowcount==0)
					echo "<h3><center>Registration Required</center></h3>";
				while($row=mysqli_fetch_row($r))
					{
						if(!strcmp($pass,$row[1]))
						{
							echo "<center><br><br><form method=\"POST\" action=\"v.php\" target=\"v.php\">                                                       				
							dept : <input type=\"text\" name=\"dept\" value=\"$row[0]\" readonly /><br><br>
							<input type=\"submit\" value=\"verify\" name=\"ver\" /> </form></center> ";
						}
						else{
							echo "<h3><center>Enter Valid Details</center></h3>";
							exit;
						}
					}
			}
		}
				
		
 	}
?>