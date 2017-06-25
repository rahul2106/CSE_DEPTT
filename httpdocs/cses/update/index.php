<?php 
//include 'connect.php';
include 'functions.php';
$login=-1;
if(isset($_REQUEST['login']))
{
	$login=login($_POST['email'],$_POST['password']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSES Society-ISM Dhanbad</title>
<!-- Linking CSS-->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/libs/animate.css">
<link rel="stylesheet" href="css/site.css">


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


  

  <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
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
{
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
    font-size: 14px;
    letter-spacing: 1px;
    position: relative;
    bottom: 05px;
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
    top:550px;
    width: 27%;
    height: 500px;
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
    height: 300px;
    width: 240px;
    border-radius: 50%;
    
}

#magazine
{
    position: absolute;
    right: 1%;
    top:1100px;
    width: 27%;
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
    height: 200px;
    width: 100%;
    position: absolute;
    top: 2500px;
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
</style>

</head>

<body>
	
	
    <?php head();?>
       <div id="mainWrapper">  
       <div id="test" style="position:absolute;top:110px;">
        <img  class="section wow bounceInLeft"  data-wow-duration="3s" style="position:absolute;top:137px;left:0;" src="img/chair.png"/>
        <img  class="section wow bounceInDown"  data-wow-duration="3s" style="position:absolute;top:90px;left:30%;z-index:5;" src="img/devices.svg"/>
        <img  class="section wow bounceInDown"  data-wow-duration="2s" style="position:absolute;top:300px;left:30%;z-index:0;" src="img/desk-solo.svg" />
        <img src="img/logo_soc.png"style="position:absolute; right:2%;">

       </div>
        <section id="desc" >
        <h2 >Computer Science & Engg. Society </h2>
            <p class="grey">
        The Indian School of Mines Computer Science and Engineering Society. Herein after called, CSES shall function under the auspices of Indian School of Mines 'Computer Science & Engineering Department' hereinafter called the 'CSE'.</p>
            <p class="grey">
            The objective of the CSES shall be to promote Computer Science & Engineering awareness among the students in the CSE by organizing technical activities such as lectures, workshop, quizzes and excursion and to foster relationship among the past and present students and the teachers of the CSE by organizing various departmental events such as annual day celebration, fresher's welcome, farewell etc.
            </p>
        </section>
        <!--<section id="events" class="wow rotateInDownRight" data-wow-offset="320">
            <img src="img/acmstudentchapter.png" id="index_quicklinks"/>
            <img src="img/events_coding.png"/>
        </section>-->
        <section id="events" class="wow rotateInDownRight" data-wow-offset="320">
            <table>
                <tr style=" background: -webkit-linear-gradient(#666666, #111111);color:rgb(0,153,255);background: -moz-linear-gradient(#666666, #111111);color:rgb(0,153,255);">
                    <td style="font-size:25px;font-style:bold;color:white;">Quicklinks</td>
                </tr>
                <tr>
                    <td><a href="events.php" target="_blank">Code Marathon</a></td>
                </tr>
                <tr>
                    <td><a href="http://www.ismdhanbad.ac.in/depart/cse/BufferedReader.pdf" target="_blank">Buffered Reader</a></td>
                </tr>
                <tr>
                    <td><a href="ourmembers.php" target="_blank">Our Members</a></td>
                </tr>
                <tr>
                    <td><a href="http://goo.gl/i6Mh2f" target="_blank">Allumni Registration</a></td>
                </tr>
                
            </table>
        </section>
        
        <section id="magazine">
            <a  id="magazine_img"href="http://www.ismdhanbad.ac.in/depart/cse/BufferedReader.pdf" target="_blank">
                <img src="img/bufferedReader2.jpg" style="height:350px;margin:0;" />
            </a>
        </section>
</div>
        
    <section style="height:820px;"></section>
    <section class="wow fadeInDown" data-wow-offset="70" style="height:760px;padding:05px 20px 10px 20px;background-color:rgba(221,221,225,0.5);width:60%;">
        <h2 class="section wow bounceInLeft" data-wow-offset="300" style="color:#102049;">From President's Desk</h2>
        <img src="img/pres.jpg" height="200px" width="220px" style="float:left;-webkit-filter:grayscale(80%); padding:05px 20px 10px 20px;">
        <p>The Indian School of Mines is one of the oldest institutions in India and is known for its immense contributions towards society at large and for science and technology in particular. Since its very inception in 1926, ISM has nurtured and groomed some of the brightest minds of the country to be world leaders in the field of technical education. The department of Computer Science and Engineering was set up in the year 1997, following the resounding success of ISM Alumni in the fields of computer science and information technology. In 17 years, the department has established itself as one of the most sought after CSE departments of the country. The academic programmes of the department attract the best brain pool of the country through prestigious JEE Advanced (earlier known as IIT-JEE) and GATE examinations. The course structure of these programmes is modified and updated periodically to include courses on emerging topics to equip students with the latest advancements in the area of Computer Science. Over the years, the department has created a strong educational platform that is dynamically sustained through quality teaching and researchsupported by excellent infrastructure and the best availableminds. The faculty and alumni of the department continue to makehuge impact in all sectors of society both in India and abroad. We expect you to be apart of the CSE fraternity at ISM and looking forward to have an enriching and long-lasting relationship with you.</p>
    </section>
    <!-- 

    <section class="section wow slideInRight" style="background-color:rgba(89, 182, 149, 0.23);height:430px;">
        <h2>Quiz Wiz V_1.0</h2>
        <p style="width:65%;"> QUIZWiz,a technical quiz was organized on the 8th of April, 2014 to test the general technical knowledge of the students and as a means to encourage students of different years to interact with each other. Keeping this in mind, it was mandatory for all teams to have four members – one from each year. The first year students were encouraged to approach their seniors to form teams and participate in the quiz. The Quiz was conducted in the Computer Lab – I with Dr. Chiranjeev Kumar and Mr. Amgoth Tarachand as the esteemed guests.
        </p>
        <a href="events.php">>View Event Details</a>
        <img src="img/events/quizwiz1.jpg"  style=" position:absolute; top:30px;right:30px;height:370px;">
    </section>-->
    <!-- To here -->
  



    <section class="section wow bounceInLeft" data-wow-offset="300" style="height:500px;margin-bottom:0px;background-color:rgba(221,221,225,0.5);">

            <div class="container"> 
            <div class="main">
                <h2> Event Series</h2>
                <ul id="og-grid" class="og-grid">

              
<!--
                    <li>
                        <a href="#" data-largesrc="img/events/codemarathonjan15.png" data-title="Code Marathon" data-description="">
                            <img src="img/events/codemarathonjan15.png" alt="Code marathon" height="320px">
                        </a>
                    </li>

                    <li>
                        <a href="#" data-largesrc="img/events/codemarathonjan_new2.jpg" data-title="Code Marathon" data-description="">
                            <img src="img/events/codemarathonjan_new2.jpg" alt="Code marathon" width="226px"   height="320px">
                        </a>
                    </li>

                     <li>
                        <a href="#" data-largesrc="img/events/codemarathonjan_new1.jpg" data-title="Code Marathon" data-description="">
                            <img src="img/events/codemarathonjan_new1.jpg" alt="Code marathon" height="320px">
                        </a>
                    </li>

                -->




                    <li>
                        <a href="#" data-largesrc="img/events/codemarathon3.jpg" data-title="Code Marathon" data-description="[CodeMarathon] was a competitive programming contest organised by the Computer Science and Engineering Society of Indian School of Mines, Dhanbad and CodeISM (the coding club of Department of Computer Science and Engineeing). The event was sponsored by Class of 2k6 of the department and Incresol with prizes worth more than Rs 75,000.

[CodeMarathon] consisted of a series of coding contests. Each of the contest is a standard type short contest of duration 2.5 hours to solve 5 problems. ">
                       <img src="img/events/codemarathon3.jpg" alt="code Marathon" height="350px"/>
                        </a>
                    </li>

                    

<!--
                    <li>
                        <a href="#" data-largesrc="img/events/quizwiz1.jpg" data-title="Quiz-wiz V1.0" data-description="QUIZWiz,a technical quiz was organized on the 8th of April, 2014 to test the general technical knowledge of the students and as a means to encourage students of different years to interact with each other. Keeping this in mind, it was mandatory for all teams to have four members – one from each year. The first year students were encouraged to approach their seniors to form teams and participate in the quiz. The Quiz was conducted in the Computer Lab – I with Dr. Chiranjeev Kumar and Mr. Amgoth Tarachand as the esteemed guests.">
                            <img src="img/events/quizwiz1.jpg" alt="quizwiz1" height="320px"/>
                        </a>
                    </li>
                    <li>
                    -->

<li>

                        <a href="#" data-largesrc="img/events/quizwiz2.jpg" data-title="Quiz-wiz V2.0" data-description="QUIZWiz,a technical quiz was organized on the 8th of April, 2014 to test the general technical knowledge of the students and as a means to encourage students of different years to interact with each other. Keeping this in mind, it was mandatory for all teams to have four members – one from each year. The first year students were encouraged to approach their seniors to form teams and participate in the quiz. The Quiz was conducted in the Computer Lab – I with Dr. Chiranjeev Kumar and Mr. Amgoth Tarachand as the esteemed guests.">
                            <img src="img/events/quizwiz2.jpg" alt="quizwiz v2.0" height="350px"/>
                        </a>
                    </li>


                    <li>
                        <a href="#" data-largesrc="img/events/coderush2nov14.jpg" data-title="CodeISM" data-description="Coding and problem solving constitute the core of the Computer Science and Engineering industry. 
                   The club “CodeISM”, abiding its motto of knowledge sharing, will act as a forum for discussion and exchange of ideas and experiences on various topics related to coding and problem solving among its members. 
                   From time to time, it will also arrange lectures by the best coders of the institute. It will surely bridge the gap between the theoretical knowledge learnt and its practical application in the industry. 
                    ">
                            <img src="img/events/coderush2nov14.jpg" alt="Coding Competition" height="350px"/>
                        </a>
                    </li>
                    <li>
                    </li>
                    <!--
                    <li>
                        <a href="" data-largesrc="" data-title="" data-description="">
                            <img src="" alt=""/>
                        </a>
                    </li>



                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>-->
                </ul>  
            </div>
        </div><!-- /container -->



    </section>
<!-- TEST EFFECTS
    <section class="section--blue wow flash" data-wow-offset="300"></section>
    <section class="section--blue wow bounceInUp" data-wow-offset="300"></section>
    <section class="section--blue wow flipInX" data-wow-offset="300"></section>
    <section class="section--blue wow flipInY" data-wow-offset="300"></section>
    <section class="     section--blue wow lightSpeedIn" data-wow-offset="300"></section>
    <section class="section--blue wow rotateIn" data-wow-offset="300"></section>
    <section class="section--blue wow rotateInDownLeft" data-wow-offset="300"></section>
    <section class="section--blue wow slideInDown" data-wow-offset="300"></section>
    <section class="section--blue wow rollIn" data-wow-offset="300"></section>
    <section class="section--green wow slideInLeft" data-wow-duration="2s"></section>
    
   --> 

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
</div>
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