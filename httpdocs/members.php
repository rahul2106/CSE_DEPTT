<?php 
//include 'connect.php';
include 'functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta property="og:title" content="Alumni Membership - ISM Alumni" />
<meta property="og:site_name" content="ISM Alumni" />
<title>CSES | Membership</title>
<!-- Linking CSS-->
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type="text/javascript" src="js/jsSwitcher/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-tabs.js" > </script>
<script src="js/bootstrap.js"></script> 
<script type='text/javascript' src='js/plugins.min.js'></script>
<script type='text/javascript' src='js/scripts.min.js'></script>
<script type='text/javascript' src='js/wp-embed.min.js'></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.min.css">
<!--<script src="js/react.min.js"></script>-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900|Dosis:300,400,700|Oswald:300">
<!-- end Linking CSS-->
<style type="text/css">
body{
background-color: white;
}
p
{
  width:92%;
  font-size: 14px;
}
h1{
  /*font-family: Verdana,Arial,Helvetica,sans-serif;*/
  font-size: 35px;
}
#membeship_total h2
{
    font-family: Verdana,Arial,Helvetica,sans-serif;
font-size: 30px;
font-weight: 800;
font-style: normal;
text-transform: uppercase;
}
a
{
    font-style:normal;
}
#content p {
  width:70%;
}

a#functions_events_navlink
{
    color:rgb(0,153,255);
}
#membeship_total img
{
  margin: 10px;
  height: 310px;
  width: 280px;
  float:right;
}

#membeship_total
{

  top:20%;
  margin-left:1%;
  text-align: justify;
  width: 80%;
  line-height: 2;
}
table,tr,td{
  clear:both;
  text-align: center;
  text-color: black;
  padding: 10px;
  margin:10px;
  width: auto;
}

#membeship_total h1

{ clear:both;
  font-weight: 800;
  font-variant: bold;
}

.venue {
  background:rgb(229, 225, 225);
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


#topcontent p {
  float:left;
  margin-left:3%;
  width: 70%;
}

h1,h2,h3,h4 {
  clear:both;
}

.table {
  width:60%;
  align:center;
}


