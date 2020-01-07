<html>
<head>
<link rel="stylesheet" href="project.css">
<TITLE>PROJECT</TITLE>
<style>
  table.steelBlueCols {
  border: 4px solid #555555;
  background-color: #555555;
  width: 900px;
  height: 600px;
  text-align: center;
  border-collapse: collapse;
}
table.steelBlueCols td, table.steelBlueCols th {
  border: 1px solid #555555;
  padding: 5px 10px;
}
table.steelBlueCols tbody td {
  font-size: 15px;
  
  color: #FFFFFF;
}
table.steelBlueCols td:nth-child(even) {
  background: #398AA4;
}
table.steelBlueCols thead {
  background: #398AA4;
  border-bottom: 10px solid #398AA4;
}
table.steelBlueCols thead th {
  font-size: 15px;
  
  color: #FFFFFF;
  text-align: left;
  border-left: 2px solid #398AA4;
}
table.steelBlueCols thead th:first-child {
  border-left: none;
}

table.steelBlueCols tfoot td {
  font-size: 13px;
}
table.steelBlueCols tfoot .links {
  text-align: right;
}
table.steelBlueCols tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #398AA4;
  padding: 2px 8px;
  border-radius: 5px;
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

/* Set a style for all buttons */
.fbbutton button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
  left:20%;
  transition: .5s;
}
button:hover {
   background-color:#398AA4;
   color: black;
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
.modal {
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
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 2px solid black;
    width: 85%; 
	padding-bottom: 30px;
	border-radius:50px;
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
    animation: zoom 0.5s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>
<script type="text/javascript">
function check()
{
  var sem = document.getElementById("sem");
  if(sem.value==0||sem.value>6)
  {
	  window.alert("CHECK SEM");
	  sem.focus();
	  return false;
  }
  return true;
}
function input()
{
  var inp= getElementByType("number");
  if(inp.value>5||inp.value<1)
  {
	  alert("Invalid Remarks");
	  return false;
  }
}
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</head>
   <HEADER>
<body>
<center>
    <div class="navbar">
        <div class="logo">
<IMG SRC="drrtop.png" height="100" width=500></IMG>
            </div>
<ul>
  <li><A HREF="http://localhost/project/P R O J E C T/MINI PROJECT.HTML">HOME</A></li>
  <li><A HREF="http://localhost/project/P R O J E C T/FACILITY.HTML">FACILITY</A></li>
    <div class="dropdown">
    <li><button class="dropbtn">BRANCH
        </button></li>&nbsp;
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
  <li><A href="http://localhost/project/P R O J E C T/STAFF.PDF" download>STAFF</A></li>
  <li><A href="http://localhost/project/P R O J E C T/contact.html">CONTACT US</A></li>
  <li><A href="http://localhost/project/P R O J E C T/ACADEMICS.HTML" >ACADEMICS</A></li>
  <li><A href="http://localhost/project/P R O J E C T/STUDENT.php">LOGOUT</A></li>
</ul>
    </div><hr>
<br><br><br><br><br><hr><br>
    <h10>Welcome Student</h10><br><br><hr>
	<div class="fbbutton">
   <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">Apply FeedBack Form</button>
 </div>
    <div id="modal-wrapper" class="modal">
  <form class="modal-content animate" method="POST" action="http://localhost/project/P R O J E C T/feedbacksaver.php" onsubmit="return checks()">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="ff.jpg" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Feedback Form</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Register Number" name="regno" id="regno" maxlength="10" required/>
      <input type="password" placeholder="Password" name="pwd" id="pwd" required/>
      <table class="steelBlueCols" style="border-color: black; height: 259px;" border="2" width="618"><caption>&nbsp;</caption>
<tbody>
<tr>
<td style="width: 43.1333px;">&nbsp;Sl.No</td>
<td style="width: 473.333px;">&nbsp;Answer the survey by appropriate marks.</td>
<td style="width: 19.9px;">&nbsp;1</td>
<td style="width: 19.9167px;">&nbsp;2</td>
<td style="width: 19.9px;">&nbsp;3</td>
<td style="width: 19.9167px;">&nbsp;4</td>
<td style="width: 19.9px;">&nbsp;5</td>
</tr>
<tr>
<td style="width: 43.1333px;">1</td>
<td style="width: 473.333px;">&nbsp;Effectiveness Of Course Content Delivery</td>
<td style="width: 19.9px;">&nbsp;<input name="one" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="one" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="one" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="one" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="one" type="radio" value="&quot;5" /></td>
</tr>
<tr>
<td style="width: 43.1333px;">2</td>
<td style="width: 473.333px;">&nbsp;Relevancy Of Course Contents</td>
<td style="width: 19.9px;">&nbsp;<input name="two" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="two" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="two" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="two" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="two" type="radio" value="&quot;5" /></td>
</tr>
<tr>
<td style="width: 43.1333px;">3</td>
<td style="width: 473.333px;">&nbsp;Delivery Of Lecture By Teacher</td>
<td style="width: 19.9px;">&nbsp;<input name="three" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="three" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="three" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="three" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="three" type="radio" value="&quot;5" /></td>
</tr>
<tr>
<td style="width: 43.1333px;">4</td>
<td style="width: 473.333px;">&nbsp;Use of Innovative teaching methods like PPT,videos,animation etc...</td>
<td style="width: 19.9px;">&nbsp;<input name="four" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="four" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="four" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="four" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="four" type="radio" value="&quot;5" /></td>
</tr>
<tr>
<td style="width: 43.1333px;">5</td>
<td style="width: 473.333px;">&nbsp;Skills of linking subject to practical situtions</td>
<td style="width: 19.9px;">&nbsp;<input name="five" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="five" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="five" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="five" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="five" type="radio" value="&quot;5" /></td>
</tr>
<tr>
<td style="width: 43.1333px;">6</td>
<td style="width: 473.333px;">&nbsp;Accessibility of teacher for clarification of course contents</td>
<td style="width: 19.9px;">&nbsp;<input name="six" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="six" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="six" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="six" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="six" type="radio" value="&quot;5" /></td>
</tr>
<tr>
<td style="width: 43.1333px;">7</td>
<td style="width: 473.333px;">&nbsp;Guidance given to students in conducting experiments</td>
<td style="width: 19.9px;">&nbsp;<input name="seven" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="seven" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="seven" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="seven" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="seven" type="radio" value="&quot;5" /></td>
</tr>
<tr>
<td style="width: 43.1333px;">8</td>
<td style="width: 473.333px;">Attentions of teachers towards Poor Performing Students</td>
<td style="width: 19.9px;">&nbsp;<input name="eight" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="eight" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="eight" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="eight" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="eight" type="radio" value="&quot;5" /></td>
</tr>
<tr>
<td style="width: 43.1333px;">9</td>
<td style="width: 473.333px;">Coverage of scheduled course in IA test</td>
<td style="width: 19.9px;">&nbsp;<input name="nine" type="radio" value="1" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="nine" type="radio" value="2" /></td>
<td style="width: 19.9px;">&nbsp;<input name="nine" type="radio" value="3" /></td>
<td style="width: 19.9167px;">&nbsp;<input name="nine" type="radio" value="4" /></td>
<td style="width: 19.9px;">&nbsp;<input name="nine" type="radio" value="&quot;5" /></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
      <input type="submit" value="SUBMIT"/><input type="reset" value="RESET"/>
    </div>
			</form>
		</div>
    </center>  
</body>
    </HEADER>
</html>