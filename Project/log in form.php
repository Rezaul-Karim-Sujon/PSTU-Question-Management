<?php
include ('config.php');
if (isset($_POST['form_login'])) {
  
  try{
    $sql = "SELECT * FROM tbl_student where username ='$_POST[username]' and password1 ='$_POST[password1]'";
    $result = mysqli_query($conn,$sql);
    if ($result) {
      session_start();
      $_SESSION['name'] = "tutorial";
      $_SESSION['username']=$_POST['username'];
      $_SESSION['password1']=$_POST['password1'];
      header('location: index.php');
    }
    else
    {
      $error_message="Invalid username or password";
      
    }

  }
  catch(Exception $e)
  {
    $error_message = $e->getMessage();
  }
}

?>




<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="log in style.css">
  </head>
  <body>
    <div class="box">
      <h2>Sign in</h2>
      <h3><?php
    if (isset($error_message)) {
      echo $error_message;
    }
    ?>
  </h3>
      <form method="post">
       <div class="inputbox">
          <input type="text" name="username" required="">
          <label>Username</label>
        </div>
        <div class="inputbox">
          <input type="password" name="password1" required="">
          <label>Password</label>
        </div>
        <input type="submit" name="form_login" value="Submit">
      </form>
    </div>
  </body>
</html>
