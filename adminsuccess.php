<?php
session_start();
?>
<html>
<meta charset="viewport">
    <head>
        <title>ADMIN</title>
		 <link rel="stylesheet" href="project.css">
        <style>		
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
			
			input[type=text], input[type=password], input[type=number], input[type=date], input[type=reset], input[type=submit]{
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}
input[type=reset]:hover, input[type=submit]:hover{
	background-color:green;
}

input[type=radio]{
	margin-left:30px;margin-top:20px;margin-bottom:20px;
	border: 1px solid #ccc;
}

/* Set a style for all buttons */
.popup button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 15px 26px 20px 30px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal,.modal1 {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content ,.modal-content1{
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
h10{position:absolute;
left:65%;top:30%;
font-size:35px;
}
	</style>
<script>
function checkss()
{
  var regno2=document.getElementById("regno2");
  var regpat = /^([0-9]{3})([A-Za-z]{2})([0-9]{5})+$/;
  if(!regno2.value.match(regpat))
  {
     alert('Invalid Register Number');
     regno2.focus();
     return false;
  }
  return true;
}
		function checks(){
            var regno=document.getElementById("regno");
			var pwd = document.getElementById("pwd");
			var repwd = document.getElementById("repwd");
			var gen = document.getElementById("gender");
			var dob = document.getElementById("dob");
		     var regpat = /^([0-9]{3})([A-Za-z]{2})([0-9]{5})+$/;
             if(!regno.value.match(regpat))
               {
                    alert('Enter Valid Register Number');
					regno.focus();
                    return false;
               }
			if(document.getElementById("sem").value<1||document.getElementById("sem").value>6)
			{
				alert("Enter Valid Sem");
				document.getElementById("sem").focus();
				return false;
			}
			if(!gen.value=="M"||!gen.value=="F")
			{
				alert("Enter Gender As Specified");
				gen.focus();
				return false;
			}
			if(regno.value=="")
			{
				window.alert("Fill Register N0");
				regno.focus();
				return false;
			}
			if(pwd.value!=repwd.value)
			{
				window.alert('Passwords not matching');
				pwd.focus();
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
		function hide()
	{
	  dom=document.getElementById("addnew").style;
	    if(dom.visibility=="visible")
		dom.visibility="hidden";
		else dom.visibility="visible";
	}
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal1 = document.getElementById('modal-wrapper1');
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
    </head>
<body>
<?php
session_start();
?>

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
    <li><A href="http://localhost/project/P R O J E C T/MINI PROJECT.html">LOG OUT</A></li>
    </ul>
        </div>
         <h10><center>U P D A T I O N S</center></h10>
                <div class="popup"><button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">
                      Register New Student</button><button onclick="document.getElementById('modal-wrapper1').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">
                      View Feedback</button></div>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" onsubmit="return checks()" method="POST" action="http://localhost/project/P R O J E C T/studentregister.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Register Student</h1>
    </div>

    <div class="container">
    <input type="text" placeholder="Enter First Name" name="fname" id="fname" required/>
	  <input type="text" placeholder="Enter Middle Name" name="mname" id="mname"/>
	  <input type="text" placeholder="Enter Last Name" name="lname" id="lname" required/>
	  <input type="text" placeholder="Enter Register Number" name="regno" id="regno" size="10" required/>
	  <input type="number" placeholder="Enter Semester" name="sem" size="1" id="sem" required/>
	  <input type="radio" value="M" id="gender" name="gender" required/>MALE
	  <input type="radio" value="F" id="gender" name="gender" required/>FEMALE<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D.O.B :
	  <input type="date" placeholder="Enter D.O.B dd/mm/yy" name="dob" id="dob" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHOOSE BRANCH :<br>
	  <input type="radio" value="CS" id="branch" name="branch" required/>CS
	  <input type="radio" value="ME" id="branch" name="branch" required/>ME
	  <input type="radio" value="CE" id="branch" name="branch" required/>CE
	  <input type="radio" value="EC" id="branch" name="branch" required/>EC
	  <input type="radio" value="EE" id="branch" name="branch" required/>EE
	  <input type="radio" value="CP" id="branch" name="branch" required/>CP
    <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required/>
    <input type="password" placeholder="Reenter Password" name="repwd" id="repwd" required/>	  
    <input type="submit" value="REGISTER"/><input type="reset" value="RESET"/>
    </div>
			</form>
</div>
<div id="modal-wrapper1" class="modal1">  
  <form class="modal-content animate" onsubmit="return checkss()" method="POST" action="http://localhost/project/P R O J E C T/getfeedback.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="ff.jpg" alt="Avatar" class="avatar">
      <h1 style="text-align:center">View Feedbacks</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Register Number ex: 106CS17025" name="regno2" id="regno2" maxlength="10" required/>
	   
      <input type="submit" value="V I E W"/><input type="reset" value="RESET"/>
    </div>
  </form>
</div>
<?php
session_destroy();
?>
    </body>
</html>