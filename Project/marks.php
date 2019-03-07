<?php
ob_start();
session_start();
if ($_SESSION['name']!="tutorial") {
   header('location: front.php');
 }
?>
<?php
include ('config.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Question Management System </title>
    <link rel="stylesheet" type="text/css" href="custom1.css">
    <link rel="stylesheet" href="Design/css/font-awesome.min.css">
  </head>
  <body>
    <img src="onlinelogomaker-011319-1341-7109.png" alt="">
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
                <li> <a href="cce.php">Computer & Communication Engineering</a></li>
                <li> <a href="cit.php">Computer Science & Information Technology</li>
                <li> <a href="ph.php">Physics & Mechanical Engineering</a></li>
                <li> <a href="ee.php">Electrical & Electronics Engineering</a></li>
                <li> <a href="mat.php"> Mathematics </a></li>
                </div>
              </ul>
            </li>

        <li> <a href="contact_us.php"> <i class="fa fa-envelope" aria-hidden="true"></i> Contact Us </a> </li>
      </ul>
    </div>
<br> <br>
    <div class="menu">
      <ul>
        <li><a href="index.php">Profile</a></li>
        <li><a href="grading.php">Grading System</a></li>
        <li><a href="marks.php">Marks Distribution</a></li>
        <li><a href="personal.php">Developer</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="box">
      <h2>Marks Distribution</h2>
    </div>
    <table>
      <tr>
        <th>No.</th>
        <th>Type</th>
        <th>Number</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Class Attendence</td>
        <td>10 Marks</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Class Test</td>
        <td>20</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Final Examination</td>
        <td>70 marks</td>
      </tr>
    </table>
    <div class="box1">
      <h3> Total 100 marks</h3>
    </div>
  </body>
</html>
