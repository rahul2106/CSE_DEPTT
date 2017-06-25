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

</style>
</head>

<body onload="startTimer()">
	
<div id="wrapper">
     <?php head();?>
<div id ="codeism">
   <h1>Code ISM</h1>
   <hr style="width:60%;">

  <p>Coding and problem solving constitute the core of the Computer Science and Engineering industry. Keeping this in mind, the department has taken its first step towards developing a sound coding aptitude and a healthy coding culture among the students by establishing a coding club. The club <b>“CodeISM”</b>, abiding its motto of knowledge sharing, will act as a forum for discussion and exchange of ideas and experiences on various topics related to coding and problem solving among its members. From time to time, it will also arrange lectures by the best coders of the institute. It will surely bridge the gap between the theoretical knowledge learnt and its practical application in the industry. Moreover, the club will also promote participation in various nationally and internationally renowned coding competitions.</p>
  <p>CodeISM has also recognized that the need of the hour is to provide placement and internship oriented lectures for the students to survive the rigorous coding and interview rounds. The club has come up with a series of eight lectures on popular topics like data structures, algorithms and strings, to make students adept in problem solving with placements and internships as the prime focus. </p>
  <p>With such a start, coding club will surely become an integral part of departmental culture, taking the name of the department to distances still undiscovered, in the coming years.</p>

</div>

    <?php footer(); ?>
<div>


<!-- Animaation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 





<!-- end of Animaation Scripts--> 

  </body>
</html>