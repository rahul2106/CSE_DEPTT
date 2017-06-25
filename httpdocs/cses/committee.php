<?php 
//include 'connect.php';
include 'functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSES | Team</title>
<!-- Linking CSS-->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- end Linking CSS-->
<style type="text/css">
</style>

</head>

<style>
body
{
  background-color: #fbfaf9;
  overflow-x:hidden;
}
.committee_members
{
  margin-top:320px;
  width: 90%;
  margin-left: 120px;

}


a#functions_committee_navlink
{
    color:rgb(0,153,255);
}
 .committee_members a img, .committee_members a
 {
   border: none; overflow: hidden; float: left; 
  }
  .committee_members a
  {
    margin: 10px;
  }
.committee_members a:hover
{ 
  border: 6px solid rgba(12,199,124,0.52)  ; 
}
.committee_members a:hover img
{
 margin: -6px;
  }     
.committee_members img
{

   height: 277px;
   width: 256px;
   border:none;
 }

h1,h2
{
  font-family: Verdana,Arial,Helvetica,sans-serif;
font-size: 50px;
font-weight: 800;
font-style: normal;
text-transform: uppercase;
color: #334145;
position: absolute;
top: 130px;
left: 33%;
}
h2
{
  position: relative;
  font-weight: 900px;
  font-size: 22px;
  color:#ccc;
}

#de{
  position: absolute;
  top: 250px;
  left: 23%;
  width: 50%;
  display:block;
  background: #fff;
  padding: 15px 20px 15px 45px;
  margin: 0 0 20px;
  position: relative;
  
  /*Font*/
  font-family: Georgia, serif;
  font-size: 16px;
  line-height: 1.2;
  color: #666;
  text-align: justify;
  
  /*Borders - (Optional)*/
  border-left: 15px solid rgba(12,199,124,0.7);
  border-right: 2px solid #0cc79a;
  
  /*Box Shadow - (Optional)*/
  -moz-box-shadow: 2px 2px 15px #ccc;
  -webkit-box-shadow: 2px 2px 15px #ccc;
  box-shadow: 2px 2px 15px #ccc;
}

#de::before{
 /*content: "\201C"; Unicode for Left Double Quote*/
  
  /*Font*/
  font-family: Georgia, serif;
  font-size: 60px;
  font-weight: bold;
  color: #999;
  
  /*Positioning*/
  position: absolute;
  left: 10px;
  top:5px;
}

#de::after{
  /*Reset to make sure*/
  content: "";
}
#reachus
{
  position: absolute;
  top: 1280px;
  height: 800px;
  width: 100%;
  background-color:#0A1A30 ;
}
#reachus input
{
 position: absolute;
left: 33%;
top: 181px;
height: 40px; 
width: 350px;
}
#Footer 
{
  position: absolute;
  top: 2050px;
}

</style>
<body>
	
	
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
              <li><a href="aboutus.php">About</a></li>
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
               <li class="active"><a href="committee.php" >CSES Team</a></li>
             
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
    <!-- 
	<div style="width:100%;height:450px;margin-top:30px;">

        
        	<legend class="nav-header font16 text-center blue" style="color:#333">CSES Committee</legend>
