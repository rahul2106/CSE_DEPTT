<?php 
//include 'connect.php';
session_start();


include 'functions.php';
include'alumni/config.php';

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSES Society-ISM Dhanbad</title>
<!-- Linking CSS-->


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<link href="css/bootstrap.css" rel="stylesheet" media="screen"> 
<link href="css/custom.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">


<!-- end Linking CSS-->
<style type="text/css">
	

#container {
  width:100%;
}

	#Footer 
	{ position: relative;
		top:1500px;
    height: 200px;
  margin-left: -110px;
  width: 113%;
	}

  #nav_links ul {
    height: 35px;
  }

  #filters 
 {
  position:relative;
  top:245px;
  left:5%;
 } 
 #well {
  position:relative;
  top:47px;
 }
  
  #alert {
    position: relative;
    top:-237px;
  }

table {


  position:relative;
  top:30px;
}

 
    
  
	
</style>






</head>

<body>
  <?php head();?>


	<div id="container">



    <div id="filters" style=""class="btn-group btn-group-lg ">
      <button type="button" class="btn btn-success active disabled">Filters &nbsp; &nbsp;<span class="glyphicon glyphicon-hand-right"></button>
    <a role="button" href="ourmembers.php?show=all" class="btn btn-primary  ">Show All</a>
    
    <div class="btn-group btn-group-lg  ">


      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Course-wise  &nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="ourmembers.php?value=B.Tech&col=course">B.Tech</a></li>
        <li><a href="ourmembers.php?value=M.Tech&col=course">M.Tech</a></li>
        <li><a href="ourmembers.php?value=M.Sc.&col=course">M.Sc.</a></li>
      </ul>
    </div>
  


   <div class="btn-group btn-group-lg ">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Membership Type  &nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="ourmembers.php?value=Lifetime&col=memb_type">Lifetime</a></li>
        <li><a href="ourmembers.php?value=Annual&col=memb_type">Annual</a></li>
        <li><a href="ourmembers.php?value=Bi-annual&col=memb_type">Bi-annual</a></li>
      </ul>
    </div>
  



   <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Membership for Session  &nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="ourmembers.php?value=2014-15&col=memb_duration">2014-15</a></li>
        <li><a href="ourmembers.php?value=2014-15&col=memb_duration">2014-15</a></li>
        <li><a href="ourmembers.php?value=2014-16&col=memb_duration">2014-16</a></li>
        <li><a href="ourmembers.php?value=2015-17&col=memb_duration">2015-17</a></li>
        <li><a href="ourmembers.php?value=Lifetime&col=memb_duration">Lifetime</a></li>
      </ul>
    
  </div>



   <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Stream-Wise  &nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="ourmembers.php?value=CSE&col=stream">Computer Science & Engineering</a></li>
        <li><a href="ourmembers.php?value=MNC&col=stream">Mathematics  & Computing</a></li>
      </ul>
    </div>
  



  <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Batch-Wise  &nbsp; <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="ourmembers.php?value=2002&col=batch&">2002</a></li>
        <li><a href="ourmembers.php?value=2003&col=batch">2003</a></li>
        <li><a href="ourmembers.php?value=2004&col=batch">2004</a></li>
        <li><a href="ourmembers.php?value=2005&col=batch">2005</a></li>
        <li><a href="ourmembers.php?value=2006&col=batch">2006</a></li>
        <li><a href="ourmembers.php?value=2007&col=batch">2007</a></li>
        <li><a href="ourmembers.php?value=2008&col=batch">2008</a></li>
        <li><a href="ourmembers.php?value=2009&col=batch">2009</a></li>
        <li><a href="ourmembers.php?value=2010&col=batch">2010</a></li>
        <li><a href="ourmembers.php?value=2011&col=batch">2011</a></li>
        <li><a href="ourmembers.php?value=2012&col=batch">2012</a></li>
        <li><a href="ourmembers.php?value=2013&col=batch">2013</a></li>
        <li><a href="ourmembers.php?value=2014&col=batch">2014</a></li>
        <li><a href="ourmembers.php?value=2015&col=batch">2015</a></li>
      </ul>
    </div>


  

  



   
 


<?php
// show all 




