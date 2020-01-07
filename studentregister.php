<?php
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $regno = $_POST['regno'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $branch = $_POST['branch'];
  $sem = $_POST['sem'];
  $pwd = $_POST['pwd'];
  $repwd = $_POST['repwd'];
  $con = mysqli_connect('127.0.0.1','root','');
  if(!$con){
     print "<script>window.alert('NOT CONNECTED');</script>"; 
  }
  else if(!mysqli_select_db($con,'projectdb'))
  {
      print "<script>window.alert('DATABASE not Present');</script>";
  }
  else if($pwd==$repwd)
  {
  $sql = "INSERT INTO student(fname,mname,lname,regno,dob,gender,branch,sem,pwd)
         VALUES('$fname','$mname','$lname','$regno','$dob','$gender','$branch','$sem','$pwd')";
     if(!mysqli_query($con,$sql))
{
    print "<script>window.alert('Insertion not successful check Register Number');</script>";
}
else
    print "<script>window.alert('Successfully Inserted');</script>";
  }
  else print "<script>window.alert('Values Not Inserted Check Passwords');</script>";
header("refresh:0;url=STUDENT.php");
?>