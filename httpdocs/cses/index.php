<?php 
//include 'connect.php';
include 'functions.php';
$login=-1;
if(isset($_REQUEST['login']))
{
	$login=login($_POST['email'],$_POST['password']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">


<title>CSES | ISM Dhanbad</title>
<!-- Linking CSS-->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link href="css/carousal.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/libs/animate.css">
<link rel="stylesheet" href="css/site.css">
<link href="css/blog.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />

<script src="dist/wow.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>


  

        <script src="js/modernizr.custom.js"></script>



<!-- end Linking CSS-->
<style type="text/css">
section
{
    width:80%;
    margin-left: 10%;
    padding:10px 30px 10px 30px;
   
}
h2
{
  font-family: Verdana,Arial,Helvetica,sans-serif;
font-size: 30px;
font-weight: 800;
font-style: normal;
text-transform: uppercase;
}

p
{
    text-align:justify;
}
.wow:first-child {
      visibility: hidden;
    }
body,#dLabel,#desc h2
{
  font-family: Verdana,Arial,Helvetica,sans-serif;
}

a#functions_home_navlink
{
    color:rgb(0,153,255);
}

#nav_links 
{   z-index: 5;
    position: absolute;
    top: 105px;
    left: 0;
    width: 100%;
    text-align: center;
    border-top: 1px solid #585858;
}
#nav_links li
{
    display: inline;
    padding-right: 2%;

}
#nav_links a
{    
	color:white;
    font-size: 14px;
    letter-spacing: 1px;
    position: relative;
    bottom: -5px;
    text-decoration: none;
}
#nav_links a:hover
{
    color:rgb(0,153,255);
}
#nav_links ul
{
    height: 35px;
    background: linear-gradient(to bottom,#3a3a3a 0%,#252525 100%);
}
#test
{
    width: 100%;
    background: linear-gradient(to bottom,#3a3a3a 0%,#252525 100%);
    background: -webkit-linear-gradient(to bottom,#3a3a3a 0%,#252525 100%);
    background: -moz-linear-gradient(to bottom,#3a3a3a 0%,#252525 100%);
    background-image: url('img/svg_bg.png');
    background-position:;
    background-repeat: no-repeat;
    height: 400px;
    position: absolute;
    left: 0px;
}
#dLabel
{
    text-decoration:none;
    color:white;
    font-size:14px;
    letter-spacing:1px;
}
#desc
{
    position: absolute;
    top: 480px;
    width: 60%;
}
#events
{
    position: absolute;
    right: 1%;
    top:500px;
    

  
    
    text-align: center;
    /*background: url('img/events.png');
    background-repeat: no-repeat;
    background-size: cover;*/
    

}
#events tr ,td ,table
{
text-align: center;
line-height: 1.5;
font-size: 18px;
padding-left:20px;
padding-right: 20px;
padding-top:15px;
padding-bottom: 15px; 
letter-spacing: 1px;
border:solid 2px rgb(0,153,255);
}
#events a:hover
{
    color rgb(0,153,255);
    underline:none;
}
#events table
{
   
    width: 240px;
    border-radius: 50%;
    
}


#magazine
{
    position: relative;
    
    top:00px;
    right:40px;
  

   
    height: 500px;
    color:#102049;
    text-align: center;
    

}


#events img:first-child
{   
    margin-top:90px;
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
.footer_social
{
    transition:all 1s ease;
}
.footer_social:hover
{
    transform:rotate(360deg);
}
.footer_links
{
    color:#ccc;
}
.footer_links:hover
{
    color:white;
}
#magazine_img:hover{
     opacity: 0.8;
}

.home {
    position: relative;
    top:15px;
}

.event-series-cover-img{

    height:350px;
    width: 250px;
}
</style>

</head>

<body>
	
    <?php head();?>
    <div style="margin-top:20px;padding:0;'class ="container-fluid">

    <div class="row">
       <div class="col-xs-12"id="mainWrapper">  
       <div id="test" style="position:relative;">
        <img  class="section wow bounceInLeft"  data-wow-duration="3s" style="position:absolute;top:137px;left:0;" src="img/chair.png"/>
        <img  class="section wow bounceInDown"  data-wow-duration="3s" style="position:absolute;top:90px;left:30%;z-index:5;" src="img/devices.svg"/>
        <img  class="section wow bounceInDown"  data-wow-duration="2s" style="position:absolute;top:300px;left:30%;z-index:0;" src="img/desk-solo.svg" />
        <img src="img/logo_soc.png"style="position:absolute; right:2%;">

       </div>
       </div>
       </div>

  





    <div class="container">

        <div class="col-xs-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Computer Science & Engg. Society</h2>
            
              <p style="text-align:justify; line-height:2;font-size:22px margin: 0 0 10px" class="grey">
        The Indian School of Mines Computer Science and Engineering Society. Herein after called, CSES shall function under the auspices of Indian School of Mines 'Computer Science & Engineering Department' hereinafter called the 'CSE'.</p>
            <p style="text-align:justify; line-height:2;font-size:22px margin: 0 0 10px"class="grey">
            The objective of the CSES shall be to promote Computer Science & Engineering awareness among the students in the CSE by organizing technical activities such as lectures, workshop, quizzes and excursion and to foster relationship among the past and present students and the teachers of the CSE by organizing various departmental events such as annual day celebration, fresher's welcome, farewell etc.
            </p>
           
          </div><!-- /.blog-post -->



          <div class="blog-post">
            <h2 class="blog-post-title">From President's Desk</h2>
            
         <img src="img/pres.jpg" height="200px" width="220px" style="float:left;-webkit-filter:grayscale(80%); padding:05px 20px 10px 20px;">


          <p style="text-align:justify; line-height:2;font-size:16px margin: 0 0 10px">The Indian School of Mines is one of the oldest institutions in India and is known for its immense contributions towards society at large and for science and technology in particular. Since its very inception in 1926, ISM has nurtured and groomed some of the brightest minds of the country to be world leaders in the field of technical education. The department of Computer Science and Engineering was set up in the year 1997, following the resounding success of ISM Alumni in the fields of computer science and information technology. In 17 years, the department has established itself as one of the most sought after CSE departments of the country. The academic programmes of the department attract the best brain pool of the country through prestigious JEE Advanced (earlier known as IIT-JEE) and GATE examinations. The course structure of these programmes is modified and updated periodically to include courses on emerging topics to equip students with the latest advancements in the area of Computer Science. Over the years, the department has created a strong educational platform that is dynamically sustained through quality teaching and researchsupported by excellent infrastructure and the best availableminds. The faculty and alumni of the department continue to makehuge impact in all sectors of society both in India and abroad. We expect you to be apart of the CSE fraternity at ISM and looking forward to have an enriching and long-lasting relationship with you.</p>


          </div><!-- /.blog-post -->

         
        </div><!-- /.blog-main -->

        <div class="col-xs-3  col-xs-offset-1 blog-sidebar">

          </br>
      </br>
          <div style=""class="sidebar-module">
           <h3>QUICK LINKS</h3>   
            <ol class="list-unstyled">
              <li> <a href="events.php" target="_blank">Code Marathon</a></li>
              <li> <a href="http://www.ismdhanbad.ac.in/depart/cse/BufferedReader.pdf" target="_blank">Buffered Reader</a></li>
              <li><a href="ourmembers.php" target="_blank">Our Members</a></li>
              <li><a href="http://goo.gl/i6Mh2f" target="_blank">Alumni Registration</a></li>
              
            </ol>
          </div>
      </br>
  </br>
          <div style=""class="sidebar-module">
          

             <h3>ON THE PRINT</h3>
         </br>
            <a href="http://www.ismdhanbad.ac.in/depart/cse/BufferedReader.pdf" target="_blank"><img src="img/bufferedReader2.jpg" style="height:350px"></a>
          </div>
        </div><!-- /.blog-sidebar -->

      </div>
  
   
    <div class="container marketing">
        <center><h2 class="blog-post-title">Event Series</h2></center>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="event-series-cover-img" src="img/events/codemarathon3.jpg" alt="Code Marathon" width="140" height="140">
          <h2>Code Marathon</h2>
          <p>[CodeMarathon] was a competitive programming contest organised by the Computer Science and Engineering Society of Indian School of Mines, Dhanbad and CodeISM (the coding club of Department of Computer Science and Engineeing). The event was sponsored by Class of 2k6 of the department and Incresol with prizes worth more than Rs 75,000.

[CodeMarathon] consisted of a series of coding 
</p>
          <p><a class="btn btn-default" href="events.php#marathon" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="event-series-cover-img" src="img/events/coderush2nov14.jpg" alt="Code Rush" width="140" height="140">
          <h2>Code Rush</h2>
          <p>Coding and problem solving constitute the core of the Computer Science and Engineering industry. Keeping this in mind, the department has taken its first step towards developing a sound coding aptitude and a healthy coding culture among the students by establishing a coding club. The club “CodeISM”, abiding its motto of knowledge</p>
          <p><a class="btn btn-default" href="events.php#coderush" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="event-series-cover-img" src="img/events/quizwiz2.jpg" alt="Quiz Wiz" width="140" height="140">
          <h2>Quiz-Wiz</h2>
          <p>QuizWiz,a technical quiz, was organized on the 8th of April, 2014 to test the general technical knowledge of the students and as a means to encourage students of different years to interact with each other. Keeping this in mind, it was mandatory for all teams to have four members– one from each year. The first year students were encouraged to approach their seniors to </p>
          <p><a class="btn btn-default" href="events.php#quiz" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START tabs -->

      <hr class="featurette-divider">

      <div class="row featurette" style="background-color:white">
        <div class="col-md-7">
          <h4 class="featurette-heading">We are a big family. <br/><span class="text-muted">Stay in touch. </span></h4>
          <p class="lead">Miss your ISM days? Stay tuned for the annual get together in one of your favourite cities.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" height="399px" width="530px"src="img/gettogether2014.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h4 class="featurette-heading">You participate, you grow. <br/><span class="text-muted">Mark your calendar. </span></h4>
          <p class="lead">CSES organizes events taking care that they are appropriately timed, carefully planned and curated especially for you. </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/events/cse_event_proto.jpg" alt="Events">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h4 class="featurette-heading">And lastly, this one. <br><span class="text-muted">Membership. </span></h4>
          <p class="lead">You can always become a member of CSES fraternity, dear alumni. We miss you too.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" height="399px" width="530px" src="img/events/cse_alumni.jpg" alt="Alumni">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE TABS -->

    </div><!-- /.container -->





</div>
</div>
<!-- last contraienr ends here -->

<!-- FOOTER -->
    <?php footer(); ?> 
<!-- End of mainWrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/grid.js"></script>
        <script>
            $(function() {
                Grid.init();
            });
        </script>

</body>

<!-- Animation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 

</html>
