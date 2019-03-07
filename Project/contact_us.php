<?php 
ob_start();
session_start();
if ($_SESSION['name']!="tutorial") {
   header('location: front.php');
 } 
?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="log in style.css">
  </head>
  <body>
    <div class="box">
      <h2>Contact Us</h2>
      <form>
        <div class="inputbox">
          <input type="text" name="" required="">
          <label>Username</label>
        </div>
        <div class="inputbox">
          <input type="text" name="" required="">
          <label>Designation</label>
        </div>
        <div class="inputbox">
          <input type="text" name="" required="">
          <label>Email</label>
        </div>
        <div class="inputbox">
          <input type="text" name="" required="">
          <label>Phone Number</label>
        </div>
        <div class="inputbox">
          <label>Message</label>
          <br><br>
          <textarea name="Message" rows="8" cols="40"></textarea>
        </div>
        <input type="submit" name="" value="Let's Talk">
      </form>
    </div>
  </body>
</html>