<div style="margin:5px;float:left;padding:10px;width:300px;height:100px;border:solid 1px #CCC">
           		   <img src="img/pres.jpg" height="100%"width="28%"/> 
                <span style="float:right;">
                <strong >Dr. Chiranjeev Kumar</strong><br />
                President<br />
				kumar.c.cse@ismdhanbad.ac.in
      </span>
            </div>
            <div style="margin:5px;float:left;padding:10px;width:300px;height:100px;border:solid 1px #CCC">
                 <img src="img/vicepres.jpg" height="100%"width="28%"/> 
                <span style="float:right;">
                <strong >Ashok Kumar</strong><br />
                Vice-President<br />
        <font color="white">kumar.c.cse@ismdhanbad.ac.in</font>
      </span>
            </div>
            <div style="margin:5px;float:left;padding:10px;width:300px;height:100px;border:solid 1px #CCC">
           		  <img src="img/SEC.jpg" height="100%"width="28%"/>
                <span style="float:right;">
                <strong>Rishabh kumar</strong><br />
                Secretary<br />
				kr.rishabh618@gmail.com 	&emsp;&nbsp;&nbsp;</span>
            </div>
            <div style="margin:5px;float:left;padding:10px;width:300px;height:100px;border:solid 1px #CCC">
           		<img src="img/FA.jpg" height="100%"width="28%"/>
              <span style="float:right;">
                  <strong>Mr. Amgoth Tarachand</strong><br />
                Faculty Advisor<br />
				a_tarachand@yahoo.com&emsp;&emsp;&nbsp; </span>
            </div>
            <div style="margin:5px;float:left;padding:10px;width:300px;height:100px;border:solid 1px #CCC">
           		<img src="img/tres.jpg" height="100%"width="28%"/>
              <span style="float:right;"> 
                <strong>Dr. Sukomal Pal</strong><br />
                Treasurer<br />
				pal.s.cse@ismdhanbad.ac.in&emsp;&nbsp;</span>
            </div>
            <div style="margin:5px;float:left;padding:10px;width:300px;height:100px;border:solid 1px #CCC">
                <img src="img/jsec.jpg" height="100%"width="28%"/>
                <span style="float:right;">
                <strong>Kriti Singh</strong><br />
                Joint Secretary<br />
           			kriti96.singh@gmail.com &emsp;&emsp;&emsp;	</span>
            </div>
            <div style="margin:5px;float:left;padding:10px;width:300px;height:100px;border:solid 1px #CCC">
              <img src="img/webmaster.jpg" height="100%"width="28%"/>
             Mohit Chawla 
                Webmaster<br />
                mohitchawla@ismu.ac.in&emsp;&emsp;&nbsp;&nbsp;</span>
            </div>
            
            <div style="float:left;width:100%;height:40px;border:solid 1px #CCC">
                  <strong style="font-size:20px;"><center>Or Reach us at <a style="text-decoration:none;"href="http://www.gmail.com/" target="_blank">csesoc@gmail.com</center></strong><br />
            </div>
       </div>
    </div>
</div> -->
<h1> MEET THE TEAM </h1>
<div id="de">
Everyone should learn how to program a computer <br/>because it teaches you how to think!

<br/>
</div>                 

<!--<img style="position:absolute;top:360px;left:48%;height:4%;"src="img/down-arrow@2x.png">-->
<div class="committee_members" id="team">
  <table>
    <tr><td>
    <a href="#"><img src="img/pres.jpg" height="100%"width="28%"/></a></td>
    <td><a href="#"><img src="img/vicepres.jpg" height="100%"width="28%"/></a> </td>
    <td><a href="#"><img src="img/FA.jpg" height="100%"width="28%"/></a></td>
    <td><a href="#"><img src="img/tres.jpg" height="100%"width="28%"/></a> </td>
    </tr><tr>
    <td><a href="#"><img src="img/SEC.jpg" height="100%"width="28%"/></a> </td>
    <td><a href="#"><img src="img/Jsec.jpg" height="100%"width="28%"/></a> </td>
    <td><a href="http://www.mohitchawla.in" target="_blank"><img src="img/webmaster.jpg" id="x"/></a></td>
    <td><a href="#" target="_blank"><img src="img/SEC2.jpg" id="x"/></a>
    </td>
    </tr>
    <td><a href="#"><img src="img/reachus.jpg" id="x"/></a>
    </td>
  </tr>
</table>
  </div>
  <div id="reachus">
    <h1 style="top:20px;color:#8B9CA0;"> Get In Touch</h1>
    <h2>NAME*</h2>
    <form>
      <input name="name" type="text" id="name" size="30" maxlength="30" />
      <br/><br/>
    <h2>EMAIL*</h2>
      <input name="name" style="top:272px;" type="text" id="name"  size="30" maxlength="30" />
      <br/><br/>
    <h2>HOW CAN WE HELP?</h2>

      <input name="name" style="top:372px;height:200px;" type="text" id="name" size="10" maxlength="10" /> 
       <input name="SEND" style="font-size:22px;background-color:#a14d48;border:none;text-transform:uppercase;top:602px;height:70px;  font-family: Verdana,Arial,Helvetica,sans-serif;font-weight: 800;font-style: normal;
       color: white;
" type="submit" id="sub_reachus" /> 
   
    </form>
  </div>
  
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php footer(); ?>
<!-- Animaation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 





<!-- end of Animaation Scripts--> 
</body>
</html>