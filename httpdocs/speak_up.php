<?php 
//include 'connect.php';
include 'functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CSES | Speak Up</title>
<!-- Linking CSS-->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">


<style>

#wrapper {
	width:100%;
	height:auto;
}

#codeism {
	position:relative;
	top:150px;
	height: 600px;
	width:80%;
	margin-left: 10%;
	text-align: justify;
	


}

#codeism h1 {
	text-align: center;
}

#Footer{
	position: relative;
	top:200px;
}
img {
    position: absolute;
    left: 100px;
    top:100px;
    z-index: -1;
}
</style>
</head>

<body onload="startTimer()">
	
<div id="wrapper">
     <?php head();?>
<div id ="codeism">
   <h1>Speak Up</h1>
   <hr style="width:60%;">
   <div style="align:center">
<img src="img/speak_up.jpg" height="282px" width="637px"/>
</div>
  <p>Speak Up is a unique initiative undertaken by the Department. The companies that visited ISM during the recruitment season of the academic session 2015-16 appreciated the exceptionally sound academic records and technical skills, but at the same time admitted the fact that there was a need for the students to work upon their soft skills. As a direct consequence, Speak Up came into existence.</br>
</br>
With its three hour long weekly sessions conducted every Friday, the vision of Speak Up is to prepare the Departmental students for their upcoming interviews and group discussion rounds that they would have to face during their internship recruitment procedure. The session is currently conducted by a small group of final and pre-final year students for the freshmen and sophomores. From extensively vivid extempore, to group discussion practice rounds. From English grammar session, to mock interviews - Speak Up tends to cover it all. With its constant speech and confidence enhancement efforts that certainly seem promising, Speak Up aspires to play a noteworthy role in the overall development of a students' personality, and to improve the Department's recruitment statistics in the time to come.
</p>
</hr>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <?php footer(); ?>
<div>


<!-- Animaation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 





<!-- end of Animaation Scripts--> 

  </body>
</html>