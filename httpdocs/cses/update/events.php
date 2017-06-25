<?php 
//include 'connect.php';
include 'functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=

<title>CSES Society-ISM Dhanbad |Events</title>
<!-- Linking CSS-->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- end Linking CSS-->
<style type="text/css">

p
{
  width:78%;
  font-size: 14px;
}
h1{
  text-align: center;
  font-family: Verdana,Arial,Helvetica,sans-serif;
  font-size: 35px;
}
h3
{
 font-family: Verdana,Arial,Helvetica,sans-serif;
   
}

#content p {


  width:70%;
}

a#functions_events_navlink
{
    color:rgb(0,153,255);
}
#events_total img
{
  float: right;
  height: 310px;
}

#events_total
{
  position: absolute;
  top:20%;
  margin-left:5%;
  text-align: justify;
  width: 80%;
  line-height: 2;
}
table,tr,td{
  clear:both;
  text-align: center;
  padding: 10px;

  margin:10px;
  width: auto;
}

#marathon_results,#marathon_results td, #marathon_results tr{
  border:1px solid black;

  
}

#events_total h1

{ clear:both;
  font-weight: 800;
  font-variant: bold;
}
#Footer 
{
  position: relative;
  top:5300px;
    width: 125%;
  margin-left: -12.5%;
}
.venue {
  background:rgb(229, 225, 225);
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
  width:97%;
}


</style>

<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
          images[0] = "img/events/codemarathonjan_new1.jpg";
          images[1] = "img/events/codemarathonjan_new2.jpg";
          images[2] = "img/events/codemarathonjan15.png";
          images[3] = "img/events/codemarathon2.jpg";
          images[4] = "img/events/codemarathon3.jpg";
      </script>


</head>

<body onload="startTimer()">
	
<div style="width:1200px;margin-right:auto;margin-left:auto;">
	
    <?php head();?>
<div id="events_total" class="container-fluid">

</br>
</br>
	      	
  <div class="jumbotron bg-primary"><h1><b>Upcoming Events</b></h1>


  </div>




 <h3><span class="label label-success">New</span> Confluence 2015  </h3><hr>
<a href="http://goo.gl/forms/wEGKzAktho" role="button" class="btn btn-lg btn-block btn-primary">Register Now @ Confluence-2015</a>

<!--
 <blockquote class="text-info">
  <p><i><b>Date </b>: <span class="bg-info">13 June 2015</span></i></p>
       <p class=""> <b><i>Venue</b> : Officer's Mess, Chief Engineer (Air/Force),Western Air Command, PALAM, Near Pintoo Park, Old Palam Road, Delhi CANTT-110010</i ></p>

           </blockquote> -->

           <div class="well">
           <p><i><b>Date </b>: <span class="bg-info">13 June 2015</span></i></p>
       <p class=""> <b><i>Venue</b> : Officer's Mess, Chief Engineer (Air/Force),
             Western Air Command, PALAM,
             Near Pintoo Park, Old Palam Road, Delhi CANTT-110010</i ></p></div>

          


 <div id="topcontent">
  <div style ="float:left" > <a href="img/events/Invitation.jpg"  data-toggle="tooltip" title="Click to See larger Image" ><img class="img-thumbnail" width="226" height="320" src="img/events/Invitation.jpg"></a></div>
  <p class=""> Alumni is the  important part of any educational institute , the society aims to foster the student-alumni relation and respects the valuable contribution of our alumni to the department.  The Annual Alumni Get-Together organized last year at <b>Bengaluru</b> turned out to be a successful  event with efforts of current students and alumni.</p>

<p>As per the resolution taken at the <b>Bengaluru</b> event to organize such Get-Together every year in different cities of India the society has identified the city of <b>New Delhi</b> as the location for this year.
</p>
<div style="margin-left:3%; margin-top:2%; margin-bottom:7%;"class="btn-group btn-group-lg">

<a class="btn btn-primary" role="button" href="downloads/Report.pdf"> <span class="glyphicon glyphicon-download"> </span> Report of Confluence-2014 </a>

 <a class="btn btn-warning" role="button" href="https://docs.google.com/forms/d/1yiylhpEwNH9Ff6u_169vPJwy6G5BZSe49j50QrNuVkU/viewform?c=0&w=1">Register Now  in  Alumni Database</a>
</div>








<!--


