<?php
  include "check_login.php";
  //if user_id is null redirect to login page
  $check_login();
  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
    $type = $_SESSION["user_type"];
$conn = mysqli_connect("db", "root", "password", "data");
$query = mysqli_query($conn, "SELECT * FROM post ORDER BY id DESC")
   or die (mysqli_error($dbconnect));
   echo "<table><tr>";
   echo "</tr>";

   echo "<img src = './cover.png' style=width:100%>";
   echo "<div class='row'>";
   echo "<div class='leftcolumn'>";
while ($row = mysqli_fetch_array($query)){
    $time = $row['time'];
    $text = $row['text'];
   
    $byUserId = $row["user_id"];
    $id = $row['id'];
    $header = $row['header'];
    $space = str_repeat('&nbsp;', 5); //add 5 space 
    echo "<div class='card'>";
    if ($_SESSION["user_type"] == 0 || $_SESSION["user_id"] == $byUserId ) {
      echo "<div style='display: flex;
      justify-content: end;'>";
      echo "<form action='modify_page.php' method = 'post'>";
      echo "<input type='hidden' value='$id' name ='id'>";
      echo "<input type='hidden' value= '$text' name ='text'>";
      echo "<input type='hidden' value= '$header' name ='header'>";
     echo "<button type='submit' role='button' name='but_submit' class='button-3'><i class='fa fa-edit'></i></button></a>";
     echo "</form>";
     echo "$space";
     echo "<form action='delete_post_controller.php' method = 'post'>";
     echo "<input type='hidden' value='$id' name ='id'>";
      echo "<button type='submit' role='button' name='but_submit' class='button-3' style='background-color:#FF4742'><i class='fa fa-trash'></i> </button></a>";
    
      echo "</form>";
      echo "</div>";
  }
    echo "<h2>{$header}</h2>";
    echo "<h5>{$time}</h5>";
    echo "<hr>";
    echo "<p name ='text'>{$text}</p>";
    echo "</div>";
}
echo "</div>";
?>
<div class="rightcolumn">
    <div class="card">
    <?php
    $unmae = $_SESSION['uname'];
      echo "<h3> Hello $unmae</h3>";
      ?>
    <a href="./myArticle.php"><button type='submit' role="button" name='but_submit' class='button-3'  style="background-color: grey;  width: 100%; padding: 10px 20px !important;"><i class='fa fa-edit'></i>  My article</button></a>
    <a href="./create_post.php"><button type='submit' role="button" name='but_submit' class='button-3'  style="width: 100%; padding: 10px 20px !important; "><i class='fa fa-edit'></i>  Create</button></a>
    <a href="./logout_controller.php"><button type='submit' name='but_submit' class='button-3' style="background-color:#FF4742;  width: 100%; padding: 10px 20px !important;"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</button></a>

    <!-- HTML !-->


  </div>
</div>
</div>
</html>

<!-- HTML !-->
