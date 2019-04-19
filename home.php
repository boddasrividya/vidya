<!DOCTYPE html>
<html>
<head>
<title>faculty achievements</title>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color:gray;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
footer { 
  display: block;
}

</style>
</head>
<body>
<div  style="max-width:2000px">
 <center> <img src="banner2.jpg" style="width:100%"></center>
<div>
<div class="navbar">
  <a href="home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Faculty Details 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://chemical.anits.edu.in/facultybt.php">CHEMICAL</a>
      <a href="http://civil.anits.edu.in/facultycivil.php">CIVIL</a>
      <a href="http://cse.anits.edu.in/facultycse.php">CSE</a>
      <a href="http://ece.anits.edu.in/facultyece.php">ECE</a>
      <a href="http://eee.anits.edu.in/facultyeee.php">EEE</a>
      <a href="http://it.anits.edu.in/facultyit.php">IT</a>
      <a href="http://mechanical.anits.edu.in/facultymech.php">MECHANICAL</a>
    </div>
  </div> 
  <a href="view.php">View Acheievements</a>
  <div class="dropdown">
    <button class="dropbtn">Add Acheivements
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="login.php">ADD</a>
      <a href="update.php">UPDATE</a>
	</div>
	</div>
      
  <div class="dropdown">
    <button class="dropbtn">Verification
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="lo.php">CSE</a>
      <a href="lo.php">EEE</a>
      <a href="lo.php">ECE</a>
      <a href="lo.php">IT</a>
      <a href="lo.php">CHEMICAL</a>
      <a href="update.php">MECH</a>
	</div>
	</div>
</div>
<h1><center>Faculty Achievements</center></h1>
<div  style="max-width:2000px max-height:200px" >
  <img class="mySlides" src="hi.jpg" alt="img not found" style="width:100%">
  <img class="mySlides" src="kk.jpg" style="width:100%" >
  <img class="mySlides" src="i.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
<footer >
         © Copyright 2014, All Rights Reserved
      
</footer>

</body>
</html>
