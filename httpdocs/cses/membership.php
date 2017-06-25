<?php 
//include 'connect.php';
include 'functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSES Society-ISM Dhanbad</title>
<!-- Linking CSS-->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- end Linking CSS-->
<style type="text/css">
	#container
	{
		margin: 200px 100px 20px 100px;
		width: 700px;
		text-align: justify;

	}
	.quicklinks
	{
		font-size: 18px;

	}
	.quicklinks:hover
	{
		color:#102049;
		text-decoration: none;
	}
	#Footer 
	{
		top:000px;
	}
	h4
	{
		font-family: Verdana,Arial,Helvetica,sans-serif;
	}
	a#functions_membership_navlink
	{
	    color:rgb(0,153,255);
	}
</style>

</head>

<body>
  <?php head();?>
	<table>
		<tr>
			<td>
				<div id="container">
				      	<legend class="nav-header font16 text-center blue" style="color:#333">CSES MEMBERSHIP</legend>
				      	<br/>
			                <b style="font-size:18px;">Membership :</b><br/>

			Membership of the CSES shall be open to every faculty member, officer and staff member (whether academic or non-academic), every UG student,PG student and research scholar of the CSE.
			<br/><br/>
			  <b style="font-size:18px;">Membership for current CSE Fraternity :</b><br/>The annual subscription (July-June) for each student/research scholar of the CSE shall be Rs. 200.00 and the annual subscription for each faculty/officer/staff of the CSE shall be Rs 400.00.
			  
			        <br/><br/>
			         <b style="font-size:18px;">Membership For Alumni :</b> 
			         <br/>
			          <b>Annual Membership Fee :</b>
			          1000 INR
			        <br/>
			          <b>Lifetime Membership Fee :</b> 10,000 INR
			          <br/>
			  </div>
			 </td>
			 <td>
			 	<h4>QUICK LINKS</h4>
			  <div id="quick_links">
			        <a class="quicklinks" href="http://goo.gl/i6Mh2f" target="_blank">Register Now (Alumni Only)
			        </a><br/>
			        <a class="quicklinks" href="ourmembers.php" target="_blank">Our Members
			        </a><br/>
			        <a class="quicklinks" href="http://ism.acm.org/" target="_blank">ACM ISM CHAPTER
			        </a>  
			    </div>
			</td>
</tr>
</table>
 <?php footer();?>
 <!-- Animaation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 





<!-- end of Animaation Scripts--> 
</body>
</html>