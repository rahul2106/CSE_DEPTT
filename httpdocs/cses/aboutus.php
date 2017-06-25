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
                 <li><a href="events.php">Events</a></li>
                 <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membership <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="ourmembers.php">Our Members</a></li>
                     <li><a href="http://goo.gl/i6Mh2f" target="blank">Register Now</a></li>
                     
                   </ul>
                 </li>
                 <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Initiatives <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="http://ism.acm.org/" target="blank">ACM ISM Chapter</a></li> 
                     <li><a href="codeism.php">Code ISM</a></li>
                     <!-- <li><a href="#">Web Development Teem</a></li> -->
                     
                    <!--
                     <li class="dropdown-header">Nav header</li>
                     <li><a href="#">Separated link</a></li>
                     <li><a href="#">One more separated link</a></li>
                   -->
                   </ul>
                 </li> 
                  <li><a href="committee.php">CSES Team</a></li>
                
               </ul>
               <ul class="nav navbar-nav navbar-right">
                 <li class=" dropdown"><a role="button" data-toggle="dropdown" data-target="#" href="#"  >Student&nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i></a>
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
     
              </li>


                  <li class="pull-right dropdown"><a role="button" data-toggle="dropdown" data-target="#" href="#" class="black" >Faculty Login&nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i></a>
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

         </li>

         
               </ul>
             </div><!--/.nav-collapse -->
           </div>
         </nav>
      
        	
      <div class="container">
              


              <div class="row">  
            <div class="col-xs-12">    
        	<center><h2>CONSTITUTION</h2></center>
            <p class="grey">
    		The constitution of COMPUTER SCIENCE & ENGINEERING SOCIETY of INDIAN SCHOOL OF MINES, DHANBAD was constituted in June 2011. </p>
        </div>
    

        <div class="row">
            <div class="col-xs-12">

            <ul class="grey">
            	<li><strong>Name and Objective:</strong>
                	<ul>
                    	<li>The Indian School of Mines Computer Science and Engineering Society. Herein after called, CSES shall function under the auspices of Indian School of Mines 'Computer Science & Engineering Department' hereinafter called the 'CSE'.</li>
                        <li>The objective of the CSES shall be to promote Computer Science & Engineering awareness among the students in the CSE by organizing technical activities such as lectures, workshop, quizzes and excursion and to foster relationship among the past and present students and the teachers of the CSE by organizing various departmental events such as annual day celebration, fresher's welcome, farewell etc.</li>
                        <li>The Director of Indian School of Mines, Dhanbad shall be the Patron of the CSES.</li>
                    </ul>
                </li>
                <li><strong>Membership:</strong>
                	<ul>
                    	<li>Membership of the CSES shall be open to every faculty member, officer and staff member (whether academic or non-academic), every UG student (3rd year and 4th year B. Tech.), PG student (M. Tech.) and research scholar of the CSE. Any such eligible person shall have to pay the annual subscription.</li>
                        <li>The annual subscription for each student/research scholar of the CSE shall be Rs. 200.00 and the annual subscription for each faculty/officer/staff of the CSE shall be Rs 400.00. Only such persons shall remain on the role of membership of the CSES as are not in arrear of their annual subscription.</li>
                    </ul>
                </li>
                <li><strong>Executive Committee</strong>:
                	<ul>
                    	<li>President: The head of the CSE shall be the President of the Society.</li>	
                        <li>Vice – President: A member to be selected each year from amongst the CSES members who are 2nd year PG students of the CSE, to be the Vice-President.</li>
                        <li>Faculty-in-Charge: Faculty-in-Charge shall be nominated by the President of the CSES.</li>
                        <li>Treasurer: Treasurer shall be nominated by the President of the CSES.</li>
                        <li>Secretary: He/She shall be the representative of the CSE Dept in ISS elected from 3rd year UG(B. Tech.) students of the CSE.</li>
                        <li>Joint Secretary: A member to be elected each year from amongst the CSES members who are 2nd year UG students to be the Joint Secretary.</li>
                    </ul>
                </li>
                <li><strong>Duties and Functions:</strong>
                	<ul>
                    	<li>All meetings of the CSES shall be presided over by the president. He/she shall guide various activities of the CSES. In case of any dispute, majority's decision shall be final.</li>
                        <li>Under any circumstances, if the president is not available, the Vice-President shall look after the various activities of the society.</li>
                        <li>The faculty-in-charge shall be responsible to guide the secretary and the joint secretary for the execution of various activities of the Society.</li>
                        <li>The Secretary shall take the responsibility of all executive works of the Society. He/she shall convene all the meetings and prepare the minutes thereof. He/she shall be responsible for all the official jobs, fund generation, correspondences, keeping the records of the CSES etc.</li>
                        <li>The Joint Secretary shall work cooperatively with the secretary and in the absence of the Secretary, the Joint Secretary shall look after the functions of the Secretary.</li>
                    </ul>
                </li>
                <li><strong>Meeting:</strong>
                	<ul>
                    	<li>An annual general body meeting of all the CSES members shall be held in the beginning of the academic session every year to i) receive a report on the activities of the CSES ii) to receive suggestions in respect of activities during the forthcoming year and iii) to receive the accounts of the CSES for the past year and to approve a budget for the forthcoming year.</li>
                        <li>The managing committee shall ordinarily meet once in each semester. Other meeting may be held at any other time as required on a reasonable notice being given.</li>
                        <li>Any point of controversy in a meeting shall be decided by a simple majority of votes with president having additional voting rights.</li>
                    </ul>
                </li>
                <li><strong>Bank Account and its Operation:</strong>
                	<p>A bank account shall be maintained for the CSES and the bank account shall be operated jointly by any two signatories of the following:</p>
                	<ul>
                    	<li>President</li>
                        <li>Treasurer</li>
                        <li>Secretary</li>
                         
                    </ul>
                </li>
                <li><strong>Amendment:</strong></li>
                	<ul>
                    	<li>This constitution maybe amended, from time to time, with the approval by the Patron.</li>
                        <li>Any resolution for the amendment shall be passed by two-thirds majority of the total strength of the members present in the special meeting convened for the purpose.</li>
                    </ul>
            </ul>
            
        </div>
    </div>
    </div>
    </div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    
<?php footer(); ?>    
    
<!-- Animaation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 
<!-- end of Animaation Scripts--> 
</body>
</html>