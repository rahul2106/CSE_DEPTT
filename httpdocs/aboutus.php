<?php 
//include 'connect.php';
include 'functions.php';

?>
<!DOCTYPE html >
<html lang="en"> 

<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">


<title>CSES | About </title>
<!-- Linking CSS-->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link href="css/carousal.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/libs/animate.css">
<link rel="stylesheet" href="css/site.css">
<link href="css/blog.css" rel="stylesheet">
<!-- end Linking CSS-->
<style type="text/css">
#functions_aboutus
{
    color:rgb(0,153,255);
}
#about_us
{
    
    text-align: justify;
 

}
h2
{
    font-family: Verdana,Arial,Helvetica,sans-serif;
    color:#444444;
}
li
{
    line-height: 2;
}
strong
{
    font-size: 18px;
}
#Footer
{
   

}
a#functions_aboutus_navlink
{
    color:rgb(0,153,255);
}
</style>

</head>

<body>
    <div class="container-fluid">
   <!-- Fixed navbar -->
         <nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="containe-fluid">
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="index.php">CSES</a>
             </div>
             <div id="navbar" class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-left">
                 <li ><a href="index.php">Home</a></li>
                 <li class="active"><a  href="aboutus.php">About</a></li>
                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Initiatives <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://www.bufferedreader.org" target="blank">BufferedReader</a></li>
                  <li><a href="codeism.php">Code ISM</a></li>
                  <li><a href="index.aspx">Student Alumni Relationship Cell</a></li>
                   <li><a href="speak_up.php">SpeakUp</a></li>
                </ul>
              </li>
                 <li><a href="events.php">Events</a></li>
                 <li><a href="members.php">Membership</a></li>
                <!-- <li class="dropdown">
                   <a href="members.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membership <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="ourmembers.php">Our Members</a></li>
                     <li><a href="http://goo.gl/i6Mh2f" target="blank">Register Now</a></li>
                     
                   </ul>
                 </li>-->

                <!-- <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Initiatives <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="http://ism.acm.org/" target="blank">ACM ISM Chapter</a></li> 
                     <li><a href="codeism.php">Code ISM</a></li>
                     <li><a href="#">Web Development Teem</a></li>
                     
                    
                     <li class="dropdown-header">Nav header</li>
                     <li><a href="#">Separated link</a></li>
                     <li><a href="#">One more separated link</a></li>
                   
                   </ul>
                 </li> -->
                  <li><a href="committee.php">CSES Team</a></li>
                
               </ul>
               <ul class="nav navbar-nav navbar-right">
                <li><a href="index.aspx">Log In/Sign Up</a></li>
                 <!--<li class=" dropdown"><a role="button" data-toggle="dropdown" data-target="#" href="#"  >Student&nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i></a>
                   <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:10px;">
                   <li><form>
                       <div class="width200 input-group">
                             <input type="text" placeholder="Admission No." class="input-sm form-control" />
                               <input type="submit" class="btn btn-info btn-sm form-control" value="Check"/>
                           </div>
                     </form>
                   </li>
                   <br />
                   <li><a href="#">Click here to Pay Society Fees</a></li>
               </ul>  
     
              </li>-->


                  <!--<li class="pull-right dropdown"><a role="button" data-toggle="dropdown" data-target="#" href="#" class="black" >Faculty Login&nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="margin-top:10px;">
                 <li>
                     <div style="width:330px;height:120px;padding:20px;">
                           <form class="form-inline" role="form" method="post" action="index.php?login=<?php echo md5('login');?>">
                             <div class="form-group pull-left">
                               
                               <input type="text" class="form-control input-sm" id="exampleInputEmail2" placeholder="Email/Contact" required name="email" style="width:150px;">
                             </div> 
                             <div class="form-group pull-left">
                              
                               <input type="password" class="form-control input-sm" id="exampleInputPassword2" placeholder="Password" required name="password" style="width:140px;">
                             </div>
                             <br /><br />
                             <button type="submit" class="btn btn-info pull-right btn-sm" >Sign in</button>
                             <button type="reset" class="btn btn-default pull-right btn-sm" >Reset</button>
                             
                             
                             
                           </form>
                           
                           
                       </div>
                   </li>
               </ul>  
           </div>

         </li>-->

         
               </ul>
             </div><!--/.nav-collapse -->
           </div>
         </nav>
      
          
      <div class="container">
          <div id="banner" style="background-color:#3283be;color:#f5f5f5;">

    <div class="container intro_wrapper">
    
        <div class="inner_content" style="padding:10px;">
        
            <h1 class="title" style="color:#f5f5f5;">CSES</h1><h4>The Computer Science and Engineering Society (CSES) is jointly run by students and faculty of the Computer Science and Engineering Department, Indian School of Mines, Dhanbad. CSES aims to encourage skill development and team work among the students through various technical and cultural events organised within the department.</h4>
        </div>
        
    </div>
    
</div>


<div class="container wrapper">

    <div class="inner_content">
    
        <div class="pad30"></div>
        <br><br><br>
        
        <div class="row ">
            <div class="col-md-6">
                <h2 style="color:#3283be;"><strong>Objectives</strong></h2>
                <h4 align="justify">The Computer Science and Engineering Society aims at disseminating awareness among the students about various technological advancements in the field of Computer Science by organising several technical activities such as guest lectures, workshops, quizzes and excursions. CSES endeavours to foster relationship between the alumni and current students and faculty and holds numerous events such as Annual Day Celebration, Farewell and Confluence (the annual Alumni get-together) to fortify the bonds.</h4>
            </div> 

            <div class="col-md-6">
                <h2 style="color:#3283be;"><strong>Process</strong></h2>
                <h4 align="justify">The Society organises coding competitions like Code Marathon, CodeRush and recreation activities like QuizWiz, Farewell, Freshers and Annual Day to motivate the students of the CSE Department. The Society aims to conduct more events in the years to come and to help the students, alumni and faculty to embrace knowledge. You can know more about the events from the Events page.</h4>
            </div> 
        </div>
    </div>
</div>
    </div>
<br><br>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    
<?php footer(); ?> 
    
<!-- Animaation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 
<!-- end of Animaation Scripts--> 
</body>
</html>