<li>Poster Making Competition on <b>"Ethical Hacking and Cyber Security"</b> : <b>Mid March</b></li>
<li> Workshop on Photoshop:<b>End March/Early April</b></li>
<li>Farewell of 2015 Batch : <b>April 27th</b></li>
</ol>

-->
  <br/> 


    <!--    <h3>[Code Marathon](24th JAN, 31st JAN, 7th FEB, 14th FEB)</h3><hr/> 
                    <img id="img" src="img/events/codemarathonjan15.png"/>
                   <p>It’s time to convert caffeine to code!!
    <p>The Computer Science and Engineering Society & CodeISM brings<br/> 
      you the biggest coding extravaganza of ISM, “Code Marathon 2015” 
    </p>
    
    <p>4 Saturdays | 10 Hours of Unprecedented Coding | 60 Winners</p>
    <p>Prizes and Goodies worth ₹ 1,05,000 to be won.</p> 
  <p>This time it’s not a battle, it’s a war. </p>
</p>

<a href="http://www.hackerrank.com/contests/code-marathon-div-3" target="_blank">Event Link for 1st years</a><br/>
<a href="http://www.hackerrank.com/contests/code-marathon-div-2" target="_blank">Event Link for 2nd years</a><br/>
     <a href="http://www.hackerrank.com/contests/code-marathon-div-1" target="_blank">Event Link for 3rd years</a>                 
<p style="font-size:20px;color:#cf5023;">Sponsored By: </p>
    <p style="font-size:16px;">Class of CSE 2k6 and <a href = "http://www.incresol.com" target="_blank" style="font-size:18px;cursor:pointer;text-decoration:none;">Incresol</a></p> 
  -->
    

 <div class="jumbotron"> <h1 style="clear:both">Past Events</h1>
  

 </div>
    
     <h3>[Code Marathon](24th JAN, 31st JAN, 7th FEB, 14th FEB)</h3><hr/> 
                    <img class="img-thumbnail" style ="height:320px; width:226px; margin-left:35xpx;"id="img" src="img/events/codemarathonjan15.png"/>
                 

                 <div>  <p >[CodeMarathon] was a competitive programming contest organised by the Computer Science and Engineering Society of Indian School of Mines, Dhanbad and CodeISM (the coding club of Department of Computer Science and Engineeing). The event was sponsored by Class of 2k6 of the department and Incresol with prizes worth more than Rs 75,000.

                    </p>
                   <p > [CodeMarathon] consisted of a series of coding contests. Each of the contest is a standard type short contest of duration 2.5 hours to solve 5 problems. The rules are same as followed in ACM ICPC contests. To provide fair competition the contest had been divided into 3 divisions. The first division was for the 3rd year / final year UG students as well as for PG students. The second and third divisions were for 2nd and 1st year students respectively.</p>

                   <p >
                    A cumulative ranking was calculated for each division based on the performance in each of the contests. Prizes and Goodies will be given to the Top 20 students of each division based on the cumulative rankings.
                </p>
      </div>
   

   <h3 style="padding-top:1% ; padding-left:3%;clear:both"> Results</h3>


  <table  style="margin-left:3%;"class="table table-striped table-hover" id="marathon_results">

    <tr>



<tr><td><b>Rank</b></td> <td><b>DIV I</b></td> <td><b>DIV II</b></td><td><b>DIV III</b></td></tr>


<tr>


  <td>1.</td> <td>Majeed Siddiqui</td><td>Vamsi Krishna</td>
 <td>   Anirudh jain
 </td> 
   </tr>



<tr>  <td>2.</td>
 <td>Naman Taneja</td>  


 <td>Srinivas Devaki
</td> 

 <td>  Aditya Kaushik
 </td>


 </tr>
<tr><td>3.</td> <td>Prayank Mathur
</td>





<td>Rajesh Kumar Sinha
</td> 

 <td>   AJEET SINGH
 </td> 



 </tr>
<tr><td>4.</td> <td>SRK Prasad
</td>

 <td>
Raj
</td>



  <td>DIGVIJAY SINGH

</td> 

 </tr>
<tr><td>5.</td> <td>Suraj Singh
</td>




 <td>Gautam Kumar
</td> 



 <td>  Ankit Kumar
</td> 


 </tr>

</table>


</br>