if (isset($_GET['show']) && $_GET['show'] =="all" ){

     
       echo '<div id="well" class="well "><h1 class="text-center text-warning"><strong>Alumni Table ('.$_GET['show'].') </strong> </h1></div>';
      echo'<table class="table table-striped table-bordered table-hover col-xs">
     <thead>
     <tr class="">
       <th>S.No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Batch</th>
      <th>Course</th>
      <th>Duration</th>
      <th>Stream</th>
      
           </tr>
     </thead>';

  $sql="SELECT `name`,`email`,`batch`,`course`,`course_duration`,`stream` FROM alumni_data";
  $result =$conn->query($sql);
  $id=1;
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      ;
      echo "<tr>";
            echo"<td>".$id."</td>";
            echo"<td>".$row["name"]."</td>";
            echo"<td>".$row["email"]."</td>";
            echo"<td>".$row["batch"]."</td>";
            echo"<td>".$row["course"]."</td>";
            echo"<td>".$row["course_duration"]."&nbsp;Years</td>";
            echo"<td>".$row["stream"]."</td>";
            //echo"<td>".$row["memb_type"]."</td>";
            //echo"<td>".$row["memb_duration"]."</td>";
            echo"</tr>";
            $id++;



    }
   // echo"</div>";
  }echo "</table>";


}

?>



 <?php 


if(isset($_GET['value']) && isset($_GET['col'])){

  echo '<div id="well" class="well "><h1 class="text-center text-warning"><strong>Alumni Table ('.$_GET['col'].'='.$_GET['value'].') </strong> </h1></div>';

 echo'<table class="table  table-hover">
     <thead >
     <tr class="">
      <th>S.No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Batch</th>
      <th>Course</th>
      <th>Duration</th>
      <th>Stream</th>
      <th>Memb_Type</th>
      <th>Memb_For</th>
     </tr>
     </thead>';

$value = $_GET['value'];
$col = $_GET['col'];
$id=1;


$sql = "SELECT * FROM alumni_data WHERE ".$col." ='$value'";
//echo $sql;


$result=  $conn->query($sql);

//print_r($result);

if($result->num_rows>0){

  while($row=$result->fetch_assoc()){

      echo "<tr>";
      echo"<td>".$id."</td>";
            echo"<td>".$row["name"]."</td>";
            echo"<td>".$row["email"]."</td>";
            echo"<td>".$row["batch"]."</td>";
            echo"<td>".$row["course"]."</td>";
            echo"<td>".$row["course_duration"]." &nbsp;Years</td>";
            echo"<td>".$row["stream"]."</td>";
            echo"<td>".$row["memb_type"]."</td>";
            echo"<td>".$row["memb_duration"]."</td>";
            echo"</tr>";
            $id++;



    }


echo'</table>';}

else{
       

    echo'<div id="alert" class="alert alert-info fade in">
  <a style="position:relative;top:0px;"href="#" class="close glyphicon glyphicon-remove" data-dismiss="alert" aria-label="close"></a>
  <h1 class="text-center text-danger"><strong> Oops!! </strong>  We have no results for this query.</h1>
 
 

  </div>';
 

 


    }



}


?>


     


     
   


    </div>



   		 	






























              <!-- 
                <b style="font-size:18px;">Lifetime Members</b> <br/>

           <ol id ="lifetime">
             <li><a href="#" class="Alumni">  Mr. Amrit Kumar (2K6 Batch)</a></li>
             <li><a href="#" class="Alumni">  Mr. Sandeep Kumar (2K6 Batch)</a></li>
             <li><a href="#" class="Alumni">  Mr. Sumit Gupta (2K6 Batch)</a></li>
             <li><a href="#" class="Alumni"> Mr. Devender Mishra (2K11 Batch) </a></li>
             <li><a href="#" class="Alumni"> Mr. Shivang Seth (2K11 Batch)   </a></li>

           </ol>-->


    <!--
<h2>Batch 2015</h2>
<table class="table table-striped">
    <tr class="table_heading">
      <td>Name</td><td>Email</td><td>Batch</td>
    </tr>-->




<?php
/*
$results_batchwise = $mysqli->query("SELECT * FROM alumni_table WHERE batch='2015' ");
if($results_batchwise){
  while($obj = $results_batchwise->fetch_object())
  {
    echo'<tr>';
    echo'<td>'.$obj->name.'</td>';
    echo'<td>'.$obj->batch.'</td>';
    echo'<td>'.$obj->email.'</td>';
     
    echo'</tr>';
      
  }
}
*
</table>


<h2>Batch 2014</h2>
<table class="table table-striped">
    <tr class="table_heading">
      <td>Name</td><td>Email</td><td>Batch</td>
    </tr>
<?php

$results_batchwise = $mysqli->query("SELECT * FROM alumni_table WHERE batch='2014' ");
if($results_batchwise){
  while($obj = $results_batchwise->fetch_object())
  {
    echo'<tr>';
    echo'<td>'.$obj->name.'</td>';
    echo'<td>'.$obj->batch.'</td>';
    echo'<td>'.$obj->email.'</td>';
     
    echo'</tr>';
      
  }
}
*/
?>



