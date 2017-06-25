<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Alumni Membership Portal</title>

<!--
<link href="css/bootstrap.css" rel="stylesheet" media="screen"> 
<link href="css/custom.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">
-->

 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<style>
</style>
</head>

<body>
	<div style="width:80%;"class="container">
		<div class="jumbotron"><h1>Alumni Adding Interface</h1>
    

    </div>

	<form  class="form-horizontal "role="form" id="myform" action="variables.php" method="post">
 

 <div class="form-group form-group-lg">
  <label class="control-label col-sm-2" for="name">Full Name :</label>
  <div class="col-sm-10">
  <input  name="name" type="text" class="form-control" id="name"  placeholder="Alumni's Name"  required >
  
    </div>
  </div>
 

  
<div class="form-group form-group-lg">
<label class="control-label  col-sm-2"    for="email">Email:</label>
<div class="col-sm-10">
<input name ="email" type="email" class="form-control"  placeholder="Alumni's E-Mail" id="email" required >
</div>
</div>

 
 <div class="form-group form-group-lg">
  <label class="control-label col-sm-2" for="batch">Batch :</label>
  <div class="col-sm-10">
  <input name ="batch" type="text" class="form-control" required placeholder="This is Year of passing or entering???"  id="batch">
   
 </div>
</div>


<div class="form-group form-group-lg">
 <label class="control-label col-sm-2" for="course">Course</label>
  <div class="col-sm-2">
    <select name ="course" class ="form-control"type="text" id="course" required>
      <option  value="B.Tech">B.Tech </option>
      <option  value="M.Tech">M.Tech </option>
      <option  value="M. Sc.">M. Sc.</option>
    </select>
    
  </div>


<label class="control-label col-sm-1" for="time"> Duration:</label>
  <div class="col-sm-2">
    <select name ="course_duration" class ="form-control"type="number" id="time" required>
      <option  value="2">2 Year </option>
      <option  value="4"> 4 Year </option>
      <option  value="5"> 5 Year</option>
    </select>
    
  </div>

  <label class="control-label col-sm-1" for="stream">Descipline</label>
  <div class="col-sm-4">
    <select  name="stream" class ="form-control"type="text" id="stream" required>
      <option  value="CSE">Computer Science & Engineering</option>
      <option  value="MNC">Mathematics & Computing</option>
      
    </select>
    
  </div>
</div>

<div class="form-group form-group-lg">
 <label class="control-label col-sm-2" for="memb_type">Membership Type:</label>
  <div class="col-sm-10">
    <select name="memb_type"class ="form-control"type="text"  required>
      <option  value="Annual">Annual</option>
      <option  value="Bi-annual">Bi-annual</option>
      <option  value="Lifetime"> <code>*</code>Lifetime</option>
    </select>
    
  </div>
</div>



<div class="form-group form-group-lg">
<label class="control-label col-sm-2" for="memb_year">Duration:</label>
<div class="col-sm-10">
                        <select name= "memb_duration" class="form-control" type="text" id="memb_year">
                        	<option  value="2014-15">2014-2015 </option>
                          <option value="2015-16">2015-2016</option>
                        	<option value="2016-17">2016-17</option>
                          <option  value="2014-16">2014-2016</option>
                          <option value="2015-17">2015-17</option>
                          <option value="Lifetime">Lifetime</option>
                        </select> 
                      

                        </div>    
                      </div>


                      <div class="form-group form-group-lg"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger  btn-lg">Add Member &nbsp; <span class="glyphicon glyphicon-plus"</button>
    </div>
  </div>


               <!--         

                        Name:<input type="text" name="name"><br/><br/>
                        Email:<input type="email" name="email"><br/><br/>
                        Batch:<input type= "text" name="batch"><br/><br/>
                        Membership for Year:
                        <select>n
                        	<option>2014-2015</option>
                        	<option>2014-2016</option>
                            <option>2015-2016</option>
                           
                        </select> 

      

                        <button id="sub">Submit</button><br/><br/>-->


          <input type="hidden" name="hide" value="1" >
 </form>

 <!--<a href="view_members.php" target="_blank">View Members</a>-->
</div>

 <script src="js/jquery.js"></script>  
<script src="js/bootstrap.js"></script> 

        
</body>
</html>