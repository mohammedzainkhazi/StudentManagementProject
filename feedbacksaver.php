<html>
    <head>
        <title>FORM</title>
        <SCRIPT type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
</SCRIPT>
    </head>
    <style>
        .view{
            background-color: cornflowerblue;
            color: black;
            border-radius:50px;
            padding-left:50px;
            padding: 30px;
        }
        .print{
            padding: 10px;
            background-color: limegreen;
            color:black;
            width:200px;
            border-radius:50px;
            font-family: sans-serif;
            left:70%;
            text-align: center;
            position: relative;
            border:3px groove black;
        }
        .print:hover{
            background-color: green;
            color:white;
        }
    </style>
    <body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
        <div class="view">
    <?php
            $regno = $_POST['regno'];
            $one = $_POST['one'];
            $two = $_POST['two'];
            $three = $_POST['three'];
            $four = $_POST['four'];
            $five = $_POST['five'];
            $six = $_POST['six'];
            $seven = $_POST['seven'];
            $eight = $_POST['eight'];
            $nine = $_POST['nine'];
            $pwd = $_POST['pwd'];
            $con = mysqli_connect('127.0.0.1','root','');
  if(!$con){
     print "<script>window.alert('NOT CONNECTED');</script>"; 
  }
  if(!mysqli_select_db($con,'projectdb'))
  {
      print "<script>window.alert('DATABASE not Present');</script>";
  }
  $sql = "SELECT * FROM student WHERE regno='$regno' AND pwd='$pwd'";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);  
  if($count==1) 
  {
  $sql = "INSERT into studentfb (one,two,three,four,five,six,seven,eight,nine,regno)
         VALUES('$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$regno')";
     if(!mysqli_query($con,$sql))
{
    print "<script>window.alert('You have already submitted Feedback');</script>";
}
else
    print "<script>window.alert('Successfully Inserted');</script>";
  }
  else print "<script>window.alert('Values Not Inserted Check Passwords');</script>";
header("refresh:0;url=STUDENT.php");
    ?>
       </div>
   </body>
</html>