<div style="margin-left:3%;" class="btn-group btn-group-lg">
<a class="btn btn-warning active disabled" role="button" href=""> Results <span class="glyphicon glyphicon-hand-right"></a>
<a class="btn btn-primary" role="button" href="downloads/div1.xlsx"> <span class="glyphicon glyphicon-download"> </span> Div I top 20 (spredsheet) </a>
<a class="btn btn-primary" role="button" href="downloads/div2.xlsx"> <span class="glyphicon glyphicon-download"> </span> Div II top 20 (spredsheet)</a>
<a class="btn btn-primary" role="button" href="downloads/div3.xlsx"> <span class="glyphicon glyphicon-download"> </span> Div III top 20 (spredsheet)</a>

</div>

</br>
</br>

 <!--
<tr><td>6</td> <td>Jay Doshi
</td> </tr>
<tr><td>7.</td> <td>Nishant Mittal
</td> </tr>
<tr><td>8.</td> <td>Kumar Shubham
</td> </tr>
<tr><td>9.</td> <td>Sajid
</td> </tr>
<tr><td>10.</td> <td>Devender Yadav
</td> </tr>

<tr><td>11.</td> <td>Surender Singh
</td> </tr>
<tr><td>12.</td> <td>Amandeep Singh
</td> </tr>
<tr><td>13.</td> <td>Deep Sakre
</td> </tr>
<tr><td>14.</td> <td>Govind Patidar
</td> </tr>
<tr><td>15.</td> <td>Aditya Goyal
</td> </tr>
<tr><td>16.</td> <td>Vivek
</td> </tr>
<tr><td>17.</td> <td>Nikhil Mittal
</td> </tr>
<tr><td>18.</td> <td>Rishabh Kumar
</td> </tr>
<tr><td>19.</td> <td>Janmajai Rastogi
</td> </tr>
<tr><td>20.</td> <td>Praveen Yadav
</td> </tr>

-->

 




<!--
<tr><td>6</td> <td>Ashish Kumar
</td> </tr>
<tr><td>7.</td> <td>Aman Ranjan Thakur
</td> </tr>
<tr><td>8.</td> <td>Harshit
</td> </tr>
<tr><td>9.</td> <td>Saurav Kumar Jindwani
</td> </tr>
<tr><td>10.</td> <td>Imam Khurshid
</td> </tr>

<tr><td>11.</td> <td>Arunaditya Chanda
</td> </tr>
<tr><td>12.</td> <td>Shubham Bansal
</td> </tr>
<tr><td>13.</td> <td>Prince Raj Kumar
</td> </tr>
<tr><td>14.</td> <td>Shantanu Mishra
</td> </tr>
<tr><td>15.</td> <td>Piyush Anand
</td> </tr>
<tr><td>16.</td> <td>Kunwar Sachin Singh
</td> </tr>
<tr><td>17.</td> <td>Rajat
</td> </tr>
<tr><td>18.</td> <td>Sajid Iqbal
</td> </tr>
<tr><td>19.</td> <td>vedika Lohia
</td> </tr>
<tr><td>20.</td> <td>Prabhodh Tripathi
</td> </tr>

-->


  


<!--
<tr><td>6</td> <td>  Kaustubh Tandon
 </td> </tr>
<tr><td>7.</td> <td> Ashish Verma 
 </td> </tr>
<tr><td>8.</td> <td> DEV KOTHARI
 </td> </tr>
<tr><td>9.</td> <td> Aditya Rajesh Badole
 </td> </tr>
<tr><td>10.</td> <td> Akshit
 </td> </tr>

<tr><td>11.</td> <td> RISHABH THUKRAL
 </td> </tr>
<tr><td>12.</td> <td> JUNAID ALAM
</td> </tr>
<tr><td>13.</td> <td> AASHISH KUMAR
</td> </tr>
<tr><td>14.</td> <td> Triloki Nath
 </td> </tr>
<tr><td>15.</td> <td> KRISHNADITYA
 </td> </tr>
<tr><td>16.</td> <td> Kumud Khandelwal
 </td> </tr>
<tr><td>17.</td> <td> shubham sharma
  </td> </tr>
<tr><td>18.</td> <td> Yash Goel
 </td> </tr>
<tr><td>19.</td> <td> Sri Kunal
 </td> </tr>
<tr><td>20.</td> <td>  </td> </tr>

