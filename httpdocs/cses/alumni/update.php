<?php
session_start();
    include_once('config.php');







 // variables
   
    $name =$_SESSION['name'];
    $email =$_SESSION['email'];
    $batch =$_SESSION['batch'];
    $course=$_SESSION['course'];
    $course_duration=$_SESSION['course_duration'];
    $stream =$_SESSION['stream'];
    $memb_type=$_SESSION['memb_type'];
    $memb_duration =$_SESSION['memb_duration'];



// hiding panel for value and show all
if(isset($_GET['value']) || isset($_GET['show'])){

  echo "<style>

      #hide {
        display:none;
      }
      </style>
    ";
    

}

 

// inserting a row

if (isset($_GET['add'])) {


if($_GET['add'] == "true" ){

	
	$sql ="INSERT INTO `alumni_data` (`name`, `email`, `batch`, `course`, `course_duration`, `stream`, `memb_type`, `memb_duration`) VALUES ('$name', '$email','$batch',
		'$course', '$course_duration', '$stream', '$memb_type', '$memb_duration')";
 

   if ($conn->query($sql) ===TRUE){

    
    echo "<style>

      #hide {
        display:none;
      }
      </style>
    ";
    

    echo'<div  class="alert alert-info fade in">
  <a href="#" class="close glyphicon glyphicon-remove" data-dismiss="alert" aria-label="close"></a>
  <h1 class="text-center success"><strong>'  .$name . '</strong> <small> was added successfully </small></h1>
  <h2 class="text-center success"> Want to add more</h2>
  <a href="index.php" role="button" class="col-sm-offset-10 btn btn-warning btn-lg">Add More | Fill form again</a>

  </div>




  ';
   // echo '<div class="jumbotron"><h1>'.$name.'<small> was added successfully !!</small></h1></div>';
   	// here add an sweet alert or model showing added successfully.
   	//echo "inserted succesffuly.";
   	//echo '<a href="index.php"> Add more</a>';
     
     // in that provide link for adding another one      

   }else{
     echo $conn->error;
   }

  
}

}






$q_lastId ="SELECT id FROM alumni_data ORDER BY id DESC LIMIT 1";

$result=$conn->query($q_lastId);
$last_id=$result->fetch_assoc();
//echo $last_id["id"];

$current_id = 1 + $last_id["id"];
//echo $current_id;


//gettype($current_id);
// gettype($last_id["id"]);

//ADD ALUMNI


//delete a record 

if (isset($_GET['row_del'])){


$row_del = $_GET['row_del'];
$sql = "DELETE FROM alumni_data WHERE id='$row_del'";



$result=$conn->query($sql);



 echo "<style>

      #hide {
        display:none;
      }
      </style>
    ";
    



    echo'<div  class="alert alert-danger fade in">
  <a href="#" class="close glyphicon glyphicon-remove-circle glyphicon-lg" data-dismiss="alert" aria-label="close"></a>
  <h1 class="text-center success"><strong>Row '  .$row_del . '</strong> <small> was Deleted successfully </small></h1>
  <h2 class="text-center success"> Want to Delete more</h2>
  <a href="index.php" role="button" class="col-sm-offset-10 btn btn-warning btn-lg">Add More | Fill form again</a>

  </div>';
//echo "Deleted successfully";

	}






 
    //    var_dump($_SESSION);

/*

if (mysqli_query($connect,"INSERT INTO alumni_table (name ,email ,batch)VALUES ('".$name."',  '".$email."',  '".$batch."')"))
echo "successfully inserted";
else
echo "failed";
*/
?>


<!DOCTYPE html>
<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> View Members |Delete | Add |Filter </title>
<!--

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/custom.css" rel="stylesheet" media="screen">

-->


 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 

 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>


<style>


</style>
</head>

<body>
	<div style="width:90%"class="container">
   <!-- <div class="row">		
    <a  role ="button" class="btn btn-primary rounded" href="index.php"> Back | Add More </a>
    </div>

  -->
