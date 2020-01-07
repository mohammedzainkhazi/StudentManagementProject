<?php
  session_start();
  $regno = $_POST['regno2'];
            
  $con = mysqli_connect('127.0.0.1','root','');
  if(!$con){
     print "<script>alert('NOT CONNECTED');</script>"; 
  }
      if(!mysqli_select_db($con,'projectdb'))
  {
      print "<script>alert('DATABASE not Present');</script>";
  }
                $sql = "SELECT * FROM student WHERE regno='$regno'";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
     if($count==1)   
	     echo "<script>alert('Loading Feedback');</script>";
            else 
				echo"<script>alert('Login Failed');</script>";
  session_destroy();
?>