-->

 



   
       

        <div class="page-header"><h3   style="clear:both">CodeRush(1-2 November 2014)</h3></div>  
                    <img class="img-thumbnail"  src="img/events/coderush2nov14.jpg"/>
                   <p>Coding and problem solving constitute the core of the Computer Science and Engineering industry. 
                   Keeping this in mind, the department has taken its first step towards developing a sound coding aptitude and a healthy coding culture among the students by establishing a coding club. 
                   The club “CodeISM”, abiding its motto of knowledge sharing, will act as a forum for discussion and exchange of ideas and experiences on various topics related to coding and problem solving among its members. 
                   From time to time, it will also arrange lectures by the best coders of the institute. It will surely bridge the gap between the theoretical knowledge learnt and its practical application in the industry. 
                    </p>
                   <p>Moreover, the club will also promote participation in various nationally and internationally renowned coding competitions.
                    CodeISM has also recognized that the need of the hour is to provide placement and internship oriented lectures for the students to survive the rigorous coding and interview rounds. 
                    The club has come up with a series of eight lectures on popular topics like data structures, algorithms and strings, to make students adept in problem solving with placements and internships as the prime focus. 
                    With such a start, coding club will surely become an integral part of departmental culture, taking the name of the department to distances still undiscovered, in the coming years.
                    The contest was held on 2nd November 2014 from 9:00 pm to 11:30 pm to test the coding abilities of the CSE department.
                </p>
 

      <div  class="page-header"><h3 style="padding-top:2%;">QuizWiz V2.0(13 September 2014)</h3></div>
            <img class="img-thumbnail" src="img/events/quizwiz2.jpg"/>
          <p>  The Computer Science and Engineering Society (CSES) organized a technical quiz – QUIZ Wiz v2.0 on the 13th of September, 2014. The Quiz was organized to test the general technical knowledge of the students and as a means to encourage students of different years to interact with each other.
</p><p>The preliminary round was followed by mains having 5 rounds. Round 1 consisted of 15 questions & then next 4 rounds consisted of 5 questions each. The questions also included visual questions like logos, popular personalities and visual connects, among other general quiz questions. Also included in the Quiz was the ‘Simple Pounce’ rule. According to this rule any team could answer a question directed to another team if they didn’t wish to wait for the question to be passed to them in the general order. However, negative marks were awarded on incorrectly answering such a ‘pounced’ question. Any team could also bar the Quiz-master from providing any hints, by using the ‘Block’ option, even if the question was directed to another team. With a blend of interesting rules and a few tricky questions, the teams still managed to score well, with ‘The Misfits’ bagging the top position. The top five teams were as follows:
</p>

                 
<p >The Quiz ended with a fair share of excitement and a healthy competition. The 

teams displayed commendable competitive spirit, team-work and knowledge. It 

was a welcome distraction from the curriculum and certainly a learning 

experience.</p>

 <table style="margin-left:3%;" class="table table-striped table-hover" id="results_quizwiz">
                      <tr>
                        <td><b>Team name</b></td>
                        <td><b>Members</b></td>
                        <td><b>Final Score&emsp;</b></td>
                      </tr>

                      <tr>
                        <td>The Misfits</td>
                        <td>1. Rishabh Thukral
                            2. Bhavishya Mathur
                            3.Ashish Verma
                            4. Mohit Punjabi
                          </td>
                        <td>135</td>
                      </tr>
                      <tr>
                        <td>Vanquishers</td>
                        <td>1. Aditya Pandey

2. Raj Roushan

3. Abhinav Goyal

4. Ashish Bahukhandi
                            </td>
                        <td>90</td>
                      </tr>
                      <tr>
                        <td>Seinstein</td>
                        <td>1.  Dev Kothari

2.  Pratik Jain

3.  Shubham Chauhan

4.  Sourav Kothari</td>
                          <td>80</td>
                      </tr>
                 
<tr>
                        <td>Big Indian</td>
                        <td>1. Rajat Jain

2. Niraj Patidar

3. Majeed Siddiqui

4. Mohit Srivastava</td>
                          <td>55</td>
                      </tr>
                  <tr>
                        <td>System32</td>
                        <td>1. Hind Geel

2. Sahil Pacherwal

3. Rajat Bajaj

4. Aditya Rajesh 

Badole</td>
                          <td>10</td>
                      </tr>
                  
                  </table>


<div style="margin-left:3%; margin-top:1%; margin-bottom:3%;" class="btn-group btn-group-lg">
<a class="btn btn-warning active disabled" role="button" href="">Report <span class="glyphicon glyphicon-hand-right"> </a>
<a class="btn btn-primary" role="button" href="downloads/quizwiz2.doc" target="_blank"> <span class="glyphicon glyphicon-download"> </span>  Quiz-Wiz V2.0(Powered by Google)</a>