</style>
  
  <script type = "text/javascript">
          function displayNextImage() {
              y = (y === images1.length - 1) ? 0 : y + 1;
              document.getElementById("img2").src = images1[y];
        x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img1").src = images[x];
          }

          function displayPreviousImage() {
              y = (y <= 0) ? images1.length - 1 : y - 1;
              document.getElementById("img2").src = images1[y];
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img1").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
          images[0] = "img/events/confluence2.jpg";
          images[1] = "img/events/confluence1.jpg";
      
          var images1 = [], y = -1;
          images1[0] = "img/events/cm2_2.jpg";
          images1[1] = "img/events/cm2_3.jpg";
          images1[2] = "img/events/cm2_4.jpg";
          images1[3] = "img/events/cm2_1.jpg";
  </script>

</head>

<body onload="startTimer()">
  

  
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
            </li>
                <li class="active"><a href="committee.php" >CSES Team</a></li>
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
      <li > <a href="index.aspx" >Log In/Sign Up </a> </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>    
      <div style="width:1200px;margin-right:auto;margin-left:auto;">
    <div id="membeship_total" class="container-fluid">
           <center> 
            <img id="img1" class="img-thumbnail" src="img/mem.png" style="height:450px;width:650px;clear:both;margin:20px;border:0px;" /> 
          </center>
  <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="pivot-wrap pivot-callout">
            <h2 class="blue-heading">More than becoming a member...</h2>
            <div class="pivot-content">
              <p>Join the family of <i>Awesome</i> people, growing together, sharing knowledge, wisdom and moments of happiness. We move with the motive to promote Computer Science and Engineering and spread awareness among the students about it.</p>
        <!--      <a href="members.php#lifetime_mem"> Our Passengers </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>

        
            
        
   
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="member-info-wrap">
              <div class="row">
                <div class="col-sm-4">
                    <h2>Who can join?</h2>
                    <p><span>Membership of the CSES shall be open to every alumni, faculty member, officer and staff member (whether academic or non-academic), every UG student, PG student (M. Tech.) and research scholar of the CSE, ISM Dhanbad. Any such eligible person shall have to pay the subscription fees.</span></p>
                </div>
                <div class="col-sm-4">
                    <h2>About Membership</h2>
                    <p>There is no great joy than uniting with the friends, guides and acquaintances, a sense of gratitude and goodwill. Getting this membership will offer enrichment on a multitude of levels, and amplifies one's impact and connection to the alma mater.</p>
                </div>
                <div class="col-sm-4">
                    <h2>Where do my dues go?</h2>
                    <p><span>Membership Dues in the society goes as funds to CSE Society, ISM Dhanbad. Funds are used at various levels to organize cultural events, educational events and get together for alumni, faculty member, staff and students. Provinding guddies to the members of the society,in the printing of bi annual magazine <i>BufferedReader</i> and organizing frshers,farewell.</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="pivot-wrap" style="padding: 0 10px;">
                <h2 class="blue-heading">Why Join</h2>
            </div>
          </div>
        </div>
      </div>
            
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="member-info-wrap">
              <div class="row">
                <div class="col-sm-4">
                  <h2>ISM Pride</h2>
                  <p><span>ISM is an engine for real-time accomplishment that enriches our community, our nation and our world. A CSE Society membership keeps you connected to ISM as it shapes the future.</span></p>
                </div>
                <div class="col-sm-4">
                  <h2>Networks</h2>
                  <p><span>Stay connected to CSE Society where you live or through one of our academic, professional, affinity or diversity networks.</span></p>
                </div>
                <div class="col-sm-4">
                  <h2>Impacts</h2>
                  <p><span>Your membership investment not only connects you with alumni, but also supports rewarding volunteer opportunities that provide alumni expertise to ISM CSE students.</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

             
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="pivot-wrap" style="padding: 0 10px;">
            <h2 class="blue-heading">Membership Levels</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="member-info-wrap">
            <div class="row">
                              <div class="col-sm-6">
                  <h2>Annual Members</h2>
                  <p style="font:;">You might be a graduate or certificate holder, but you still have the benefits of a student. As an automatic member, you get access to ISM CSE Recreation, ISM CSE Library and the Alumni Webportal. Because we believe as a CSE Alumni, you&#8217;ve earned it and you can be the part by annual membership charge of <b>Rs. 1000</b>.</p>
                </div>

                              <div class="col-sm-6">
                  <h2>Lifetime Members</h2>
                  <p>We want to thank existing Life Members for their previous contribution and ongoing dedication. Your support has been a pillar of our Society and earns you a special place in the membership program.<br />
          Unlike Annual Membership, you reap benefits for life, without any additional costs to maintain your status. And any annual member can become a Lifetime member by just making a one time payment of <b>Rs 10000</b>.</p>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#LifeTime" style="background-color:#3283be;">Know Our LifeTime Members</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="pivot-wrap" style="padding: 0 10px;">
            <h2 class="blue-heading">Join Us Now</h2>
          </div>
        </div>
      </div>
    </div>
   
      <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="member-info-wrap" style="padding: 0px 0px">
            <div class="row" style="margin-left: 10px;">
                 <p>To become a member you have to pay, as per the required Membership Plan, to the Bank A/c of the Society given below. :-</p>
                <p style="font-weight:bold;">Account Name - CSES<br>
                   Bank Name - SBI, ISM Campus<br>
                   IFSC Code - 001641<br>
                   Account Number – 31998483195<br></p>
                  <p> After the Payment you just have to mail us your details like Your Name, Batch, Admission Number, Current Address, Contact Number and the reciept of the payment made to <b>csesoc@ismdhanbad.ac.in</b>. We will Contact you soon regarding the membership confirmation and welcoming you to the family.</p>
            </div>
          </div>
        </div>
      </div>
    </div>       
    



<!-- Modal -->
<div id="LifeTime" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LifeTime Members</h4>
      </div>
      <div class="modal-body">
        <table style="margin-left:15%;color: #999;" class="table table-striped table-hover" id="lifetime_members" >
                    <tr>
                        <td><strong style="color: #737373;">Member Name</strong></td>
                        <td><strong style="color: #737373;">Batch</strong></td>
                        
                    </tr>
                    <tr>
                        <td>Mr. Amrit Kumar</td>
                        <td>2006</td>
                    </tr>
                    <tr>
                        <td>Mr. Dilip Kumar</td>
                        <td>2006</td>
                    </tr>
                    <tr>
                        <td>Mr. Sandeep Kumar</td>
                        <td>2006</td>
                    </tr>
                    <tr>
                        <td>Mr. Sumit Gupta</td>
                        <td>2006</td>
                    </tr>
                    <tr>
                        <td>Mr. Rajeev Kumar </td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <td>Mr. Devender Mishra</td>
                        <td>2011</td>
                    </tr>
                    
                    <tr>
                        <td>Mr. Shivang Seth</td>
                        <td>2011</td>
                    </tr>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div  class="" id="Footer">
  <div class="container" style="padding: 40px 40px 10px 40px;">
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
</div>




<!-- Animaation Scripts-->


<!-- end of Animaation Scripts--> 

  </body>
</html>