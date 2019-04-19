<html>
	<body>
		<form method="POST"><center>
			<br><br><br><br><h1> Log in</h1><br>
			Username  <input type="text" name="username" required/><br><br>
			Password  <input type="password" name="password" required/><br><br>
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
		
			$link=new mysqli("127.0.0.1:3308","root","",$db);
			if($link)
			{
				$q="SELECT * FROM logch WHERE id='".$id."'" ; 	
				$r=mysqli_query($link,$q);
    				$rowcount=mysqli_num_rows($r);
				if($rowcount==0)
					echo "<h1><center>Registration Required</center></h1>";
				while($row=mysqli_fetch_row($r))
					{
						if(!strcmp($pass,$row[1]))
						{
					 		header("Location: details.php");
  					 		exit;
						}
						else{
							echo "<h4><center>Enter Valid Deatils</center></h4>";
							exit;
						}
					}
			}
		}
		
	}
?>