<div  style="margin-top:20px;margin-bottom:15px;"class="btn-group btn-group-lg">
    
       <a role="button" href="index.php" class="btn btn-lg btn-danger">Add Member &nbsp;<span class="glyphicon glyphicon-plus"></a>
      <button type="button" class="btn btn-success disabled">Filters&nbsp;<span class="glyphicon glyphicon-hand-right"></button>
    <a role="button" href="update.php?show=all" class="btn btn-primary "> <span class="glyphicon glyphicon-list"></span> Show All </a>
    
    <div class="btn-group  btn-group-lg">


      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Course-wise  &nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="update.php?value=B.Tech&col=course">B.Tech</a></li>
        <li><a href="update.php?value=M.Tech&col=course">M.Tech</a></li>
        <li><a href="update.php?value=M.Sc.&col=course">M.Sc.</a></li>
      </ul>
    </div>
  


   <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Memb_Type  &nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="update.php?value=Lifetime&col=memb_type">Lifetime</a></li>
        <li><a href="update.php?value=Annual&col=memb_type">Annual</a></li>
        <li><a href="update.php?value=Bi-annual&col=memb_type">Bi-annual</a></li>
      </ul>
    </div>
  



   <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Memb_duration  &nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="update.php?value=2014-15&col=memb_duration">2014-15</a></li>
        <li><a href="update.php?value=2014-15&col=memb_duration">2014-15</a></li>
        <li><a href="update.php?value=2014-16&col=memb_duration">2014-16</a></li>
        <li><a href="update.php?value=2015-17&col=memb_duration">2015-17</a></li>
        <li><a href="update.php?value=Lifetime&col=memb_duration">Lifetime</a></li>
      </ul>
    
  </div>



   <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Stream-Wise  &nbsp;<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="update.php?value=CSE&col=stream">Computer Science & Engineering</a></li>
        <li><a href="update.php?value=MNC&col=stream">Mathematics  & Computing</a></li>
      </ul>
    </div>
  



  <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Batch-Wise  &nbsp; <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="update.php?value=2002&col=batch&">2002</a></li>
        <li><a href="update.php?value=2003&col=batch">2003</a></li>
        <li><a href="update.php?value=2004&col=batch">2004</a></li>
        <li><a href="update.php?value=2005&col=batch">2005</a></li>
        <li><a href="update.php?value=2006&col=batch">2006</a></li>
        <li><a href="update.php?value=2007&col=batch">2007</a></li>
        <li><a href="update.php?value=2008&col=batch">2008</a></li>
        <li><a href="update.php?value=2009&col=batch">2009</a></li>
        <li><a href="update.php?value=2010&col=batch">2010</a></li>
        <li><a href="update.php?value=2011&col=batch">2011</a></li>
        <li><a href="update.php?value=2012&col=batch">2012</a></li>
        <li><a href="update.php?value=2013&col=batch">2013</a></li>
        <li><a href="update.php?value=2014&col=batch">2014</a></li>
        <li><a href="update.php?value=2015&col=batch">2015</a></li>
      </ul>
    </div>


  </div>

   
