<?php 
//include 'connect.php';
include 'functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CSES | Team</title>
<!-- Linking CSS-->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/tabs.css">
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
  border: 6px solid #3283be  ; 
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
  border-left: 15px solid #3283be;
  border-right: 2px solid #3283be;
  
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
    height: auto;
    width: 100%;
    
    /*top: 2500px;*/
    background-color: #102949;
    font-family: 'CartoGothicStdBook',Arial,Helvetica,sans-serif !important;
    color: white;
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
              <li >
                <a href="members.php" >Membership</a>
                <!-- DS <ul class="dropdown-menu">
                  <li><a href="ourmembers.php">Our Members</a></li>
                  <li><a href="http://goo.gl/i6Mh2f" target="blank">Register Now</a></li> 
                  
                </ul> DS -->
              </li>
              <!-- DS <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Initiatives <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://ism.acm.org/" target="blank">ACM ISM Chapter</a></li> 
                  <li><a href="codeism.php">Code ISM</a></li>
                  <li><a href="http://csesociety.in/index.aspx">Student Alumni Relationship Cell</a></li>
                  <li><a href="http://csesociety.in/cseblog/public/">CSES Society Blog</a></li> 
                  <!-- <li><a href="#">Web Development Teem</a></li> 
                  
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li> DS -->
               <li class="active"><a href="committee.php" >CSES Team</a></li>
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
      <li > <a href="index.aspx" >Log In/Sign Up </a> </li>
      <!-- DS
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

      DS -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
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
    <td><a href="#"><img src="img/FA.jpg" height="100%"width="28%"/></a></td>
    <td><a href="#"><img src="img/tres.jpg" height="100%"width="28%"/></a> </td>
    <td><a href="#"><img src="img/SEC.jpg" height="100%"width="28%"/></a> </td>
    </tr>
    <tr>
    <td><a href="#"><img src="img/Jsec.jpg" height="100%"width="28%"/></a> </td>
    <td><a href="#"><img src="img/digvickey.jpg" height="100%"width="28%"/></a> </td>
    <td><a href="https://about.me/aashishISM"><img src="img/aashishkr.jpg" height="100%"width="28%"/></a> </td>
    <td><a href="#"><img src="img/reachus.jpg" id="x"/></a>
    </td>
    </tr>
</table>
<center>
  </div>
  <!--<div id="reachus">
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
  </div> -->
  
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- footer -->
<div  class="" id="Footer">
  <div class="container" style="padding: 40px 40px 10px 40px;background-color: #102949;color:white;width:100%;clear:both;">
        <div class="row">
         <div class=" col-lg-2 pull-left" style="letter-spacing:1.5px;line-height:1.5;font-style:bold;">
                Computer Science & Engineering<br/>
                Technological Avenue<br/>
                ISMDhanbad, Jharkhand 826004<br/>
                  <a href="#" class="footer_links" style="text-decoration:none;">csesoc@ismdhanbad.ac.in</a>

                  <a href="#" class="footer_social"><img src="img/fb.png" height="45px" style="display:inline;"/></a>
                  <a href="#" class="footer_social"><img src="img/twitter.png" height="45px" style="display:inline;"/></a>
                  <a href="#" class="footer_social"><img src="img/insta.png" height="45px" style="display:inline;"/></a>
         </div>
         <div class="col-lg-4  col-lg-offset-6  pull-right">
                 <!-- <img src="img/ism_header.png" style=""/></div> -->
                 <div> <a href="committee.php" class="footer_links " style="text-decoration:none;letter-spacing:1.5px;">Contact Us |</a>
                 <a  href="https://www.google.com/maps/place/23%C2%B048'43.2%22N+86%C2%B026'26.7%22E/@23.8122833,86.4408809,188m/data=!3m1!1e3!4m2!3m1!1s0x0:0x0" class="footer_links" style="text-decoration:none;letter-spacing:1.5px;">&nbsp;Navigate To Us</a></div>

          </div>

     </div>


  </div>
<!-- footer end here -->
<!-- Animaation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 





<!-- end of Animaation Scripts--> 
</body>
</html>