<?php
  include "check_login.php";
  //if user_id is null redirect to login page
  $is_home();
  ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>Login Form</h2>
<?php
//display message if needed
    if(!empty($_GET['message'])) {
      $mess =$_GET['message'];
      echo "<div class='alert'>";
      echo "<strong>Warning!</strong> $mess";
      echo '</div>';
    }
    ?>
        <br>
<form  method="post" action= "signIn_controller.php">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="but_submit">Login</button>
  </div>
  <div class="container" style="background-color:#f1f1f1">
  <a href="./signup.php"><button type="button" class="cancelbtn">Sign Up</button></a>

  </div>
</form>

</body>
</html>