<!--
     
      <b id ="2014-16" style="font-size:18px;">Annual Members (2014-16)</b> 
            <br/>
             <center><b style="font-size:16px;text-decoration:underline;">2K8 Batch</b> </center> 


             <ol class="2008">

                         <li> <a href="#" class="Alumni"> Mr. Rajeev Kumar  </a></li>
            </ol>




          <b  id ="2014-15"  style="font-size:18px;">Annual Members (2014-15)</b> 
            <br/>




            <center><b style="font-size:16px;text-decoration:underline;">2K6 Batch</b> </center> 


            <ol class="2006">
             
             <li><a href="#" class="Alumni">  Mr. Dilip Kumar </a></li>
           </ol>
            
            <center><b style="font-size:16px;text-decoration:underline;">2K7 Batch</b> </center> 

            <ol class="2007">
             <li><a href="#" class="Alumni">  Mr. Anurag Anand </a></li>
              <li><a href="#" class="Alumni">  Mr. Pawan Kumar Singhal</a></li>
        
            </ol>


            <center><b style="font-size:16px;text-decoration:underline;">2K8 Batch</b> </center> 
            <ol class ="2008">
              <li><a href="#" class="Alumni"> 1. Mr. Abhishek Seth  </a></li>

             <li><a href="#" class="Alumni"> 2. Mr. Bhanu Pratap Sing </a></li>
              <li><a href="#" class="Alumni"> 3. Mr. Mohit Ranjan</a></li>

            </ol>


             <center><b style="font-size:16px;text-decoration:underline;">2K9 Batch</b></center> 
         <ol class="2009">
         <li><a href="#" class="Alumni">   Mr. Azad Naik</a></li>
          <li><a href="#" class="Alumni">  Mr. Napender Singh</a></li>
<li><a href="#" class="Alumni"> Mr. Sagar Arora</a></li>

    <li>         <a href="#" class="Alumni">  Mr. Shobhit Srivastava</a></li>
<li><a hrf="#" class="Alumni"> Mr. Sital Kedia </a></li>

</ol>
           
             <br/>

             <center><b style="font-size:16px;text-decoration:underline;">2K10 Batch</b> </center> 

             <ol class="2010">
              <li><a href="#" class="Alumni"> Mr. Vijit Prabhu</a></li>
             </ol>


             <center><b style="font-size:16px;text-decoration:underline;">2K11 Batch</b> </center> 

     <ol class="2011">
             
 <li><a href="#" class="Alumni"> Mr. Aikansh Garg  </a></li>
 <li><a href="#" class="Alumni"> Mr. Amit Gaurav   </a></li>
 <li><a href="#" class="Alumni">Ms. Anshuma Shukla</a></li>
 <li><a href="#" class="Alumni">  Mr. Piyush Goyal</a></li>
 <li><a href="#" class="Alumni"> Mr. Sourav Sharma  </a></li>

</ol>

             
             <center><b style="font-size:16px;text-decoration:underline;">2K12 Batch</b> </center>

<ol class="2012">
             <li><a href="#" class="Alumni"> Mr. Abhishek Singh </a></li>
             <li><a href="#" class="Alumni"> Mr. Ashwin Datt </a></li>
             <li><a href="#" class="Alumni"> Mr. Parvez Ahmed </a></li>
             
               <li><a href="#" class="Alumni"> Mr. Piyush Banginwar   </a></li>
              <li><a href="#" class="Alumni"> Mr. Prateek Saini   </a></li>
            <li><a href="#" class="Alumni"> Ms. Tejomai Kandru </a><br/>

        </ol>      
             </br>
             <center><b style="font-size:16px;text-decoration:underline;">2K13 Batch</b></center> 
      
<ol class="2013">
        <li>    <a href="#" class="Alumni"> Mr. Ashish Agarwal </a></li>
            <li><a href="#" class="Alumni"> Mr. Mayank Saxena </a></li>
            <li><a href="#" class="Alumni"> Mr. Nitesh Nawlani </a></li>
            <li><a href="#" class="Alumni"> Mr. Rajat Mahajan </a></li>
            <li><a href="#" class="Alumni"> Ms. Rupal Jain </a></li>
            <li><a href="#" class="Alumni"> Mr. Shubham Jain</a></li>
            
      </ol> 
      -->       
      
    
      
 <?php footer();?>
 <!--
<script src="js/jquery.js"></script>  
<script src="js/bootstrap.js"></script> 
-->




<!-- end of Animaation Scripts--> 
</body>
</html>