</div>





  

      <h3>Bangalore Get-Together 2014</h3><hr/>

                   <img src="img/gettogether2014.jpg" class="img-thumbnail"style="height:180px;width:220px;" />
                   <p style="float:left;">Coding and problem solving constitute the core of the Computer Science and Engineering industry. 
                   Keeping this in mind, the department has taken its first step towards developing a sound coding aptitude and a healthy coding culture among the students by establishing a coding club. 
                   The club “CodeISM”, abiding its motto of knowledge sharing, will act as a forum for discussion and exchange of ideas and experiences on various topics related to coding and problem solving among its members. 
                   From time to time, it will also arrange lectures by the best coders of the institute. It will surely bridge the gap between the theoretical knowledge learnt and its practical application in the industry. 
                    </p>
                   <p style="margin-bottom:4%;">Moreover, the club will also promote participation in various nationally and internationally renowned coding competitions.
                    CodeISM has also recognized that the need of the hour is to provide placement and internship oriented lectures for the students to survive the rigorous coding and interview rounds. 
                    The club has come up with a series of eight lectures on popular topics like data structures, algorithms and strings, to make students adept in problem solving with placements and internships as the prime focus. 
                    With such a start, coding club will surely become an integral part of departmental culture, taking the name of the department to distances still undiscovered, in the coming years.
                    The contest was held on 2nd November 2014 from 9:00 pm to 11:30 pm to test the coding abilities of the CSE department.
                </p>
                   
 
      <h3> Quiz Wiz(8 April 2014) </h3><hr/>
                  <img  class="img-thumbnail"src="img/events/quizwiz1.jpg"/>
                  <p style="margin-bottom:3%;">The Computer Science and Engineering Society (CSES) organized a technical quiz – QUIZWiz on the 8th of April, 2014. The Quiz was organized to test the general technical knowledge of the students and as a means to encourage students of different years to interact with each other. Keeping this in mind, it was mandatory for all teams to have four members – one from each year. The first year students were encouraged to approach their seniors to form teams and participate in the quiz. 
                     The Quiz was conducted in the Computer Lab – I of the Computer Science and Engineering Department with Dr. Chiranjeev Kumar and Mr. AmgothTarachand as the esteemed guests. With 8 teams, and a total of 32 participants, Ankit Agarwal – the quiz-master started the preliminary round.
                     The preliminary round comprised of 26 questions, each question carrying one point. From questions related to various programming languages to popular social networks, this round had a plethora of questions. Team ‘NULL’ managed to score the highest, 20 points followed by ‘Do not panic!’ at 19 points. Of the 8 teams, the top 5 qualified for the next round of the Quiz.
                   </p> 



                    <table style="margin-left:3%;" class="table table-striped table-hover"id="results_quizwiz">
                      <tr>
                        <td><b>Team name</b></td>
                        <td><b>Members</b></td>
                        <td><b>Position&emsp;</b></td>
                      </tr>

                      <tr>
                        <td>Do Not Panic</td>
                        <td>1.  Rajat Gupta
                            2.  AbhinavGoyal
                            3.  Yogendra Singh
                            4.  SakshiGopal
                          </td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>SPARSH</td>
                        <td>1.  SparshChoudhary
                            2.  SajidHussain
                            3.  Saurav Kothari
                            4.  Aritra Gupta
                            </td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>Team NULL</td>
                        <td>1.  Kriti Singh
                            2.  Ashish Verma
                            3.  Mohit Punjabi
                            4.  VisheshSrivastav
                            </td>
                          <td>3</td>
                      </tr>
                  </table>

                  
<div style="margin-left:3%; margin-top:1%; margin-bottom:3%;" class="btn-group btn-group-lg">
<a class="btn btn-warning active disabled" role="button" href="">Report <span class="glyphicon glyphicon-hand-right"> </a>
<a class="btn btn-primary" role ="button"href="downloads/quizwiz.doc" target="_blank"> <span class="glyphicon glyphicon-download"> </span> Quiz-Wiz(Powered by Google)</a>    

           
</div>


      

                  </div>


                </div>

              

              

    
    
    
    
    
<?php footer(); ?>


<!-- Animaation Scripts-->  
<script src="js/jquery-1.9.0.min.js"></script>  
<script src="js/bootstrap.js"></script> 





<!-- end of Animaation Scripts--> 

  </body>
</html>