<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../create.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="modify_post_controller.php" >
  <div class="container">
    <label for="uname"><b>Header</b></label>
    <?php
    $header = $_POST["header"];
    $id = $_POST["id"];
    echo "<input type='hidden' value='{$id}' name='id' required>";
    echo "<input type='text' value='{$header}' name='header' required>";
    ?>
    <label for="psw"><b>Content</b></label>
    <?php
    $text = $_POST["text"];
    $post_id = $_POST["id"];
    echo "<textarea type='text' name='text' required>$text</textarea>";
    ?>
    <button type="submit" name="but_submit">Save</button>
  </div>
  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>
</body>
</html>