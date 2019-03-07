<?php
include ('config.php');
if (isset($_POST['form'])) {
  try {
    $sql = "INSERT INTO tbl_student (username,roll,registration,password1,password2) VALUES ('$_POST[username]','$_POST[roll]','$_POST[registration]','$_POST[password1]','$_POST[password2]')";
    $a=$_POST['password1'];
    $b=$_POST['password2'];
    $check= "SELECT * FROM tbl_student where roll ='$_POST[roll]' and registration ='$_POST[registration]'";
    $result = mysqli_query($conn,$check);
    if($a!=$b)
    {
      $error_message="Confirm your password!";
      
    }
    else if (mysqli_num_rows($result) > 0) {
      $error_message="Users already exists!";
      
    }
    else
    {
      if (mysqli_query($conn, $sql)) {
    session_start();
      $_SESSION['name'] = "tutorial";
      $_SESSION['username']=$_POST['username'];
      $_SESSION['password1']=$_POST['password1'];
      header('location: index.php');
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  }
}
catch (Exception $e) {
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
      <h2>Sign Up</h2>
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
          <input type="text" name="roll" required="">
          <label> Id No.</label>
        </div>
        <div class="inputbox">
          <input type="text" name="registration" required="">
          <label> Registration Number</label>
        </div>
        <div class="inputbox">
          <input type="password" name="password1" required="">
          <label>Password</label>
        </div>
        <div class="inputbox">
          <input type="password" name="password2" required="">
          <label>Confirm Password</label>
        </div>
        <div class="inputbox">
          <input type="text" name="email" required="">
          <label>Email</label>
        </div>
        <input type="submit" name="form" value="Submit">
      </form>
    </div>
  </body>
</html>
