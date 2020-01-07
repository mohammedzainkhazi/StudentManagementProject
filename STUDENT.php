<html>
    <head>
        <title>STUDENT</title>
		 <link rel="stylesheet" href="project.css">
<style>
		.form{
				position:absolute;
				left:50%;
				top:50%;
				transform:translate(-50%,-50%);
			}
			li{
				margin-left:0px;
			}
			.phpinfo{
				position:absolute;
				left:46%;
				top:70%;
				color:black;
				background-color:cyan;
				border:2px solid black;
				padding:5px;
				border-radius:20px;
			}
			.form{
				background-color:black;
				color:ghostwhite;
				border-radius:20px;
                border:3px solid white;
			}
			.form input{
				padding:10px;
				margin:10px;
				border-radius:20px;
			}
			input:focus{
				border:2px groove blue;
			}
		</style>
        <script>
		function checks(){
            var regno=document.getElementById("regno");
			var pwd = document.getElementById("pwd");
			if(regno.value=="")
			{
				window.alert("Fill Register N0");
				regno.focus();
				return false;
			}
			if(pwd.value=="")
			{
				window.alert("Fill Password");
				pwd.focus();
				return false;
			}
			return true;
		} 
        </script>
    </head>
    <body>
	<div class="navbar">
        <div class="logo">
<IMG SRC="drrtop.png" height="100" width=500></IMG>
            </div>
<ul>
  <li><A HREF="http://localhost/project/P R O J E C T/FACILITY.HTML">FACILITY</A></li>
    <div class="dropdown">
    <li><button class="dropbtn">BRANCH</button></li>&nbsp;
    <div class="dropdown-content">
      <a href="http://localhost/project/P R O J E C T/CS.HTML">COMPUTER SCIENCE</a>
      <a href="http://localhost/project/P R O J E C T/MECH.HTML">MECHANICAL</a>
      <a href="http://localhost/project/P R O J E C T/CIVIL.HTML">CIVIL</a>
      <a href="http://localhost/project/P R O J E C T/EE.HTML">E & E</a>
      <a href="http://localhost/project/P R O J E C T/EC.html">E & C</a>
      <a href="http://localhost/project/P R O J E C T/CP.HTML">COMMERCIAL PRACTICE</a>
    </div>
  </div>
  <li><A href="http://localhost/project/P R O J E C T/cctek.html">CCTEK</A></li>
  <li><A href="http://localhost/project/P R O J E C T/STAFF.PDF">STAFF</A></li>
  <li><A href="http://localhost/project/P R O J E C T/contact.html">CONTACT US</A></li>
  <li><A href="http://localhost/project/P R O J E C T/ACADEMICS.HTML" >ACADEMICS</A></li>
    <li><A HREF="http://localhost/project/P R O J E C T/MINI PROJECT.HTML">HOME</A></li>
    <li><A href="http://localhost/project/P R O J E C T/MINI PROJECT.html">LOGOUT</A></li>
</ul>
        </div>
<div class="form">
            <form action="http://localhost/project/P R O J E C T/STUDENT.php" method="POST" onsubmit="return checks()">
               <center> <p>Student Login</p> </center>
                <input type="text" placeholder="Register No" name="regno" id="regno" required/><br>
                <input type="password" placeholder="Password" name="pwd" id="pwd" required/><br>
                <center><input type="submit" value="LOGIN" onclick="checks();"/>&nbsp;&nbsp;&nbsp;
                <input type="reset" value="RESET"/></center>
            </form>
        </div>
<?php
            session_start();
  $regno = $_POST['regno'];
  $pwd = $_POST['pwd'];
            
  $con = mysqli_connect('127.0.0.1','root','');
  if(!$con){
     print "<script>alert('NOT CONNECTED');</script>"; 
  }
      if(!mysqli_select_db($con,'projectdb'))
  {
      print "<script>alert('DATABASE not Present');</script>";
  }
                $sql = "SELECT * FROM student WHERE regno='$regno' AND pwd='$pwd'";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
     if($count==1)   
	 header("refresh:0;url=feedback.php");
            else 
				echo"<script>alert('Login Failed');</script>";
            session_destroy();
?>
    </body>
</html>