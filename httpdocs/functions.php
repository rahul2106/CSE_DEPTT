<?php
//<option value="1">Doctor</option>
//<option value="2">Patient</option>
//<option value="3">Compounder</option>

  $mon[1]="Jan";$mon[01]="Jan";
  $mon[2]="Feb";$mon[02]="Feb";
  $mon[3]="Mar";$mon[03]="Mar";
  $mon[4]="Apr";$mon[04]="Apr";
  $mon[5]="May";$mon[05]="May";
  $mon[6]="Jun";$mon[06]="Jun";
  $mon[7]="Jul";$mon[07]="Jul";
  $mon[8]="Aug";$mon[08]="Aug";
  $mon[9]="Sep";$mon[09]="Sep";
  $mon[10]="Oct";
  $mon[11]="Nov";
  $mon[12]="Dec";$mon[0]="Dec";

  $day[1]='Sun';
  $day[2]='Mon';
  $day[3]='Tue';
  $day[4]='Wed';
  $day[5]='Thu';
  $day[6]='Fri';
  $day[7]='Sat';

  $days[1]=31;
  $days[2]=28;
  $days[3]=31;
  $days[4]=30;
  $days[5]=31;
  $days[6]=30;
  $days[7]=31;
  $days[8]=31;
  $days[9]=30;
  $days[10]=31;
  $days[11]=30;
  $days[12]=31;
  $days[0]=31;



function login($email,$password)
{

    $q0=mysql_query("SELECT * FROM user WHERE  email='$email' AND password='$password'");
    if($row0=mysql_fetch_array($q0))
    {

      session_start();
      $_SESSION['login']=$row0['id'];
      header("Location:admin/index.php");

    }
    return 0;

}




function head()
{

  ?>


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
              <li class="active"><a href="index.php">Home</a></li>
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
              <li><a href="members.php">Membership</a></li>
              <!--AKR<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membership <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="ourmembers.php">Our Members</a></li>
                  <li><a href="http://goo.gl/i6Mh2f" target="blank">Register Now</a></li>

                </ul>
              </li>-->
               <li><a href="committee.php">CSES Team</a></li>

            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.aspx">Log In/Sign Up</a></li>
              <!--AKR<li class=" dropdown"><a role="button" data-toggle="dropdown" data-target="#" href="#"  >Student&nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i></a>
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
<!-- mohhit -->


<!-- mohit  -->

<!-- header ends here -->






<!--










  <div style="width:100%;height:105px;background: -webkit-linear-gradient(top,#0a5299 0%,#083d73 100%);background:-moz-linear-gradient(top,#0a5299 0%,#083d73 100%);position:absolute;top:0;left:0;">




<div class="row">


    <div class="col-xs-3">
               <a href="http://ismdhanbad.ac.in">   <img src="img/ism_header.png" style="position:relative; top:0px;"/></a>
    </div>


    <div class="col-xs-offset-4 col-xs-1 home" style="">
       <a href="http://ismdhanbad.ac.in" style="color:white;">ISM HOME </a><span style="color:white;" ></span> </div>
          <div class="col-xs-1 home" style="position:"><a href="http://www.ismdhanbad.ac.in/computer-science-engineering/" style="color:white;"> CSE HOME </a>
          </div>


  <div class="  col-xs-3">




        <div class="pull-right dropdown" style="margin:10px;margin-top:15px; padding-right:20px;font-family:'open Sans'"><a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#" class="black" style="text-decoration:none">Faculty Login&nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i></a>
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


        <div class="pull-right dropdown" style="margin:10px;margin-top:15px;border-right:solid 1px #818181;padding-right:20px;font-family:'open Sans'"><a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#" class="black" >Student&nbsp;&nbsp;<i class="fa fa-chevron-down font10"></i></a>
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
        </div>

 </div>
  </div>

   <div class="row" style="position:relative; top:-25px;">
      <div class="col-xs-offset-1 col-xs-4" >
         <a href="index.php">   <img src="img/cs_header.png"  height="90" style=""></a>
      </div>
   </div>
</div>



    <div id="nav_links"  >
            <ul>
            <li><a id="functions_home_navlink" href="index.php" >Home</a></li>
            <li><a id="functions_aboutus_navlink" href="aboutus.php">About Us</a></li>
            <li><a id="functions_events_navlink" href="events.php">Events</a></li>

            <li><a id="functions_downloads_navlink" href="codeism.php">Code ISM</a></li>

            <li><a id="functions_membership_navlink" href="membership.php">Membership</a></li>
             <li><a id="functions_committee_navlink" id="functions_aboutus_navlink"href="committee.php">CSES Team</a></li>
            <li><a id="functions_downloads_navlink" href="downloads.php">Downloads</a></li>

            <li><a id="functions_mainWeb_navlink" href="http://www.ismdhanbad.ac.in" target="_blank">ISM Main Website</a></li>
            <li><a href="committee.php">Exam Results</a></div>

            </ul>
        </div>

 -->
    <?php

}

function footer()
{
  ?>
    <!--footer-->

<div  class="" id="Footer">
  <div class="container" style="padding: 40px 40px 10px 40px;background-color: #102949;color:white;width:100%">
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

    <!--
    <div id="Footer">
<img src="img/ism_header.png" style="position:absolute;right:42px;top:12%;"/>
<a href="committee.php" class="footer_links" style="text-decoration:none;position:absolute;left:73%;bottom:35%;letter-spacing:1.5px;">Contact Us |</a>
<a href="https://www.google.com/maps/place/23%C2%B048'43.2%22N+86%C2%B026'26.7%22E/@23.8122833,86.4408809,188m/data=!3m1!1e3!4m2!3m1!1s0x0:0x0" class="footer_links" style="text-decoration:none;position:absolute;left:80%;bottom:35%;letter-spacing:1.5px;">&nbsp;Navigate To Us</a>

<span style="position:absolute;left:8%;top:10%;letter-spacing:1.5px;line-height:1.5;font-style:bold;">
    Computer Science & Engineering<br/>
    Technological Avenue<br/>
    ISMDhanbad, Jharkhand 826004<br/>
    <a href="#" class="footer_links" style="text-decoration:none;">csesoc@ismdhanbad.ac.in</a><br/>
    <a href="#" class="footer_social"><img src="img/fb.png" height="45px"/></a>
    <a href="#" class="footer_social"><img src="img/twitter.png" height="45px"/></a>
    <a href="#" class="footer_social"><img src="img/insta.png" height="45px"/></a>
</span>

</div>

-->

<!--end of footer-->
    <?php
}






?>
<!--footer-->

