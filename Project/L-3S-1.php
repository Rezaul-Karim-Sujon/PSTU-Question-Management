<?php 
ob_start();
session_start();
if ($_SESSION['name']!="tutorial") {
   header('location: front.php');
 } 
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Level-3 Semester-1</title>
    <link rel="stylesheet" href="L-3S-1.css">
    <link rel="stylesheet" href="Design/css/font-awesome.min.css">
  </head>
  <body>
    <img src="onlinelogomaker-011319-1341-7109.png" alt="">
    <div class="header">
      <div class="nav">
        <ul>
          <li> <a href="index.php"> <i class="fa fa-home"></i> HOME </a> </li>
          <li> <a> <i class="fa fa-bars" aria-hidden="true"></i> Semester </a>
            <ul>
              <li> <a href="L-1S-1.php"> Level-1 1<sup>st</sup> Semester </a></li>
              <li> <a href="L-1S-2.php"> Level-1 2<sup>nd</sup>Semester</a></li>
              <li> <a href="L-2S-1.php"> Level-2 1<sup>st</sup> Semester </a></li>
              <li> <a href="L-2S-2.php"> Level-2 2<sup>nd</sup> Semester </a></li>
              <li> <a href="L-3S-1.php"> Level-3 1<sup>st</sup> Semester </a></li>
              <li> <a href="L-3S-2.php"> Level-3 2<sup>nd</sup> Semester </a></li>
              <li> <a href="L-4S-1.php"> Level-4 1<sup>st</sup> Semester </a></li>
              <li> <a href="L-4S-2.php"> Level-4 2<sup>nd</sup> Semester </a></li>
            </ul>
          </li>
          <li> <a> Solution </a>
            <ul>
              <li> <a href="L-1S-1s.php"> Level-1 1<sup>st</sup> Semester </a></li>
              <li> <a href="L-1S-2s.php"> Level-1 2<sup>nd</sup>Semester</a></li>
              <li> <a href="L-2S-1s.php"> Level-2 1<sup>st</sup> Semester </a></li>
              <li> <a href="L-2S-2s.php"> Level-2 2<sup>nd</sup> Semester </a></li>
              <li> <a href="L-3S-1s.php"> Level-3 1<sup>st</sup> Semester </a></li>
              <li> <a href="L-3S-2s.php"> Level-3 2<sup>nd</sup> Semester </a></li>
              <li> <a href="L-4S-1s.php"> Level-4 1<sup>st</sup> Semester </a></li>
              <li> <a href="L-4S-2s.php"> Level-4 2<sup>nd</sup> Semester </a></li>
            </ul>
          </li>
            <li> <a>  Departments  </a>
                <ul>
                  <div class="dep">
                  <li> <a href="">Computer & Communication Engineering</a></li>
                  <li> <a href="">Computer Science & Information Technology</li>
                  <li> <a href="">Physics & Mechanical Engineering</a></li>
                  <li> <a href="">Electrical & Electronics Engineering</a></li>
                  <li> <a href=""> Mathematics </a></li>
                  </div>
                </ul>
              </li>

          <li> <a href="contact_us.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Contact Us </a> </li>
        </ul>
      </div>
    </div>
    <div class="main">
    <h2> Level: 3 </h2>
    <h2> Semester: 1 </h2>
    <h2> Total Credit Hour: <strong>21.75</strong></h2>
    <div class="col">
      <ul class="course">
        <li class="header">Computer Science & Information Technology</li>
        <li class="emph"><strong>Course Title: </strong> Microprocessors & Assembly Language</li>
        <li><strong>Status: </strong>Theoretical</li>
        <li><strong>Course Code: </strong>CIT-311</li>
        <li><strong>Credit Hour: </strong>3.00</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer Science & Information Technology</li>
        <li class="emph"><strong>Course Title: </strong>Computer Organization & Architecture</li>
        <li><strong>Status: </strong>Theoretical</li>
        <li><strong>Course Code: </strong>CIT-313</li>
        <li><strong>Credit Hour: </strong>3.00</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer Science & Information Technology</li>
        <li class="emph"><strong>Course Title: </strong>Artificial Intelligence</li>
        <li><strong>Status: </strong>Theoretical</li>
        <li><strong>Course Code: </strong>CIT-315</li>
        <li><strong>Credit Hour: </strong>3.00</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer & Communication Engineering</li>
        <li class="emph"><strong>Course Title: </strong>Numerical Methods</li>
        <li><strong>Status: </strong>Theoretical</li>
        <li><strong>Course Code: </strong>CCE-311</li>
        <li><strong>Credit Hour: </strong>3.00</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer & Communication Engineering</li>
        <li class="emph"><strong>Course Title: </strong> Computer Networks</li>
        <li><strong>Status: </strong>Theoretical</li>
        <li><strong>Course Code: </strong>CCE-313</li>
        <li><strong>Credit Hour: </strong>3.00</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer Science & Information Technology</li>
        <li class="emph"><strong>Course Title: </strong>Microprocessors & Assembly Language</li>
        <li><strong>Status: </strong>Sessional</li>
        <li><strong>Course Code: </strong>CIT-312</li>
        <li><strong>Credit Hour: </strong>1.50</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer Science & Information Technology</li>
        <li class="emph"><strong>Course Title: </strong>Artificial Intelligence</li>
        <li><strong>Status: </strong>Sessional</li>
        <li><strong>Course Code: </strong>CIT-316</li>
        <li><strong>Credit Hour: </strong>1.50</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer & Communication Engineering</li>
        <li class="emph"><strong>Course Title: </strong>Numerical Methods</li>
        <li><strong>Status: </strong>Sessional</li>
        <li><strong>Course Code: </strong>CCE-312</li>
        <li><strong>Credit Hour: </strong>.75</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer Science & Information Technology</li>
        <li class="emph"><strong>Course Title: </strong>Software Development Project-1</li>
        <li><strong>Status: </strong>Sessional</li>
        <li><strong>Course Code: </strong>CCE-310</li>
        <li><strong>Credit Hour: </strong>1.50</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
    <div class="col">
      <ul class="course">
        <li class="header">Computer Science & Information Technology</li>
        <li class="emph"><strong>Course Title: </strong>Computer Networks</li>
        <li><strong>Status: </strong>Sessional</li>
        <li><strong>Course Code: </strong>CCE-314</li>
        <li><strong>Credit Hour: </strong>1.50</li>
        <li class="emph"><a href="#" class="button">Enter</a></li>
      </ul>
    </div>
  </div>
  </body>
</html>
