<?php 
ob_start();
session_start();
if ($_SESSION['name']!="tutorial") {
   header('location: front.php');
 } 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Level-4 Semester-2</title>
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
      <h2> Level: 4 </h2>
      <h2> Semester: 2 </h2>
      <h2> Total Credit Hour: <strong>16.50</strong></h2>
      <div class="col">
        <ul class="course">
          <li class="header">Computer & Communication Engineering</li>
          <li class="emph"><strong>Course Title: </strong> Crytography & Network Security</li>
          <li><strong>Status: </strong>Theoretical</li>
          <li><strong>Course Code: </strong>CCE-421</li>
          <li><strong>Credit Hour: </strong>3.00</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">Computer & Communication Engineering</li>
          <li class="emph"><strong>Course Title: </strong> Wireless & Cellular Communication</li>
          <li><strong>Status: </strong>Theoretical</li>
          <li><strong>Course Code: </strong>CCE-421</li>
          <li><strong>Credit Hour: </strong>3.00</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">Computer Science & Information Technology</li>
          <li class="emph"><strong>Course Title: </strong> Computer Graphics & Image Processing</li>
          <li><strong>Status: </strong>Theoretical</li>
          <li><strong>Course Code: </strong>CIT-421</li>
          <li><strong>Credit Hour: </strong>3.00</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">CSE</li>
          <li class="emph"><strong>Course Title: </strong> Project/Thesis</li>
          <li><strong>Status: </strong>Sessional</li>
          <li><strong>Course Code: </strong>CSE-420</li>
          <li><strong>Credit Hour: </strong>3.00</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">CSE</li>
          <li class="emph"><strong>Course Title: </strong> Seminar</li>
          <li><strong>Status: </strong>Sessional</li>
          <li><strong>Course Code: </strong>CSE-421</li>
          <li><strong>Credit Hour: </strong>.75</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">Computer Science & Information Technology</li>
          <li class="emph"><strong>Course Title: </strong> Computer Graphics & Image Processing</li>
          <li><strong>Status: </strong>Sessional</li>
          <li><strong>Course Code: </strong>CIT-422</li>
          <li><strong>Credit Hour: </strong>.75</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">Optional</li>
          <li class="emph"><strong>Course Title: </strong>Digital Signal Processing</li>
          <li><strong>Status: </strong>Theoretical</li>
          <li><strong>Course Code: </strong>CIT-423</li>
          <li><strong>Credit Hour: </strong>3.00</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">Optional</li>
          <li class="emph"><strong>Course Title: </strong> Machine Learning</li>
          <li><strong>Status: </strong>Theoretical</li>
          <li><strong>Course Code: </strong>CIT-423</li>
          <li><strong>Credit Hour: </strong>3.00</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">Optional</li>
          <li class="emph"><strong>Course Title: </strong> Parallel Processing & Distributed System</li>
          <li><strong>Status: </strong>Theoretical</li>
          <li><strong>Course Code: </strong>CIT-423</li>
          <li><strong>Credit Hour: </strong>3.00</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
      <div class="col">
        <ul class="course">
          <li class="header">Optional</li>
          <li class="emph"><strong>Course Title: </strong>Robotics & Computer Vision</li>
          <li><strong>Status: </strong>Theoretical</li>
          <li><strong>Course Code: </strong>CIT-4223</li>
          <li><strong>Credit Hour: </strong>3.00</li>
          <li class="emph"><a href="#" class="button">Enter</a></li>
        </ul>
      </div>
    </div>
  </body>
</html>
