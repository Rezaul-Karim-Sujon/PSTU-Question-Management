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
    <link rel="stylesheet" type="text/css" href="custom2.css">
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
    <table>
      <tr>
        <th>GPA</th>
        <th>Marks Obtained</th>
        <th>Grade Point</th>
      </tr>
      <tr>
        <td>4.00</td>
        <td>80% and above</td>
        <td>A+</td>
      </tr>
      <tr>
        <td>3.75</td>
        <td>75%-79%</td>
        <td>A</td>
      </tr>
      <tr>
        <td>3.50</td>
        <td>70%-74%</td>
        <td>A-</td>
      </tr>
      <tr>
        <td>3.25</td>
        <td>65%-69%</td>
        <td>B+</td>
      </tr>
      <tr>
        <td>3.00</td>
        <td>60%-64%</td>
        <td>B</td>
      </tr>
      <tr>
        <td>2.75</td>
        <td>55%-59%</td>
        <td>B-</td>
      </tr>
      <tr>
        <td>2.50</td>
        <td>50%-54%</td>
        <td>C+</td>
      </tr>
      <tr>
        <td>2.25</td>
        <td>45%-49%</td>
        <td>C</td>
      </tr>
      <tr>
        <td>2.00</td>
        <td>40%-44%</td>
        <td>D</td>
      </tr>
      <tr>
        <td>0.00</td>
        <td>Less than 40%</td>
        <td>F</td>
      </tr>
    </table>
  </body>
</html>
