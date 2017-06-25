<?php
session_start();

    
  

  
    $_SESSION['name']=$name =$_POST['name'];
     $_SESSION['email']=$_POST['email'];
    $_SESSION['batch']=$_POST['batch'];
    $_SESSION['course']=$_POST['course'];
    $_SESSION['course_duration']=$_POST['course_duration'];
    $_SESSION['stream']=$_POST['stream'];
    $_SESSION['memb_type']=$_POST['memb_type'];
    $_SESSION['memb_duration'] =$_POST['memb_duration'];



   // $name =$name;




   /* $once = 0;
    if (isset($_POST)){
     header("Location: http://localhost/ismdhanbad.ac.in.depart.cse.cses/alumni/update.php");
     
    }

    */

   
    
    
    
     ?>

     <body>

     	<a href="update.php">Click here</a></body>