<div class="jumbotron"><h1>Dashboard <small> Add | Delete | View | Filter </small>

 
</h1>

  
<form style="margin-top:20px;" role="form" mehtod="get" action="update.php"class="form-group form-horizontal">
       <div class="col-xs-4 ">
       <input type="text" name ="row_del" class="form-control input-lg  " placeholder="Enter id"> 
     </div>
     <div class="col-xs-2">
       <input  class="btn btn-danger btn-lg " type="submit" value="Delete Row">
       
      </div> 
      <a href="http://localhost/ismdhanbad.ac.in.depart.cse.cses/ourmembers.php" data-toggle="tool-tip" title ="ourmembers.php on Cses site" data-placement="right" role="button" class="  btn btn-lg btn-primary">Go to CSES</a>
       </form>
    



    </div>
  
  
   
 
   

     


      
  







    
  



   
 



     


     
   
   <?php //if(isset($_POST['hide'] )&& $_POST['hide']==0) :?>

     	<div id="hide" class="alert alert-info fade in">
  <a href="#" class="close glyphicon glyphicon-remove" data-dismiss="alert" aria-label="close"></a>
  
  <h1 class="text-center"><strong><?php echo $name; ?>!! </strong> <small>will be added as </small></h1>
  <table class="table  table-hover">
     <thead>
     <tr class="success">
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Batch</th>
   <th>Course</th>
      <th>Duration</th>
      <th>Stream</th>
      <th>Memb_Type</th>
      <th>Memb_For</th>
     </tr>
     </thead>

     <tr class="danger">
     <td><?php echo $current_id ;?></td>
     <td><?php echo $name;?></td>
     <td><?php echo $email;?></td>
     <td><?php echo $batch;?></td>
     <td><?php echo $course;?></td>
     <td><?php echo $course_duration;?>  &nbsp;Years</td>
     <td><?php echo $stream;?></td>
     <td><?php echo $memb_type;?></td>
     <td><?php echo $memb_duration;?></td>
     </tr>

    </table> 


    <div class="row">
      <div class=" col-sm-offset-9">
      <a role="button" class="btn btn-danger btn-lg" href="update.php?add=true&hide=1"> Add Alumni | Sure ?</a>
    </div>
    </div>



      
    

    

    </div>



<?php // endif ?>



<?php
// show all 

if (isset($_GET['show']) && $_GET['show'] =="all" ){

     
       echo '<div class="well"><h1 class="text-center text-warning">Alumni Table </h1></div>';
      echo'<table class="table table-striped table-bordered table-hover">
     <thead >
     <tr class="">
      <th>Id</th>
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

  $sql="SELECT * FROM alumni_data";
  $result =$conn->query($sql);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

      echo "<tr>";
      echo"<td>".$row["id"]."</td>";
            echo"<td>".$row["name"]."</td>";
            echo"<td>".$row["email"]."</td>";
            echo"<td>".$row["batch"]."</td>";
            echo"<td>".$row["course"]."</td>";
            echo"<td>".$row["course_duration"]."&nbsp;Years</td>";
            echo"<td>".$row["stream"]."</td>";
            echo"<td>".$row["memb_type"]."</td>";
            echo"<td>".$row["memb_duration"]."</td>";
            echo"</tr>";



    }
   // echo"</div>";
  }echo "</table>";


}
?>


<?php 


if(isset($_GET['value']) && isset($_GET['col'])){

$value = $_GET['value'];
$col = $_GET['col'];

 echo'<table class="table  table-hover">
     <thead >
     <tr class="">
      <th>Id</th>
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

$sql = "SELECT * FROM alumni_data WHERE ".$col." ='$value'";
//echo $sql;

$result=  $conn->query($sql);

//print_r($result);

if($result->num_rows>0){

  while($row=$result->fetch_assoc()){

      echo "<tr>";
      echo"<td>".$row["id"]."</td>";
            echo"<td>".$row["name"]."</td>";
            echo"<td>".$row["email"]."</td>";
            echo"<td>".$row["batch"]."</td>";
            echo"<td>".$row["course"]."</td>";
            echo"<td>".$row["course_duration"]." &nbsp;Years</td>";
            echo"<td>".$row["stream"]."</td>";
            echo"<td>".$row["memb_type"]."</td>";
            echo"<td>".$row["memb_duration"]."</td>";
            echo"</tr>";



    }



echo "<table>";}

else{
      echo '<div class="row"><div class="well col-sm-12">';
     //  echo "<tr><td>";
      // echo '<div class="well">';
      echo '<h1 class="text-center text-danger">Oops!  As such no results</h1>';
      //echo "</tr></td>";

      echo '</div></div>';
      echo"</table>"; 

      //echo"</div>";


    }



}


?>




    

</div>






<!--
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 

-->


</body>
</html>

